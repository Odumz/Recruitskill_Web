<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function __construct()
    {
        $this->middleware('recruiter');
    }

    public function startRecruitmentForm()
    {
        return view('startrecruitmentform');
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

    public function getPublishedRecruitment()
    {
        $recruiter = Auth::user()->id;
        $recruitmentHelper = Helper::getRSRequest('recruit/recruitment');
        $recruitmentCollection = collect($recruitmentHelper);
        $publishedRecruitment = $recruitmentCollection->where('users_id', $recruiter)->where('isPublished', 1);
        // dd($publishedRecruitment);
        return view('publishedrecruitment', compact('publishedRecruitment'));
    }

    public function putPublishedRecruitment(Request $request, string $id)
    {

        $prog = Helper::deleteRSRequest('recruit/recruitment',$id);
        return redirect()->back();
    }

    public function deletePublishedRecruitment(Request $request, string $id)
    {

        $prog = Helper::deleteRSRequest('recruit/recruitment',$id);
        return redirect()->back();
    }

    public function getOngoingRecruitment()
    {
        $recruiter = Auth::user()->id;
        $recruitmentHelper = Helper::getRSRequest('recruit/recruitment');
        $recruitmentCollection = collect($recruitmentHelper);
        $ongoingRecruitment = $recruitmentCollection->where('users_id', $recruiter)->where('status', 'ongoing');
        return view('ongoingrecruitment', compact('ongoingRecruitment'));
    }

    public function putOngoingRecruitment(Request $request, string $id)
    {

        $prog = Helper::deleteRSRequest('recruit/recruitment',$id);
        return redirect()->back();
    }

    public function deleteOngoingRecruitment(Request $request, string $id)
    {

        $prog = Helper::deleteRSRequest('recruit/recruitment',$id);
        return redirect()->back();
    }

    public function getConcludedRecruitment()
    {
        $recruiter = Auth::user()->id;
        $recruitmentHelper = Helper::getRSRequest('recruit/recruitment');
        $recruitmentCollection = collect($recruitmentHelper);
        $concludedRecruitment = $recruitmentCollection->where('users_id', $recruiter)->where('status', 'concluded');
        return view('concludedrecruitment', compact('concludedRecruitment'));
    }

    public function putConcludedRecruitment(Request $request, string $id)
    {
        $id = $request->item_id;
        $prog = Helper::deleteRSRequest('recruit/recruitment',$id);
        return back()->with('success','Recruitment updated successfully!')->autoclose(4000);
    }

    public function deleteConcludedRecruitment(Request $request, string $id)
    {
        $id = $request->item_id;
        $recruitment = Helper::deleteRSRequest('recruit/recruitment', $id);
        return back()->with('success','Recruitment deleted successfully!')->autoclose(4000);
    }


    //Applications
    public function getApplications(Request $request)
    {
        $response = Helper::getRSRequest('recruit/application');
        // dd($response);
        return view('applications', compact('response'));
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
        return back()->with('success','Item created successfully!')->autoclose(4000);
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
