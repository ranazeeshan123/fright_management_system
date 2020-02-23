<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsSender
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role === 1 || Auth::user()->role === 2 || Auth::user()->role === 3) {
            return $next($request);
        } else {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
}
