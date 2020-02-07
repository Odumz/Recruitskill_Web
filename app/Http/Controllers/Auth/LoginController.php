<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo; // = '/dashboard';

    public function redirectTo () {
        switch (Auth::user()->role) {
            case "1":
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;

            case "2":
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;

            case "3":
                $this->redirectTo = '/candidate-dashboard';
                return $this->redirectTo;
                break;

            default:
                $this->redirectTo = '/register';
                return $this->redirectTo;
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $user = Auth::user();
        // $accessToken['accessToken'] = $user->createToken('authToken')->accessToken;
        // $this->middleware('guest')->except('logout');
    }

    // protected function authenticated(Request $request, $user)
    // {
    //     if ($request->session()->has('key')) {
    //     $sessionData = $request->session()->get('key');
    //         return redirect()->route('your route');
    //     }

    //     return redirect($this->redirectTo);
    // }
}
