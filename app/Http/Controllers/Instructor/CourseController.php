<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    // Liste de MES cours
    public function index()
    {
        $courses = auth()->user()->courses()
            ->withCount('enrollments')
            ->with('category')
            ->latest()
            ->paginate(10);

        return view('instructor.courses.index', compact('courses'));
    }

    // Formulaire de création
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('instructor.courses.create', compact('categories'));
    }

    // Créer un cours
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:courses,slug',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
            'duration' => 'nullable|integer|min:1',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // Générer le slug si vide
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
        $validated['instructor_id'] = auth()->id();
        $validated['is_published'] = false; // En attente de validation

        // Upload thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('courses/thumbnails', 'public');
        }

        $course = Course::create($validated);

        return redirect()
            ->route('instructor.courses.show', $course)
            ->with('success', 'Cours créé. En attente de validation par l\'administrateur.');
    }

    // Afficher un cours
    public function show(Course $course)
    {
        // Vérifier que c'est bien MON cours
        $this->authorize('update', $course);

        $course->load(['lessons.quizzes', 'enrollments.user', 'category']);

        return view('instructor.courses.show', compact('course'));
    }

    // Formulaire d'édition
    public function edit(Course $course)
    {
        $this->authorize('update', $course);

        $categories = Category::orderBy('name')->get();
        return view('instructor.courses.edit', compact('course', 'categories'));
    }

    // Mettre à jour un cours
    public function update(Request $request, Course $course)
    {
        $this->authorize('update', $course);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
            'duration' => 'nullable|integer|min:1',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // Upload nouvelle thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('courses/thumbnails', 'public');
        }

        $course->update($validated);

        return redirect()
            ->route('instructor.courses.show', $course)
            ->with('success', 'Cours mis à jour avec succès.');
    }

    // Supprimer un cours
    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);

        $course->lessons()->delete();
        $course->enrollments()->delete();
        $course->delete();

        return redirect()
            ->route('instructor.courses.index')
            ->with('success', 'Cours supprimé avec succès.');
    }
}
