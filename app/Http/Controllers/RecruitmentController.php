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

    public function postRecruitment(Request $request)
    {
        $user_id = $request->user_id;
        $job_title = $request->job_title;
        $job_description = $request->job_description;
        $duration = $request->duration;
        $country = $request->country;
        $required_skills = $request->required_skills;
        $required_experience = $request->required_experience;
        $job_category = $request->job_category;
        $city = $request->city;
        $state = $request->state;
        $gender = $request->gender;
        $responsibilities = $request->responsibilities;
        $position = $request->position;
        $renumeration = $request->renumeration;
        $data_type = $request->data_type;

        $fields = array(
            'user_id' => $user_id,
            'job_title' => $job_title,
            'job_description' => $job_description,
            'duration' => $duration,
            'country' => $country,
            'required_skills' => $required_skills,
            'required_experience' => $required_experience,
            'job_category' => $job_category,
            'city' => $city,
            'state' => $state,
            'gender' => $gender,
            'responsibilities' => $responsibilities,
            'position' => $position,
            'renumeration' => $renumeration,
            'data_type' => $data_type
        );

        $response = Helper::postRSRequest('recruit/recruitment', $fields);
        return view('startrecruitment');
    }

    public function postJobTitle(Request $request)
    {
        // $users_id = $request->users_id;
        $job_title = $request->job_title;

        $fields = [
            // 'users_id' => $users_id,
            'job_title' => $job_title,
        ];

        $post_details = [
            'title' => "Job Title"
        ];

        $response = Helper::postRSRequest('recruit/job_title', $fields, $post_details);

        //dd($response);
        // return view('index');
        return back()->with('success','Item created successfully!');
    }

    public function deleteJobTitle(Request $request, string $id)
    {
        // $request = Helper::getRSRequest('recruit/ongoing-recruitment');
        // $result = json_decode($request);
        // $id = $result->id;
        $id = $request->item_id;
        $answer = Helper::deleteRSRequest('recruit/ongoing-recruitment/', $id);
        // dd($answer);
        return back()->with('success','Item deleted successfully!');
    }

    public function updateOngoingRecruitment(Request $request, string $id)
    {
        $id = $request->item_id;
        // $user_id = $request->user_id;
        $alias = $request->alias;

        $fields = [
            // 'id' => $id,
            // 'user_id' => $user_id,
            'alias' => $alias,
        ];

        $response = Helper::putRSRequest('recruit/ongoingrecruitment/', $fields, $id, $post_details=null);
    }

    public function updateShortlistedCandidate(Request $request, string $id)
    {
        $id = $request->item_id;
        $user_id = $request->user_id;

        $fields = [
            'user_id' => $user_id,
        ];

        // $update = Helper::putRSRequest('recruit/shortlisted-candidate/', $fields, $id, $post_details=null);
        $shortlistedcandidate = Helper::getRSRequest('recruit/shortlisted-candidate');
        return view ('shortlistedcandidate', compact('shortlistedcandidate'));
        // return back()->with('error','Item updated successfully!');
    }

    public function edit()
    {
        $response = Helper::getRSRequest('recruit/ongoing-recruitment');
        return view ('editongoingrecruitment', compact('response'));
    }

    public function deleteCandidate(Request $request, string $id)
    {
        // $request = Helper::getRSRequest('recruit/ongoing-recruitment');
        // $result = json_decode($request);
        // $id = $result->id;
        $id = $request->item_id;
        $answer = Helper::deleteRSRequest('recruit/shortlisted-candidate/', $id);
        // dd($answer);
        return back()->with('success','Item deleted successfully!');
    }

    public function editCandidate(Request $request)
    {
        // $id = $request->item_id;
        // $user_id = $request->user_id;

        // $fields = [
        //     // 'users_id' => $users_id,
        //     'user_id' => $user_id,
        // ];

        // $response = Helper::putRSRequest('recruit/shortlisted-candidate', $fields, $id);
        // $answer = Helper::getRSRequest('/recruit/shortlisted-candidate');

        $response = Helper::getRSRequest('recruit/shortlisted-candidate');
        return view ('editshortlistedcandidate', compact('response'));
    }
}
