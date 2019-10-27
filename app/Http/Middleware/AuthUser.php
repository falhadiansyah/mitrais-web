<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $authData = $request->cookie('auth');
        $authToken = Cookie::get('token');
        if (!$authData && !$authToken) {
            return redirect('/signup');
        }

        return $next($request);
    }
}
