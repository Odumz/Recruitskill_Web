<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function home()
    {
        return view('candidateindex');
    }

    public function profile()
    {
        return view('candidateprofile');
    }

    public function notification()
    {
        return view('candidatenotification');
    }

    public function accountSettings()
    {
        return view('candidateaccountsettings');
    }

    public function invites()
    {
        return view('invites');
    }

    public function course()
    {
        return view('coursedatascience');
    }

    public function jobPostDetail()
    {
        return view('jobpostdetails');
    }

    public function career()
    {
        return view('career');
    }

    public function academy()
    {
        return view('academy');
    }

    public function verification()
    {
        return view('verification');
    }

    public function upcomingInterview()
    {
        return view('candidateupcominginterviews');
    }
}
