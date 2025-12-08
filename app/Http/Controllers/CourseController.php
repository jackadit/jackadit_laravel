<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index', 'show']),
            new Middleware('course.ownership', only: ['edit', 'update', 'destroy']),
        ];
    }

    /**
     * Liste publique des cours (accessible à tous)
     */
    public function index(Request $request)
    {
        $query = Course::where('is_published', true)
            ->with(['instructor', 'category']);

        // Filtre par catégorie
        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filtre par niveau
        if ($request->has('level') && $request->level != '') {
            $query->where('level', $request->level);
        }

        // Recherche par titre ou description
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Tri
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'popular':
                $query->withCount('enrollments')->orderBy('enrollments_count', 'desc');
                break;
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest();
        }

        $courses = $query->paginate(12);

        // Données pour les filtres
        $categories = Category::where('is_active', true)
            ->withCount(['courses' => function($q) {
                $q->where('is_published', true);
            }])
            ->get();

        return view('courses.index', compact('courses', 'categories'));
    }

    /**
     * Détail public d'un cours
     */
    public function show(Course $course)
    {
        // Vérifier si le cours est publié (sauf si l'utilisateur est le propriétaire)
        if (!$course->is_published && (!auth()->check() || auth()->id() !== $course->instructor_id)) {
            abort(404);
        }

        // Charger les relations
        $course->load([
            'instructor',
            'category',
            'lessons' => function ($query) {
                $query->orderBy('order');
            },
            'quizzes'
        ]);

        // Vérifier si l'utilisateur est inscrit
        $is_enrolled = auth()->check() && $course->enrollments()
                ->where('user_id', auth()->id())
                ->exists();

        // Cours similaires (même catégorie)
        $similar_courses = Course::where('is_published', true)
            ->where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->with(['instructor', 'category'])
            ->limit(3)
            ->get();

        return view('courses.show', compact('course', 'similar_courses', 'is_enrolled'));
    }


    /**
     * Formulaire de création
     */
    public function create()
    {
        $categories = Category::all();
        return view('courses.create', compact('categories'));
    }

    /**
     * Enregistrement d'un nouveau cours
     */
    public function store(Request $request)
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

        // Génération slug unique
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

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
     * Formulaire d'édition
     */
    public function edit(Course $course)
    {
        // ✅ Vérification manuelle si pas de Policy
        if (auth()->id() !== $course->instructor_id && !auth()->user()->hasRole('admin')) {
            abort(403, 'Action non autorisée.');
        }

        $categories = Category::all();
        return view('courses.edit', compact('course', 'categories'));
    }

    /**
     * Mise à jour d'un cours
     */
    public function update(Request $request, Course $course)
    {
        // ✅ Vérification manuelle
        if (auth()->id() !== $course->instructor_id && !auth()->user()->hasRole('admin')) {
            abort(403, 'Action non autorisée.');
        }

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
            $validated['slug'] = $this->generateUniqueSlug($validated['title'], $course->id);
        }

        // Upload thumbnail
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
     * Suppression d'un cours
     */
    public function destroy(Course $course)
    {
        // ✅ Vérification manuelle
        if (auth()->id() !== $course->instructor_id && !auth()->user()->hasRole('admin')) {
            abort(403, 'Action non autorisée.');
        }

        // Nettoyage fichiers
        if ($course->thumbnail) {
            Storage::disk('public')->delete($course->thumbnail);
        }

        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', '✅ Cours supprimé avec succès !');
    }

    /**
     * ✅ MÉTHODE UTILITAIRE : Génération slug unique
     */
    private function generateUniqueSlug(string $title, ?int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        $query = Course::where('slug', $slug);
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        while ($query->exists()) {
            $slug = $originalSlug . '-' . $counter++;
            $query = Course::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
        }

        return $slug;
    }
}
