<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class LessonController extends Controller implements HasMiddleware
{
    /**
     * ✅ Définition des middlewares Laravel 11+
     */
    public static function middleware(): array
    {
        return [
            'auth', // Toutes les méthodes nécessitent auth
            new Middleware('course.ownership', except: ['index', 'show', 'studentShow']),
            new Middleware('course.access', only: ['studentShow', 'markComplete']),
            new Middleware('lesson.sequential', only: ['studentShow']), // ✅ NOUVEAU
        ];
    }

    /**
     * Liste des leçons (instructeur)
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

        return redirect()->route('instructor.lessons.index', $course)
            ->with('success', '✅ Leçon créée avec succès !');
    }

    /**
     * Afficher (instructeur)
     */
    public function show(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $lesson->load('quizzes');

        // Navigation
        $previousLesson = $course->lessons()
            ->where('order', '<', $lesson->order)
            ->ordered()
            ->latest('order')
            ->first();

        $nextLesson = $course->lessons()
            ->where('order', '>', $lesson->order)
            ->ordered()
            ->first();

        return view('lessons.show', compact(
            'course',
            'lesson',
            'previousLesson',
            'nextLesson'
        ));
    }

    /**
     * ✅ NOUVELLE : Vue étudiant d'une leçon
     */
    public function studentShow(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $lesson->load('quizzes');

        // Navigation
        $previousLesson = $course->lessons()
            ->where('order', '<', $lesson->order)
            ->where('is_published', true)
            ->ordered()
            ->latest('order')
            ->first();

        $nextLesson = $course->lessons()
            ->where('order', '>', $lesson->order)
            ->where('is_published', true)
            ->ordered()
            ->first();

        // Progression
        $isCompleted = auth()->user()
            ->lessonCompletions()
            ->where('lesson_id', $lesson->id)
            ->where('is_completed', true)
            ->exists();

        return view('lessons.student-show', compact(
            'course',
            'lesson',
            'previousLesson',
            'nextLesson',
            'isCompleted'
        ));
    }

    /**
     * ✅ NOUVELLE : Marquer leçon comme complétée
     */
    public function markComplete(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $user = auth()->user();

        // Enregistrer progression
        $user->lessonCompletions()->updateOrCreate(
            [
                'lesson_id' => $lesson->id,
                'user_id' => $user->id,
            ],
            [
                'is_completed' => true,
                'completed_at' => now(),
            ]
        );

        // Mettre à jour progression cours
        $this->updateCourseProgress($user, $course);

        return response()->json([
            'success' => true,
            'message' => '✅ Leçon marquée comme complétée !',
        ]);
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

        // Gestion vidéo
        if ($request->boolean('remove_video')) {
            if ($lesson->video_url) {
                Storage::disk('public')->delete($lesson->video_url);
            }
            $validated['video_url'] = null;
        } elseif ($request->hasFile('video')) {
            if ($lesson->video_url) {
                Storage::disk('public')->delete($lesson->video_url);
            }
            $validated['video_url'] = $request->file('video')
                ->store('lessons/videos', 'public');
        }

        // Gestion document
        if ($request->boolean('remove_document')) {
            if ($lesson->document_path) {
                Storage::disk('public')->delete($lesson->document_path);
            }
            $validated['document_path'] = null;
        } elseif ($request->hasFile('document')) {
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

        return redirect()->route('instructor.lessons.show', [$course, $lesson])
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

        // Réorganiser ordre
        $course->lessons()
            ->where('order', '>', $lesson->order)
            ->decrement('order');

        $lesson->delete();

        return redirect()->route('instructor.lessons.index', $course)
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

        return redirect()->route('instructor.lessons.edit', [$course, $newLesson])
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

    private function detectContentType(array $data, ?Lesson $lesson = null): string
    {
        if (!empty($data['content_type'])) return $data['content_type'];
        if (!empty($data['video_url']) || !empty($data['video'])) return 'video';
        if (!empty($data['document']) || ($lesson && $lesson->document_path)) return 'pdf';
        return 'text';
    }

    /**
     * ✅ Mettre à jour progression globale du cours
     */
    private function updateCourseProgress($user, Course $course): void
    {
        // ✅ Cache la progression 5 minutes
        $cacheKey = "course_progress_{$user->id}_{$course->id}";

        $progress = Cache::remember($cacheKey, 300, function () use ($user, $course) {
            $totalLessons = $course->lessons()
                ->where('is_published', true)
                ->count();

            $completedLessons = $user->lessonCompletions()
                ->whereHas('lesson', function ($query) use ($course) {
                    $query->where('course_id', $course->id)
                        ->where('is_published', true);
                })
                ->where('is_completed', true)
                ->count();

            return $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;
        });

        $user->enrollments()
            ->where('course_id', $course->id)
            ->update([
                'progress' => round($progress, 2),
                'last_accessed_at' => now(),
            ]);
    }

}
