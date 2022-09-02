<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetDriverGuardApi
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        auth()->setDefaultDriver('api');
        return $next($request);
    }
}
