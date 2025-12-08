<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCourseOwnership
{
    public function handle(Request $request, Closure $next): Response
    {
        $course = $request->route('course');

        if (!$course) {
            abort(404);
        }

        // Admin a tous les droits
        if (auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Formateur doit être propriétaire
        if (auth()->user()->role === 'instructor' && $course->instructor_id === auth()->id()) {
            return $next($request);
        }

        abort(403, 'Vous n\'êtes pas autorisé à modifier ce cours');
    }
}
