<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $instructor = auth()->user();

        // Statistiques
        $stats = [
            'total_courses' => $instructor->courses()->count(),
            'published_courses' => $instructor->courses()->where('is_published', true)->count(),
            'pending_courses' => $instructor->courses()->where('is_published', false)->count(),
            'total_students' => $instructor->courses()
                ->join('enrollments', 'courses.id', '=', 'enrollments.course_id')
                ->distinct('enrollments.user_id')
                ->count('enrollments.user_id'),
            'total_revenue' => $instructor->courses()
                ->join('enrollments', 'courses.id', '=', 'enrollments.course_id')
                ->sum('enrollments.price'),
        ];

        // Mes cours récents
        $courses = $instructor->courses()
            ->withCount('enrollments')
            ->with('category')
            ->latest()
            ->limit(5)
            ->get();

        // Inscriptions récentes à mes cours
        $recentEnrollments = DB::table('enrollments')
            ->join('courses', 'enrollments.course_id', '=', 'courses.id')
            ->join('users', 'enrollments.user_id', '=', 'users.id')
            ->where('courses.instructor_id', $instructor->id)
            ->select('enrollments.*', 'courses.title as course_title', 'users.name as student_name')
            ->orderBy('enrollments.created_at', 'desc')
            ->limit(10)
            ->get();

        return view('instructor.dashboard', compact('stats', 'courses', 'recentEnrollments'));
    }
}
