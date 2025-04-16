<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VerifyAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user() && Auth::user()->cargo === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Acesso não autorizado!');
    }
}
