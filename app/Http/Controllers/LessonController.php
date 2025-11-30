<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    /**
     * Afficher toutes les leçons d'un cours
     */
    public function index(Course $course)
    {
        $lessons = $course->lessons()->ordered()->paginate(15);

        return view('lessons.index', compact('course', 'lessons'));
    }

    /**
     * Formulaire de création
     */
    public function create(Course $course)
    {
        $nextOrder = $course->lessons()->max('order') + 1;

        return view('lessons.create', compact('course', 'nextOrder'));
    }

    /**
     * Enregistrer une nouvelle leçon
     */
    public function store(Request $request, Course $course)
    {
        $validated = $this->validateLesson($request);

        // Gérer l'upload du document
        if ($request->hasFile('document')) {
            $validated['document_path'] = $request->file('document')
                ->store('lessons/documents', 'public');
        }

        // ⭐ FIX : Gestion correcte des booléens
        $validated['course_id'] = $course->id;
        $validated['is_free'] = $request->boolean('is_free');
        $validated['is_published'] = $request->boolean('is_published');

        // ⭐ NOUVEAU : Détecter automatiquement le content_type
        $validated['content_type'] = $this->detectContentType($validated);

        Lesson::create($validated);

        return redirect()->route('courses.lessons.index', $course)
            ->with('success', '✅ Leçon créée avec succès !');
    }

    /**
     * Afficher une leçon
     */
    public function show(Course $course, Lesson $lesson)
    {

        $this->authorizeLesson($course, $lesson);

        return view('lessons.show', compact('course', 'lesson'));
    }

    /**
     * Formulaire d'édition
     */
    public function edit(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        return view('lessons.edit', compact('course', 'lesson'));
    }

    /**
     * Mettre à jour une leçon
     */
    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $validated = $this->validateLesson($request);

        // ⭐ NOUVEAU : Gérer la suppression explicite du document
        if ($request->boolean('remove_document')) {
            if ($lesson->document_path) {
                Storage::disk('public')->delete($lesson->document_path);
            }
            $validated['document_path'] = null;
        }
        // Gérer l'upload du nouveau document
        elseif ($request->hasFile('document')) {
            if ($lesson->document_path) {
                Storage::disk('public')->delete($lesson->document_path);
            }
            $validated['document_path'] = $request->file('document')
                ->store('lessons/documents', 'public');
        }

        // ⭐ FIX : Gestion correcte des booléens
        $validated['is_free'] = $request->boolean('is_free');
        $validated['is_published'] = $request->boolean('is_published');

        // ⭐ NOUVEAU : Mettre à jour le content_type
        $validated['content_type'] = $this->detectContentType($validated, $lesson);

        $lesson->update($validated);

        return redirect()->route('courses.lessons.index', $course)
            ->with('success', '✅ Leçon mise à jour avec succès !');
    }

    /**
     * Supprimer une leçon
     */
    public function destroy(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        // Supprimer le document associé
        if ($lesson->document_path) {
            Storage::disk('public')->delete($lesson->document_path);
        }

        $lesson->delete();

        return redirect()->route('courses.lessons.index', $course)
            ->with('success', '✅ Leçon supprimée avec succès !');
    }

    /**
     * ⭐ NOUVEAU : Réorganiser les leçons (drag & drop)
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
            'message' => '✅ Ordre des leçons mis à jour !'
        ]);
    }

    /**
     * ⭐ NOUVEAU : Dupliquer une leçon
     */
    public function duplicate(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $newLesson = $lesson->replicate();
        $newLesson->title = $lesson->title . ' (Copie)';
        $newLesson->slug = null; // Le modèle va le régénérer
        $newLesson->order = $course->lessons()->max('order') + 1;
        $newLesson->is_published = false; // Brouillon par défaut
        $newLesson->save();

        return redirect()->route('courses.lessons.edit', [$course, $newLesson])
            ->with('success', '✅ Leçon dupliquée avec succès !');
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    /**
     * Validation centralisée
     */
    private function validateLesson(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content_type' => 'nullable|in:text,video,pdf,quiz',
            'content' => 'nullable|string',
            'video_url' => 'nullable|url',
            'document' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:10240',
            'duration' => 'nullable|integer|min:1',
            'order' => 'required|integer|min:0',
        ]);
    }

    /**
     * Vérifier que la leçon appartient au cours
     */
    private function authorizeLesson(Course $course, Lesson $lesson): void
    {
        if ($lesson->course_id !== $course->id) {
            abort(404, 'Cette leçon n\'appartient pas à ce cours.');
        }
    }

    /**
     * Détecter automatiquement le type de contenu
     */
    private function detectContentType(array $data, ?Lesson $lesson = null)
    {
        // Si explicitement défini, on le garde
        if (!empty($data['content_type'])) {
            return $data['content_type'];
        }

        // Détection automatique
        if (!empty($data['video_url'])) {
            return 'video';
        }

        if (!empty($data['document']) || ($lesson && $lesson->document_path)) {
            return 'pdf';
        }

        return 'text';
    }
}
