<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // S'inscrire à un cours
    public function store(Course $course)
    {
        // Vérifier si déjà inscrit
        if ($course->enrollments()->where('user_id', auth()->id())->exists()) {
            return back()->with('error', 'Vous êtes déjà inscrit à ce cours.');
        }

        Enrollment::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
            'price' => $course->price,
            'progress' => 0,
        ]);

        return redirect()
            ->route('student.courses.show', $course)
            ->with('success', 'Inscription réussie ! Vous pouvez maintenant commencer le cours.');
    }

    // Afficher mes cours
    public function index()
    {
        $enrollments = auth()->user()->enrollments()
            ->with('course.instructor')
            ->latest()
            ->paginate(10);

        return view('student.enrollments.index', compact('enrollments'));
    }

    // Voir un cours inscrit
    public function show(Enrollment $enrollment)
    {
        $this->authorize('view', $enrollment);

        $enrollment->load([
            'course.lessons' => function($q) {
                $q->orderBy('order');
            },
            'course.instructor'
        ]);

        return view('student.enrollments.show', compact('enrollment'));
    }
}
