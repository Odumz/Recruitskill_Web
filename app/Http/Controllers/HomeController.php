<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('index');
    }

    public function publishedRecruitment()
    {
        return view('publishedrecruitment');
    }

    public function startRecruitment()
    {
        return view('startrecruitment');
    }

    public function ongoingRecruitment()
    {
        return view('ongoingrecruitment');
    }

    public function concludedRecruitment()
    {
        return view('concludedrecruitment');
    }

    public function applications()
    {
        return view('applications');
    }

    public function shortlistedCandidate()
    {
        return view('shortlistedcandidate');
    }

    public function onboardedCandidate()
    {
        return view('onboardedcandidate');
    }

    public function profile()
    {
        return view('profile');
    }

    public function notification()
    {
        return view('notification');
    }

    public function accountSettings()
    {
        return view('accountsettings');
    }
}
