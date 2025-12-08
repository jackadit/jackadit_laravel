<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Course;

class CheckCourseOwnership
{
    /**
     * Vérifie que l'utilisateur est propriétaire du cours (ou admin)
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

        // Récupérer le cours selon le contexte
        $course = $this->getCourse($request);

        if (!$course) {
            abort(404, '❌ Cours non trouvé');
        }

        // Utiliser la méthode helper du User model
        if (!$user->canManageCourse($course)) {
            abort(403, '🚫 Vous n\'êtes pas autorisé à modifier ce cours');
        }

        return $next($request);
    }

    /**
     * Récupère le cours selon le paramètre de route
     */
    private function getCourse(Request $request): ?Course
    {
        // Cas 1 : Route directe avec {course}
        if ($request->route('course')) {
            return $request->route('course');
        }

        // Cas 2 : Route avec {lesson}
        if ($request->route('lesson')) {
            $lesson = $request->route('lesson');
            return $lesson->course;
        }

        // Cas 3 : Route avec {quiz}
        if ($request->route('quiz')) {
            $quiz = $request->route('quiz');
            return $quiz->lesson->course;
        }

        // Cas 4 : Route avec {question}
        if ($request->route('question')) {
            $question = $request->route('question');
            return $question->quiz->lesson->course;
        }

        return null;
    }
}
