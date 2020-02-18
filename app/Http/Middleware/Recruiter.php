<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Recruiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        // return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // dd(Auth::user()->role);

        if (Auth::user()->role !== 1 || Auth::user()->role !== 2) {
            // superadmin & recruiter
            // dd(Auth::user()->role);
            return $next($request);
        }
        abort(403, 'Unathourized action.');
    }
}
