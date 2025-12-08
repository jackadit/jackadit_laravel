<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Course;

class CourseAccessMiddleware
{
    /**
     * ✅ Vérifie que l'utilisateur peut accéder au cours
     * (inscrit OU propriétaire OU admin)
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter.');
        }

        // Récupérer le cours
        $course = $request->route('course');

        if (is_numeric($course)) {
            $course = Course::findOrFail($course);
        }

        if (!$course instanceof Course) {
            abort(404, 'Cours introuvable.');
        }

        // Admin = accès total
        if ($user->isAdmin()) {
            return $next($request);
        }

        // Propriétaire = accès
        if ($course->instructor_id === $user->id) {
            return $next($request);
        }

        // Étudiant inscrit = accès
        if ($user->isEnrolledIn($course)) {
            return $next($request);
        }

        abort(403, 'Vous devez être inscrit à ce cours pour y accéder.');
    }
}
