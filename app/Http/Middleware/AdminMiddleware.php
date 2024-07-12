<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->roles == 'admin') {
            return $next($request);
        }
        
        if (Route::currentRouteName() ===  'filament.admin.auth.logout') {
            return $next($request);
        }

        return redirect('/blogs')->with('error', 'Maaf anda tidak punya akses untuk halaman tersebut');

    }
}
