<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
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


    // public function home()
    // {
    //     $response = Helper::getRSRequest('recruit/');
    //     return view('index', compact('response'));
    // }


    public function indexPublishedRecruitment()
    {
        $pr = Helper::getRSRequest('recruit/published-recruitment');
       // echo $pr;
        return view('index', compact('pr'));
    }

    public function indexConcludedRecruitment()
    {
        $cr = Helper::getRSRequest('recruit/concluded-recruitment');
        return view('index', compact('cr'));
    }

    public function indexOngoingRecruitment()
    {
        $or = Helper::getRSRequest('recruit/ongoing-recruitment');
        return view('index', compact('or'));
    }

    public function indexApplications()
    {
        $app = Helper::getRSRequest('recruit/applications');
        return view('index', compact('app'));
    }

    public function indexShortlistedCandidate()
    {
        $shc = Helper::getRSRequest('recruit/shortlisted-candidate');
        return view('index', compact('response'));
    }

    public function indexOnboardedCandidate()
    {
        $onc = Helper::getRSRequest('recruit/onboarded-candidate');
        return view('index', compact('response'));
    }

    public function indexUpcomingInterview()
    {
        $upint = Helper::getRSRequest('recruit/upcoming-interview');
        return view('index', compact('response'));
    }

    public function everything()
    {
        $publishedrecruitment = Helper::getRSRequest('recruit/published-recruitment');
        $upcominginterview = Helper::getRSRequest('recruit/upcoming-interview');
        $onboardedcandidate = Helper::getRSRequest('recruit/onboarded-candidate');
        $shortlistedcandidate = Helper::getRSRequest('recruit/shortlisted-candidate');
        $applications = Helper::getRSRequest('recruit/application');
        $ongoingrecruitment = Helper::getRSRequest('recruit/ongoing-recruitment');
        $concludedrecruitment = Helper::getRSRequest('recruit/concluded-recruitment');
        return view('index', compact('publishedrecruitment','upcominginterview','onboardedcandidate','shortlistedcandidate','applications','ongoingrecruitment','concludedrecruitment'));
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
        $userprofile = Helper::getRSRequest('recruit/user_profile');
        return view('profile', compact('userprofile'));
    }

    public function notification()
    {
        $notification = Helper::getRSRequest('recruit/notifications');
        return view('notification', compact('notification'));
    }

    public function accountSettings()
    {
        $settings = Helper::getRSRequest('recruit/user_profile');
        return view('accountsettings', compact('settings'));
    }

    public function upcomingInterview()
    {
        $upcominginterview = Helper::getRSRequest('recruit/upcoming-interview');
        return view('upcominginterviews', compact('upcominginterview'));
    }
}
