<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Middlewares (TON APPROCHE - meilleure pratique)
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('instructor')->only(['create', 'store']);
        $this->middleware('course.ownership')->only(['edit', 'update', 'destroy']);
    }

    /**
     * Catalogue public (MON AMÉLIORATION - filtre published)
     */
    public function index()
    {
        $courses = Course::with('instructor')
            ->where('is_published', true) // ← Crucial
            ->latest()
            ->paginate(12);

        return view('courses.index', compact('courses'));
    }

    /**
     * Formulaire création
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Enregistrer un cours (SLUG UNIQUE + UPLOAD)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048', // ← Ajout
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
            'is_published' => 'boolean',
        ]);

        // SLUG UNIQUE (MON AMÉLIORATION)
        $validated['slug'] = Str::slug($validated['title']);
        $originalSlug = $validated['slug'];
        $counter = 1;

        while (Course::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter++;
        }

        // UPLOAD THUMBNAIL (MON AMÉLIORATION)
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('courses/thumbnails', 'public');
        }

        $validated['instructor_id'] = auth()->id();
        $validated['is_published'] = $request->has('is_published');

        $course = Course::create($validated);

        // REDIRECT vers le cours créé (MON AMÉLIORATION)
        return redirect()->route('courses.show', $course)
            ->with('success', 'Course created successfully!');
    }

    /**
     * Afficher un cours (RELATIONS COMPLÈTES + PROGRESSION)
     */
    public function show(Course $course)
    {
        // Charger toutes les données nécessaires (MON AMÉLIORATION)
        $course->load([
            'instructor',
            'lessons' => fn($q) => $q->orderBy('order'),
            'lessons.quizzes',
        ]);

        // Vérifier inscription + progression (MON AMÉLIORATION)
        $isEnrolled = false;
        $progress = 0;

        if (auth()->check()) {
            $isEnrolled = $course->students()->where('user_id', auth()->id())->exists();

            if ($isEnrolled) {
                $totalLessons = $course->lessons->count();
                $completedLessons = auth()->user()
                    ->lessonProgress()
                    ->whereIn('lesson_id', $course->lessons->pluck('id'))
                    ->where('is_completed', true)
                    ->count();

                $progress = $totalLessons > 0
                    ? round(($completedLessons / $totalLessons) * 100)
                    : 0;
            }
        }

        return view('courses.show', compact('course', 'isEnrolled', 'progress'));
    }

    /**
     * Formulaire d'édition
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Mettre à jour (SLUG UNIQUE + UPLOAD)
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048',
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
            'is_published' => 'boolean',
        ]);

        // SLUG UNIQUE si titre modifié (MON AMÉLIORATION)
        if ($validated['title'] !== $course->title) {
            $validated['slug'] = Str::slug($validated['title']);
            $originalSlug = $validated['slug'];
            $counter = 1;

            while (Course::where('slug', $validated['slug'])
                ->where('id', '!=', $course->id)
                ->exists()) {
                $validated['slug'] = $originalSlug . '-' . $counter++;
            }
        }

        // UPLOAD + SUPPRESSION ANCIENNE (MON AMÉLIORATION)
        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail) {
                Storage::disk('public')->delete($course->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('courses/thumbnails', 'public');
        }

        $validated['is_published'] = $request->has('is_published');

        $course->update($validated);

        return redirect()->route('courses.show', $course)
            ->with('success', 'Course updated successfully!');
    }

    /**
     * Supprimer (NETTOYAGE COMPLET)
     */
    public function destroy(Course $course)
    {
        // NETTOYAGE FICHIERS (MON AMÉLIORATION)
        if ($course->thumbnail) {
            Storage::disk('public')->delete($course->thumbnail);
        }

        foreach ($course->lessons as $lesson) {
            if ($lesson->video_url && Str::startsWith($lesson->video_url, 'lessons/videos/')) {
                Storage::disk('public')->delete($lesson->video_url);
            }
            if ($lesson->pdf_url && Str::startsWith($lesson->pdf_url, 'lessons/pdfs/')) {
                Storage::disk('public')->delete($lesson->pdf_url);
            }
        }

        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }
}
