<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Course;

class CourseOwnershipMiddleware
{
    /**
     * ✅ Vérifie que l'utilisateur est le propriétaire du cours
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter.');
        }

        // Récupérer le cours depuis la route
        $course = $request->route('course');

        // Si c'est un ID, charger le cours
        if (is_numeric($course)) {
            $course = Course::findOrFail($course);
        }

        // Si pas un objet Course, erreur
        if (!$course instanceof Course) {
            abort(404, 'Cours introuvable.');
        }

        // Admin = accès total
        if ($user->isAdmin()) {
            return $next($request);
        }

        // Vérifier propriété
        if ($course->instructor_id !== $user->id) {
            abort(403, 'Vous n\'êtes pas autorisé à modifier ce cours.');
        }

        return $next($request);
    }
}
