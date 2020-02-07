<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // public function landing(Request $request)
    // {
    //     $request->session()->put('hasCandidate', true);
    //     return view('candidatelanding');
    // }

    public function home(Request $request)
    {
        return view('candidateindex');
    }

    public function profile(Request $request)
    {
        return view('candidateprofile');
    }

    public function notification(Request $request)
    {
        return view('candidatenotification');
    }

    public function accountSettings(Request $request)
    {
        return view('candidateaccountsettings');
    }

    public function invites(Request $request)
    {
        return view('invites');
    }

    public function course(Request $request)
    {
        return view('coursedatascience');
    }

    public function jobPostDetail(Request $request)
    {
        return view('jobpostdetails');
    }

    public function career(Request $request)
    {
        return view('career');
    }

    public function academy(Request $request)
    {
        return view('academy');
    }

    public function verification(Request $request)
    {
        return view('verification');
    }

    public function upcomingInterview(Request $request)
    {
        return view('candidateupcominginterviews');
    }
}
