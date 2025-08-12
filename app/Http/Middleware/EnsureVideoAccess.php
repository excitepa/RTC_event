<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureVideoAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $sessionType)
    {
        // Check if the session has been marked as authorized
        if (
            session('resource_access_granted') &&
            session('allowed_session_type') === $sessionType
        ) {
            return $next($request);
        }

        return redirect()->route('home')->with('danger', 'Please complete the form to access this session.');
    }
}
