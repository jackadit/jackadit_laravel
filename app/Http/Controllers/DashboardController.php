<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\QuizAttempt;

class DashboardController extends Controller implements HasMiddleware
{
    /**
     * ✅ Middlewares Laravel 12
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth'),
            new Middleware('verified'),
        ];
    }

    /**
     * Affiche le tableau de bord selon le rôle
     */
    public function index()
    {
        $user = Auth::user();

        // ========================================
        // REDIRECTION PAR RÔLE
        // ========================================
        return match ($user->role) {
            'admin' => $this->adminDashboard(),
            'instructor' => $this->instructorDashboard(),
            'student' => $this->studentDashboard(),
            default => abort(403, 'Rôle non reconnu'),
        };
    }

    // ========================================
    // DASHBOARD ÉTUDIANT
    // ========================================
    private function studentDashboard()
    {
        $user = Auth::user();

        // Cours inscrits avec progression
        $enrollments = $user->enrollments()
            ->with(['course.instructor', 'course.lessons'])
            ->latest()
            ->get()
            ->map(function ($enrollment) use ($user) {
                $course = $enrollment->course;

                // Calcul progression
                $totalLessons = $course->lessons->count();
                $completedLessons = $user->lessonCompletions()
                    ->whereHas('lesson', function ($q) use ($course) {
                        $q->where('course_id', $course->id);
                    })
                    ->count();

                $enrollment->progress_percentage = $totalLessons > 0
                    ? round(($completedLessons / $totalLessons) * 100)
                    : 0;

                return $enrollment;
            });

        // Dernières tentatives de quiz
        $recent_quiz_attempts = QuizAttempt::where('user_id', $user->id)
            ->with(['quiz.lesson.course'])
            ->latest()
            ->limit(5)
            ->get();

        // Statistiques personnelles
        $stats = [
            'total_enrollments' => $enrollments->count(),
            'completed_courses' => $enrollments->where('progress_percentage', 100)->count(),
            'in_progress_courses' => $enrollments->whereBetween('progress_percentage', [1, 99])->count(),
            'total_quiz_attempts' => QuizAttempt::where('user_id', $user->id)->count(),
            'average_quiz_score' => QuizAttempt::where('user_id', $user->id)
                    ->whereNotNull('score')
                    ->avg('score') ?? 0,
        ];

        return view('dashboard.student', compact('enrollments', 'recent_quiz_attempts', 'stats'));
    }

    // ========================================
    // DASHBOARD INSTRUCTEUR
    // ========================================
    private function instructorDashboard()
    {
        $user = Auth::user();

        // Cours créés par l'instructeur
        $courses = Course::where('instructor_id', $user->id)
            ->withCount(['enrollments', 'lessons'])
            ->latest()
            ->get();

        // Dernières inscriptions aux cours
        $recent_enrollments = \App\Models\Enrollment::whereHas('course', function ($q) use ($user) {
            $q->where('instructor_id', $user->id);
        })
            ->with(['user', 'course'])
            ->latest()
            ->limit(10)
            ->get();

        // Statistiques instructeur
        $stats = [
            'total_courses' => $courses->count(),
            'published_courses' => $courses->where('is_published', true)->count(),
            'draft_courses' => $courses->where('is_published', false)->count(),
            'total_students' => \App\Models\Enrollment::whereHas('course', function ($q) use ($user) {
                $q->where('instructor_id', $user->id);
            })->distinct('user_id')->count(),
            'total_lessons' => $courses->sum('lessons_count'),
            'total_revenue' => \App\Models\Enrollment::whereHas('course', function ($q) use ($user) {
                    $q->where('instructor_id', $user->id);
                })->sum('price_paid') ?? 0,
        ];

        return view('dashboard.instructor', compact('courses', 'recent_enrollments', 'stats'));
    }

    // ========================================
    // DASHBOARD ADMIN
    // ========================================
    private function adminDashboard()
    {
        // Statistiques globales
        $stats = [
            'total_users' => \App\Models\User::count(),
            'total_students' => \App\Models\User::where('role', 'student')->count(),
            'total_instructors' => \App\Models\User::where('role', 'instructor')->count(),
            'total_courses' => Course::count(),
            'published_courses' => Course::where('is_published', true)->count(),
            'pending_courses' => Course::where('is_published', false)->count(),
            'total_enrollments' => \App\Models\Enrollment::count(),
            'total_revenue' => \App\Models\Enrollment::sum('price_paid') ?? 0,
        ];

        // Derniers cours créés
        $recent_courses = Course::with(['instructor', 'category'])
            ->latest()
            ->limit(5)
            ->get();

        // Dernières inscriptions
        $recent_enrollments = \App\Models\Enrollment::with(['user', 'course'])
            ->latest()
            ->limit(10)
            ->get();

        // Derniers utilisateurs inscrits
        $recent_users = \App\Models\User::latest()
            ->limit(10)
            ->get();

        return view('dashboard.admin', compact('stats', 'recent_courses', 'recent_enrollments', 'recent_users'));
    }
}
