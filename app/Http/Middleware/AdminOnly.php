<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\RolEnum;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si no está logueado o no es admin, redirigir
        if (!Auth::check() || Auth::user()->rol !== RolEnum::ADMIN) {
            return redirect()->route('home')->with('error', 'Acceso no autorizado');
        }

        return $next($request);
    }
}
