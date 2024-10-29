<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use RealRashid\SweetAlert\Facades\Alert;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 0) {
            return $next($request);
        } else {
            Auth::logout();
            // Alert::error('Access Denied', 'You do not have permission to access this page. Please contact the administrator if you believe this is an error.');
            return redirect()->route('login')->with('fail', 'You have been logged out due to unauthorized access.');
        }
    }
}
