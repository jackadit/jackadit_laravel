<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * 📋 Liste des inscriptions de l'utilisateur connecté
     */
    public function index()
    {
        $enrollments = Enrollment::where('user_id', Auth::id())
            ->with(['course', 'course.instructor'])
            ->latest()
            ->paginate(12);

        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * ✅ Inscription à un cours (POST)
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $course = Course::findOrFail($request->course_id);
        $user = Auth::user();

        // Vérifie si déjà inscrit
        $existingEnrollment = Enrollment::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if ($existingEnrollment) {
            return redirect()
                ->route('courses.show', $course->slug)
                ->with('info', 'Vous êtes déjà inscrit à ce cours.');
        }

        // Vérifie si le cours est gratuit ou si paiement requis
        if ($course->price > 0) {
            // TODO: Intégrer Stripe ou autre système de paiement
            return redirect()
                ->route('courses.show', $course->slug)
                ->with('warning', 'Ce cours nécessite un paiement.');
        }

        // Crée l'inscription
        Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'enrolled_at' => now(),
        ]);

        return redirect()
            ->route('courses.show', $course->slug)
            ->with('success', 'Inscription réussie ! Bon apprentissage 🎓');
    }

    /**
     * 📊 Détails d'une inscription (progression)
     */
    public function show(Enrollment $enrollment)
    {
        // Vérifie que l'utilisateur est propriétaire
        if ($enrollment->user_id !== Auth::id()) {
            abort(403, 'Accès non autorisé');
        }

        $enrollment->load([
            'course.sections.lessons',
            'course.quizzes',
            'completedLessons',
        ]);

        return view('enrollments.show', compact('enrollment'));
    }

    /**
     * ❌ Désinscription (DELETE)
     */
    public function destroy(Enrollment $enrollment)
    {
        // Vérifie que l'utilisateur est propriétaire
        if ($enrollment->user_id !== Auth::id()) {
            abort(403, 'Accès non autorisé');
        }

        $courseName = $enrollment->course->title;
        $enrollment->delete();

        return redirect()
            ->route('enrollments.index')
            ->with('success', "Désinscription du cours \"{$courseName}\" effectuée.");
    }

    /**
     * 🔄 Mise à jour manuelle de la progression
     */
    public function updateProgress(Enrollment $enrollment)
    {
        if ($enrollment->user_id !== Auth::id()) {
            abort(403);
        }

        $enrollment->updateProgress();

        return back()->with('success', 'Progression mise à jour.');
    }
}
