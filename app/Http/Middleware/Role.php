<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $userRole = $request->user()->role;

        // This Condition is for User
        if (($role === 'admin' && $userRole !== 'admin')) {
            return redirect('/');
        };

        // This Condition is for admin
        if (($role === 'user' && $userRole === 'admin')) {
           return redirect('/admin');
        };

        return $next($request);
    }
}
