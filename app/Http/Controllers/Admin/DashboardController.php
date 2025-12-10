<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistiques globales
        $stats = [
            'total_users' => User::count(),
            'total_students' => User::where('role', 'student')->count(),
            'total_instructors' => User::where('role', 'instructor')->count(),
            'total_courses' => Course::count(),
            'published_courses' => Course::where('is_published', true)->count(),
            'pending_courses' => Course::where('is_published', false)->count(),
            'total_enrollments' => Enrollment::count(),
            'revenue' => Enrollment::sum('price'),
        ];

        // Cours en attente de validation
        $pendingCourses = Course::with(['instructor', 'category'])
            ->where('is_published', false)
            ->latest()
            ->limit(5)
            ->get();

        // Dernières inscriptions
        $recentEnrollments = Enrollment::with(['user', 'course'])
            ->latest()
            ->limit(10)
            ->get();

        // Graphique des inscriptions (7 derniers jours)
        $enrollmentChart = Enrollment::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as count')
        )
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('admin.dashboard', compact(
            'stats',
            'pendingCourses',
            'recentEnrollments',
            'enrollmentChart'
        ));
    }
}
