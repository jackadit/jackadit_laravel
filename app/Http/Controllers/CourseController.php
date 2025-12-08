<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category; // ✅ NOUVEAU
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('instructor')->only(['create', 'store']);

        // ✅ AMÉLIORATION : Policy au lieu de middleware custom
        $this->authorizeResource(Course::class, 'course');
    }

    /**
     * ✅ AMÉLIORATION : Filtres + Recherche + Pagination
     */
    public function index(Request $request)
    {
        $query = Course::with(['instructor', 'category'])
            ->where('is_published', true);

        // Recherche
        if ($search = $request->input('search')) {
            $query->search($search);
        }

        // Filtre par catégorie
        if ($categoryId = $request->input('category')) {
            $query->byCategory($categoryId);
        }

        // Filtre par niveau
        if ($level = $request->input('level')) {
            $query->byLevel($level);
        }

        // Tri
        $sort = $request->input('sort', 'latest');
        match ($sort) {
            'popular' => $query->withCount('enrollments')->orderByDesc('enrollments_count'),
            'price_asc' => $query->orderBy('price'),
            'price_desc' => $query->orderByDesc('price'),
            default => $query->latest(),
        };

        $courses = $query->paginate(12)->withQueryString();

        // ✅ NOUVEAU : Catégories pour le filtre
        $categories = Category::withCount('courses')->get();

        return view('courses.index', compact('courses', 'categories'));
    }

    public function create()
    {
        // ✅ NOUVEAU : Passer les catégories au formulaire
        $categories = Category::all();
        return view('courses.create', compact('categories'));
    }

    /**
     * ✅ AMÉLIORATION : Validation + Upload robuste
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:50', // ✅ Min 50 caractères
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0|max:9999.99',
            'duration_minutes' => 'nullable|integer|min:1',
            'max_students' => 'nullable|integer|min:1',
            'category_id' => 'required|exists:categories,id', // ✅ NOUVEAU
            'is_published' => 'boolean',
        ]);

        // Slug unique (TON CODE - PARFAIT)
        $validated['slug'] = Str::slug($validated['title']);
        $originalSlug = $validated['slug'];
        $counter = 1;

        while (Course::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter++;
        }

        // Upload thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('courses/thumbnails', 'public');
        }

        $validated['instructor_id'] = auth()->id();
        $validated['is_published'] = $request->boolean('is_published');

        $course = Course::create($validated);

        return redirect()->route('courses.show', $course)
            ->with('success', '✅ Cours créé avec succès !');
    }

    /**
     * ✅ AMÉLIORATION : Vérifier inscription + progression
     */
    public function show(Course $course)
    {
        $course->load(['instructor', 'lessons', 'category']);

        $isEnrolled = false;
        $progress = 0;

        if (auth()->check()) {
            $enrollment = $course->enrollments()
                ->where('user_id', auth()->id())
                ->first();

            if ($enrollment) {
                $isEnrolled = true;
                $progress = $enrollment->progress ?? 0;
            }
        }

        return view('courses.show', compact('course', 'isEnrolled', 'progress'));
    }

    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('courses.edit', compact('course', 'categories'));
    }

    /**
     * ✅ AMÉLIORATION : Mise à jour robuste
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:50',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'difficulty_level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0|max:9999.99',
            'duration_minutes' => 'nullable|integer|min:1',
            'max_students' => 'nullable|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'is_published' => 'boolean',
        ]);

        // Slug unique si titre modifié
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

        // Upload + suppression ancienne
        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail) {
                Storage::disk('public')->delete($course->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('courses/thumbnails', 'public');
        }

        $validated['is_published'] = $request->boolean('is_published');

        $course->update($validated);

        return redirect()->route('courses.show', $course)
            ->with('success', '✅ Cours mis à jour avec succès !');
    }

    /**
     * ✅ AMÉLIORATION : Soft delete au lieu de delete
     */
    public function destroy(Course $course)
    {
        // Nettoyage fichiers
        if ($course->thumbnail) {
            Storage::disk('public')->delete($course->thumbnail);
        }

        // Soft delete
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', '✅ Cours supprimé avec succès !');
    }
}
