<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class handleUnverifiedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(!auth()->user()->verified) {
        //     return redirect('/')->with('error', 'Your email is not verified.');
        // }

        // dd($request->user);
        // return $next($request);


        return auth()->user() && auth()->user()->verified
            ? $next($request) // Will pass user.
            : redirect('/')->with('error', 'Your email is not verified.');
    }
}
