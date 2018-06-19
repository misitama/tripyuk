<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authback
{
    public function handle(Request $request, Closure $next,$guard = null)
    {
        if (!auth()->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}