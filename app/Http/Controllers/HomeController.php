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
    public function index(Request $request)
    {
        return view('home');
    }

    public function home(Request $request)
    {
        return view('index');
    }

    // public function landing(Request $request)
    // {
    //     session()->put('hasCompany', true);
    //     // return view('landing');
    //     return view ('/');
    // }

    // public function home()
    // {
    //     $response = Helper::getRSRequest('recruit/');
    //     return view('index', compact('response'));
    // }


    public function indexPublishedRecruitment(Request $request)
    {
        $pr = Helper::getRSRequest('recruit/published-recruitment');
       // echo $pr;
        return view('index', compact('pr'));
    }

    public function indexConcludedRecruitment(Request $request)
    {
        $cr = Helper::getRSRequest('recruit/concluded-recruitment');
        return view('index', compact('cr'));
    }

    public function indexOngoingRecruitment(Request $request)
    {
        $or = Helper::getRSRequest('recruit/ongoing-recruitment');
        return view('index', compact('or'));
    }

    public function indexApplications(Request $request)
    {
        $app = Helper::getRSRequest('recruit/applications');
        return view('index', compact('app'));
    }

    public function indexShortlistedCandidate(Request $request)
    {
        $shc = Helper::getRSRequest('recruit/shortlisted-candidate');
        return view('index', compact('response'));
    }

    public function indexOnboardedCandidate(Request $request)
    {
        $onc = Helper::getRSRequest('recruit/onboarded-candidate');
        return view('index', compact('response'));
    }

    public function indexUpcomingInterview(Request $request)
    {
        $upint = Helper::getRSRequest('recruit/upcoming-interview');
        return view('index', compact('response'));
    }

    public function everything(Request $request)
    {
        $publishedrecruitment = Helper::getRSRequest('recruit/published-recruitment');
        $upcominginterview = Helper::getRSRequest('recruit/upcoming-interview');
        $onboardedcandidate = Helper::getRSRequest('recruit/onboarded-candidate');
        $shortlistedcandidate = Helper::getRSRequest('recruit/shortlisted-candidate');
        $applications = Helper::getRSRequest('recruit/application');
        $ongoingrecruitment = Helper::getRSRequest('recruit/ongoing-recruitment');
        $concludedrecruitment = Helper::getRSRequest('recruit/concluded-recruitment');
        // dd($shortlistedcandidate);
        return view('index', compact('publishedrecruitment','upcominginterview','onboardedcandidate','shortlistedcandidate','applications','ongoingrecruitment','concludedrecruitment'));
    }

    public function startRecruitment(Request $request)
    {
        return view('startrecruitment');
    }

    public function applications(Request $request)
    {
        $response = Helper::getRSRequest('recruit/applications');
        return view('applications', compact('response'));
    }

    public function shortlistedCandidate(Request $request)
    {
        $shortlistedcandidate = Helper::getRSRequest('recruit/shortlisted-candidate');
        // dd($candidate);
        return view('shortlistedcandidate', compact('shortlistedcandidate'));
        // return view('shortlistedcandidate');
    }

    public function onboardedCandidate(Request $request)
    {
        return view('onboardedcandidate');
    }

    public function profile(Request $request)
    {
        $userprofile = Helper::getRSRequest('recruit/user_profile');
        return view('profile', compact('userprofile'));
    }

    public function notification()
    {
        $notification = Helper::getRSRequest('recruit/notifications');
        return view('notification', compact('notification'));
    }

    public function accountSettings(Request $request)
    {
        $settings = Helper::getRSRequest('recruit/user_profile');
        return view('accountsettings', compact('settings'));
    }

    public function upcomingInterview(Request $request)
    {
        $upcominginterview = Helper::getRSRequest('recruit/upcoming-interview');
        return view('upcominginterviews', compact('upcominginterview'));
    }

    public function store(Request $request)
    {
        var_dump(request('job_title'));
        // var_dump(request('publisher'));
        // var_dump(request('releasedate'));
        // var_dump(request('image'));

    }
}
