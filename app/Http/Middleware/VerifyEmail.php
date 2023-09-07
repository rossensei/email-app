<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request);

        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            $request->session()->flush();
            Auth::logout();
            return back()->with('error', 'Your email is not verified. Please check your email for a verification link.'); // Redirect to the email verification page
        }

        return $next($request);
    }
}
