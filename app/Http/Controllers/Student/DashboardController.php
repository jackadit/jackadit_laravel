<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student = auth()->user();

        // Mes inscriptions
        $enrollments = $student->enrollments()
            ->with(['course.instructor', 'course.lessons'])
            ->latest()
            ->get();

        // Statistiques
        $stats = [
            'total_enrollments' => $enrollments->count(),
            'completed_courses' => $enrollments->where('progress', 100)->count(),
            'in_progress' => $enrollments->where('progress', '>', 0)->where('progress', '<', 100)->count(),
            'certificates' => $student->certificates()->count(),
        ];

        return view('student.dashboard', compact('enrollments', 'stats'));
    }
}
