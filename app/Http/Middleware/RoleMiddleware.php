<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * ✅ Middleware générique pour vérifier n'importe quel rôle
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter.');
        }

        // Vérification avec Spatie + fallback sur champ 'role'
        $hasRole = $request->user()->hasRole($role) || $request->user()->role === $role;

        if (!$hasRole) {
            abort(403, "Accès réservé aux {$role}s.");
        }

        return $next($request);
    }
}
