<?php

namespace App\Http\Controllers;

use App\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    // $count = Recruitment::count();

    public function getAllRecruitments(Request $request)
    {
        $recruitments = Recruitment::all();
        return view('recruitments', compact('recruitments'));
    }

    public function getOneRecruitment($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return view('recruitments', compact('recruitment'));

    }

    public function showAllRecruitments()
    {
        return response()->json(Recruitment::all());
    }

}
