<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user is a member or admin
        if ($request->user() && ($request->user()->hasRole('admin') || $request->user()->hasRole('member'))) {
            return $next($request);
        }

        // If not admin or member, redirect or show error page, whichever is appropriate for your application
        return redirect()->route('error404');
    }
}
