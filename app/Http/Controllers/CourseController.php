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
     * Liste publique des cours avec filtres avancés
     */
    public function index(Request $request)
    {
        $query = Course::where('is_published', true)
            ->with(['instructor', 'category']);

        // 🔍 Recherche
        if ($search = $request->input('search')) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // 📂 Filtre par catégorie (ID ou slug)
        if ($categoryFilter = $request->input('category')) {
            if (is_numeric($categoryFilter)) {
                $query->where('category_id', $categoryFilter);
            } else {
                $query->whereHas('category', function ($q) use ($categoryFilter) {
                    $q->where('slug', $categoryFilter);
                });
            }
        }

        // 📊 Filtre par niveau
        if ($level = $request->input('level')) {
            $query->where('difficulty_level', $level);
        }

        // 💰 Filtre par prix
        if ($priceFilter = $request->input('price')) {
            switch ($priceFilter) {
                case 'free':
                    $query->where('price', 0);
                    break;
                case 'paid':
                    $query->where('price', '>', 0);
                    break;
                case 'under_50':
                    $query->whereBetween('price', [0.01, 50]);
                    break;
                case 'under_100':
                    $query->whereBetween('price', [0.01, 100]);
                    break;
                case 'over_100':
                    $query->where('price', '>', 100);
                    break;
            }
        }

        // 🔃 Tri
        $sort = $request->input('sort', 'newest');
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
            case 'newest':
            default:
                $query->latest();
                break;
        }

        // ✅ Pagination
        $courses = $query->paginate(12);

        // ✅ CORRECTION FINALE : Sans HAVING
        $categories = Category::where('is_active', true)
            ->whereHas('courses', function($q) {
                $q->where('is_published', true);
            })
            ->withCount(['courses' => function($q) {
                $q->where('is_published', true);
            }])
            ->orderBy('name')
            ->get();

        return view('courses.index', compact('categories', 'courses'));
    }

    /**
     * Détail public d'un cours
     */
    public function show($slugOrId)
    {
        // Support slug OU id
        $course = is_numeric($slugOrId)
            ? Course::findOrFail($slugOrId)
            : Course::where('slug', $slugOrId)->firstOrFail();

        // Vérifier si publié (sauf pour le propriétaire ou admin)
        if (!$course->is_published) {
            if (!auth()->check() ||
                (auth()->id() !== $course->instructor_id && !$this->isAdmin())) {
                abort(404);
            }
        }

        // Charger les relations avec ordre
        $course->load([
            'instructor',
            'category',
            'sections.lessons' => function ($query) {
                $query->orderBy('order');
            },
            'quizzes'
        ]);

        // Vérifier inscription
        $isEnrolled = auth()->check() && $course->enrollments()
                ->where('user_id', auth()->id())
                ->exists();

        // Calculer progression si inscrit
        $progress = 0;
        if ($isEnrolled && auth()->check()) {
            $totalLessons = $course->sections->sum(fn($s) => $s->lessons->count());
            if ($totalLessons > 0) {
                $completedLessons = auth()->user()
                    ->completedLessons()
                    ->whereIn('lesson_id', $course->sections->pluck('lessons')->flatten()->pluck('id'))
                    ->count();
                $progress = round(($completedLessons / $totalLessons) * 100);
            }
        }

        // Cours similaires (même catégorie)
        $similarCourses = Course::where('is_published', true)
            ->where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->with(['instructor', 'category'])
            ->withCount('enrollments')
            ->limit(3)
            ->get();

        return view('courses.show', compact('course', 'similarCourses', 'isEnrolled', 'progress'));
    }

    /**
     * Formulaire de création
     */
    public function create()
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
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
        $validated['is_published'] = $request->boolean('is_published', false);

        $course = Course::create($validated);

        return redirect()->route('courses.show', $course->slug)
            ->with('success', '✅ Cours créé avec succès !');
    }

    /**
     * Formulaire d'édition
     */
    public function edit(Course $course)
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('courses.edit', compact('course', 'categories'));
    }

    /**
     * Mise à jour d'un cours
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

        $validated['is_published'] = $request->boolean('is_published', $course->is_published);

        $course->update($validated);

        return redirect()->route('courses.show', $course->slug)
            ->with('success', '✅ Cours mis à jour avec succès !');
    }

    /**
     * Suppression d'un cours
     */
    public function destroy(Course $course)
    {
        // Empêcher la suppression si des étudiants sont inscrits
        if ($course->enrollments()->count() > 0) {
            return back()->with('error', '❌ Impossible de supprimer un cours avec des étudiants inscrits.');
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
     * Liste des cours du formateur connecté
     */
    public function instructorIndex()
    {
        $courses = Course::where('instructor_id', auth()->id())
            ->withCount('enrollments')
            ->latest()
            ->paginate(12);

        return view('instructor.courses.index', compact('courses'));
    }

    /**
     * Détail d'un cours (vue formateur)
     */
    public function instructorShow(Course $course)
    {
        $course->load([
            'sections.lessons' => fn($q) => $q->orderBy('order'),
            'enrollments' => fn($q) => $q->with('user')->latest(),
            'category'
        ]);

        return view('instructor.courses.show', compact('course'));
    }

    /**
     * 🔧 Méthode utilitaire : Génération slug unique
     */
    private function generateUniqueSlug(string $title, ?int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (true) {
            $query = Course::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }

            if (!$query->exists()) {
                break;
            }

            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }

    /**
     * 🔧 Helper : Vérifier si admin
     */
    private function isAdmin(): bool
    {
        return auth()->check() && auth()->user()->role === 'admin';
    }
}
