<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleBased
{
    /**
     * Check role.
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->check() && auth()->user()->hasRole($role)) {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    }
}
