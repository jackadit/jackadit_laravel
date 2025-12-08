<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckInstructorRole
{
    /**
     * Vérifie que l'utilisateur a le rôle 'instructor' ou 'admin'
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier l'authentification
        if (!auth()->check()) {
            abort(401, '🔒 Vous devez être connecté');
        }

        $user = auth()->user();

        // Vérifier le rôle (instructor ou admin)
        if (!$user->isInstructor() && !$user->isAdmin()) {
            abort(403, '🚫 Accès réservé aux formateurs');
        }

        return $next($request);
    }
}
