<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Candidate
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

        if (Auth::user()->role !== 1 || Auth::user()->role !== 3) {
            // superadmin
            return $next($request);
        }
        abort(403, 'Unathourized action.');
        // if (Auth::user()->role == 2) {
        //     // recruiter
        //     return $next($request);
        // }

        // if (Auth::user()->role == 3) {
        //     // candidate
        //     return $next($request);
        // }
    }
}
