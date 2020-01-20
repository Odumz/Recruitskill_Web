<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    // $count = Recruitment::count();

    // public function getAllRecruitments(Request $request)
    // {
    //     $recruitments = Recruitment::all();
    //     return view('recruitments', compact('recruitments'));
    // }

    // public function getOneRecruitment($id)
    // {
    //     $recruitment = Recruitment::findOrFail($id);
    //     return view('recruitments', compact('recruitment'));

    // }

    // public function showAllRecruitments()
    // {
    //     return response()->json(Recruitment::all());
    // }

    public function publishedRecruitment()
    {
        // return Helper::getRSRequest('api/courses');
        $response = Helper::getRSRequest('recruit/published-recruitment');
        // $recruitment = json_decode(json_encode($response));
        return view('publishedrecruitment', compact('response'));
        // return view('publishedrecruitment')->with('recruitment', $response);
    }

    public function ongoingRecruitment()
    {
        // return Helper::getRSRequest('api/courses');
        $response = Helper::getRSRequest('recruit/ongoing-recruitment');
        // $recruitment = json_decode(json_encode($response));
        return view('ongoingrecruitment', compact('response'));
        // return view('publishedrecruitment')->with('recruitment', $response);
    }

    public function concludedRecruitment()
    {
        // return Helper::getRSRequest('api/courses');
        $response = Helper::getRSRequest('recruit/concluded-recruitment');
        // $recruitment = json_decode(json_encode($response));
        return view('concludedrecruitment', compact('response'));
        // return view('publishedrecruitment')->with('recruitment', $response);
    }
}
