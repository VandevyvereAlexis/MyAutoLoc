<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si un utilisateur est connecté et si son rôle est 2 (administrateur)
        if (Auth::user() && Auth::user()->role_id == 2) 
        {
            // Si oui, l'accès est autorisé, passe à la prochaine étape du traitement
            return $next($request);

        } else {
            // Si non, renvoie une erreur HTTP 403 (Accès interdit) avec un message
            abort(403, 'Vous n\'êtes pas administrateur : accès refusé');
        }
    }
}
