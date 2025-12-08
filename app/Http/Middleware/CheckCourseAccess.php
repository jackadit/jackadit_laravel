<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Course;

class CheckCourseAccess
{
    /**
     * Vérifie que l'utilisateur a accès au contenu du cours
     * (inscrit OU contenu gratuit OU propriétaire OU admin)
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            abort(401, '🔒 Vous devez être connecté');
        }

        $user = auth()->user();

        // Les admins ont tous les droits
        if ($user->isAdmin()) {
            return $next($request);
        }

        // Récupérer le cours et la leçon
        $course = $this->getCourse($request);
        $lesson = $request->route('lesson');

        if (!$course) {
            abort(404, '❌ Cours non trouvé');
        }

        // Le propriétaire du cours a accès
        if ($user->canManageCourse($course)) {
            return $next($request);
        }

        // Contenu gratuit accessible à tous
        if ($lesson && $lesson->is_free) {
            return $next($request);
        }

        // Vérifier l'inscription (enrollments)
        // ⚠️ À activer quand la table enrollments sera créée
        if (!$course->enrollments()->where('user_id', $user->id)->exists()) {
            return redirect()
                ->route('courses.show', $course)
                ->with('error', '🚫 Vous devez vous inscrire à ce cours pour accéder à ce contenu');
        }

        return $next($request);
    }

    /**
     * Récupère le cours selon le paramètre de route
     */
    private function getCourse(Request $request): ?Course
    {
        if ($request->route('course')) {
            return $request->route('course');
        }

        if ($request->route('lesson')) {
            return $request->route('lesson')->course;
        }

        if ($request->route('quiz')) {
            return $request->route('quiz')->lesson->course;
        }

        if ($request->route('quizAttempt')) {
            return $request->route('quizAttempt')->quiz->lesson->course;
        }

        return null;
    }
}
