<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil publique
     *
     * ✅ Optimisations :
     * - Cache des données statiques (1h)
     * - Eager loading des relations
     * - Queries optimisées
     */
    public function index()
    {
        // ========================================
        // COURS EN VEDETTE
        // ========================================
        $featured_courses = Cache::remember('home.featured_courses', 3600, function () {
            return Course::where('is_published', true)
                ->where('is_featured', true)
                ->with(['instructor', 'category'])
                ->limit(6)
                ->get();
        });

        // ========================================
        // COURS RÉCENTS
        // ========================================
        $recent_courses = Cache::remember('home.recent_courses', 1800, function () {
            return Course::where('is_published', true)
                ->with(['instructor', 'category'])
                ->latest()
                ->limit(3)
                ->get();
        });

        // ========================================
        // COURS POPULAIRES
        // ========================================
        $popular_courses = Cache::remember('home.popular_courses', 3600, function () {
            return Course::where('is_published', true)
                ->with(['instructor', 'category'])
                ->withCount('enrollments')
                ->orderBy('enrollments_count', 'desc')
                ->limit(4)
                ->get();
        });

        // ========================================
        // STATISTIQUES GLOBALES
        // ========================================
        $stats = Cache::remember('home.stats', 1800, function () {
            return [
                'total_courses' => Course::where('is_published', true)->count(),
                'total_students' => User::where('role', 'student')->count(),
                'total_instructors' => User::where('role', 'instructor')->count(),
                'total_hours' => Course::where('is_published', true)->sum('duration'), // Si tu as un champ duration
            ];
        });

        // ========================================
        // CATÉGORIES ACTIVES
        // ========================================
        $categories = Cache::remember('home.categories', 3600, function () {
            return Category::where('is_active', true)
                ->withCount(['courses' => function ($query) {
                    $query->where('is_published', true);
                }])
                ->having('courses_count', '>', 0) // ✅ Uniquement catégories avec cours
                ->get();
        });

        return view('home.index', compact(
            'featured_courses',
            'recent_courses',
            'popular_courses',
            'stats',
            'categories'
        ));
    }

    /**
     * ✅ BONUS : Méthode pour vider le cache (admin uniquement)
     */
    public function clearCache()
    {
        Cache::forget('home.featured_courses');
        Cache::forget('home.recent_courses');
        Cache::forget('home.popular_courses');
        Cache::forget('home.stats');
        Cache::forget('home.categories');

        return back()->with('success', '✅ Cache de la page d\'accueil vidé !');
    }
}
