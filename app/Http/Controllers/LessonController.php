<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('course.ownership')->except(['index', 'show']);
        $this->middleware('course.access')->only(['show']);
    }

    /**
     * Liste des leçons
     */
    public function index(Course $course)
    {
        $lessons = $course->lessons()->ordered()->paginate(15);

        return view('lessons.index', compact('course', 'lessons'));
    }

    /**
     * Formulaire création
     */
    public function create(Course $course)
    {
        $nextOrder = $course->lessons()->max('order') + 1;

        return view('lessons.create', compact('course', 'nextOrder'));
    }

    /**
     * Enregistrer
     */
    public function store(Request $request, Course $course)
    {
        $validated = $this->validateLesson($request);

        // Upload vidéo
        if ($request->hasFile('video')) {
            $validated['video_url'] = $request->file('video')
                ->store('lessons/videos', 'public');
        }

        // Upload document
        if ($request->hasFile('document')) {
            $validated['document_path'] = $request->file('document')
                ->store('lessons/documents', 'public');
        }

        $validated['course_id'] = $course->id;
        $validated['is_free'] = $request->boolean('is_free');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['content_type'] = $this->detectContentType($validated);

        Lesson::create($validated);

        return redirect()->route('lessons.index', $course)
            ->with('success', '✅ Leçon créée avec succès !');
    }

    /**
     * Afficher (avec navigation)
     */
    public function show(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $lesson->load('quizzes');

        // 🆕 NAVIGATION PREV/NEXT
        $previousLesson = $course->lessons()
            ->where('order', '<', $lesson->order)
            ->ordered()
            ->latest('order')
            ->first();

        $nextLesson = $course->lessons()
            ->where('order', '>', $lesson->order)
            ->ordered()
            ->first();

        // 🆕 PROGRESSION
        $isCompleted = false;
        if (auth()->check()) {
            $isCompleted = auth()->user()
                ->lessonProgress()
                ->where('lesson_id', $lesson->id)
                ->where('is_completed', true)
                ->exists();
        }

        return view('lessons.show', compact(
            'course',
            'lesson',
            'previousLesson',
            'nextLesson',
            'isCompleted'
        ));
    }

    /**
     * Formulaire édition
     */
    public function edit(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        return view('lessons.edit', compact('course', 'lesson'));
    }

    /**
     * Mettre à jour
     */
    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $validated = $this->validateLesson($request);

        // 🎯 SUPPRESSION VIDÉO
        if ($request->boolean('remove_video')) {
            if ($lesson->video_url) {
                Storage::disk('public')->delete($lesson->video_url);
            }
            $validated['video_url'] = null;
        }
        // Upload nouvelle vidéo
        elseif ($request->hasFile('video')) {
            if ($lesson->video_url) {
                Storage::disk('public')->delete($lesson->video_url);
            }
            $validated['video_url'] = $request->file('video')
                ->store('lessons/videos', 'public');
        }

        // 🎯 SUPPRESSION DOCUMENT
        if ($request->boolean('remove_document')) {
            if ($lesson->document_path) {
                Storage::disk('public')->delete($lesson->document_path);
            }
            $validated['document_path'] = null;
        }
        // Upload nouveau document
        elseif ($request->hasFile('document')) {
            if ($lesson->document_path) {
                Storage::disk('public')->delete($lesson->document_path);
            }
            $validated['document_path'] = $request->file('document')
                ->store('lessons/documents', 'public');
        }

        $validated['is_free'] = $request->boolean('is_free');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['content_type'] = $this->detectContentType($validated, $lesson);

        $lesson->update($validated);

        return redirect()->route('lessons.show', [$course, $lesson])
            ->with('success', '✅ Leçon mise à jour avec succès !');
    }

    /**
     * Supprimer
     */
    public function destroy(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        // Supprimer fichiers
        if ($lesson->video_url) {
            Storage::disk('public')->delete($lesson->video_url);
        }
        if ($lesson->document_path) {
            Storage::disk('public')->delete($lesson->document_path);
        }

        // Réorganiser
        $course->lessons()
            ->where('order', '>', $lesson->order)
            ->decrement('order');

        $lesson->delete();

        return redirect()->route('lessons.index', $course)
            ->with('success', '✅ Leçon supprimée avec succès !');
    }

    /**
     * Réorganiser
     */
    public function reorder(Request $request, Course $course)
    {
        $request->validate([
            'lessons' => 'required|array',
            'lessons.*.id' => 'required|exists:lessons,id',
            'lessons.*.order' => 'required|integer|min:0',
        ]);

        foreach ($request->lessons as $lessonData) {
            Lesson::where('id', $lessonData['id'])
                ->where('course_id', $course->id)
                ->update(['order' => $lessonData['order']]);
        }

        return response()->json([
            'success' => true,
            'message' => '✅ Ordre mis à jour !'
        ]);
    }

    /**
     * Dupliquer
     */
    public function duplicate(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $newLesson = $lesson->replicate();
        $newLesson->title = $lesson->title . ' (Copie)';
        $newLesson->slug = null;
        $newLesson->order = $course->lessons()->max('order') + 1;
        $newLesson->is_published = false;
        $newLesson->save();

        return redirect()->route('lessons.edit', [$course, $newLesson])
            ->with('success', '✅ Leçon dupliquée !');
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    private function validateLesson(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content_type' => 'nullable|in:text,video,pdf,quiz',
            'content' => 'nullable|string',
            'video_url' => 'nullable|url',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime|max:102400',
            'document' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:10240',
            'duration' => 'nullable|integer|min:1',
            'order' => 'required|integer|min:0',
            'is_free' => 'boolean',
            'is_published' => 'boolean',
        ]);
    }

    private function authorizeLesson(Course $course, Lesson $lesson): void
    {
        if ($lesson->course_id !== $course->id) {
            abort(404, 'Cette leçon n\'appartient pas à ce cours.');
        }
    }

    private function detectContentType(array $data, ?Lesson $lesson = null)
    {
        if (!empty($data['content_type'])) return $data['content_type'];
        if (!empty($data['video_url']) || !empty($data['video'])) return 'video';
        if (!empty($data['document']) || ($lesson && $lesson->document_path)) return 'pdf';
        return 'text';
    }
}
