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
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // ❌ Non authentifié
        if (!$request->user()) {
            abort(403, 'Non authentifié');
        }

        // ❌ Rôle non autorisé
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Accès refusé : rôle insuffisant');
        }

        // ✅ Autorisation accordée
        return $next($request);
    }

}
