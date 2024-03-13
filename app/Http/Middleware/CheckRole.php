<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next,): Response
    {
        if ($request->user()) {
            if (auth()->user()->role_id == 1) {
                return to_route('manager');
            } elseif (auth()->user()->role_id == 2) {
                return to_route('client');
            }
        }
        return $next($request);


    }
}
