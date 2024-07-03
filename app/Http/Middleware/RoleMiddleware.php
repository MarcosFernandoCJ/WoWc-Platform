<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // Si el usuario no está autenticado, redirigir al inicio de sesión
            return redirect('/login');
        }

        foreach ($roles as $role) {
            if (Auth::user()->hasRole($role)) {
                if ($role === 'institution') {
                    return $next($request);
                }
            }
        }

        // Si el usuario no tiene ninguno de los roles especificados, retornar 403 (prohibido)
        abort(403, 'Unauthorized action.');
    }
}