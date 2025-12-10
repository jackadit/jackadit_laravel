<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Liste des cours (tous)
    public function index(Request $request)
    {
        $query = Course::with(['instructor', 'category']);

        // Filtres
        if ($request->filled('status')) {
            $query->where('is_published', $request->status === 'published');
        }

        if ($request->filled('search')) {
            $query->where('title', 'like', "%{$request->search}%");
        }

        $courses = $query->withCount('enrollments')
            ->latest()
            ->paginate(20);

        return view('admin.courses.index', compact('courses'));
    }

    // Afficher un cours
    public function show(Course $course)
    {
        $course->load([
            'instructor',
            'category',
            'lessons.quizzes',
            'enrollments.user'
        ]);

        return view('admin.courses.show', compact('course'));
    }

    // Valider un cours
    public function approve(Course $course)
    {
        $course->update(['is_published' => true]);

        // Optionnel : notifier l'instructeur
        // $course->instructor->notify(new CourseApprovedNotification($course));

        return back()->with('success', 'Cours validé et publié avec succès.');
    }

    // Refuser un cours
    public function reject(Request $request, Course $course)
    {
        $request->validate([
            'reason' => 'required|string|max:500',
        ]);

        $course->update([
            'is_published' => false,
            'rejection_reason' => $request->reason,
        ]);

        // Optionnel : notifier l'instructeur
        // $course->instructor->notify(new CourseRejectedNotification($course, $request->reason));

        return back()->with('success', 'Cours refusé. L\'instructeur a été notifié.');
    }

    // Supprimer un cours
    public function destroy(Course $course)
    {
        // Supprimer les données liées
        $course->lessons()->delete();
        $course->enrollments()->delete();
        $course->delete();

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Cours supprimé avec succès.');
    }
}
