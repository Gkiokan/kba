<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest() && Auth::user()->is_admin) {
            return $next($request);
        }

        Session::flash('info', 'You need Admin permissions to access that');

        return redirect('/home');
    }
}
