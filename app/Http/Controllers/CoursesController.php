<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getAllCourses(Request $request)
    {
        $courses = Courses::all();
        return view('courses', compact('courses'));
    }

    public function getOneCourse($id)
    {
        $course = Courses::findOrFail($id);
        return view('courses', compact('course'));

    }

    public function showAllCourses()
    {
        return response()->json(Courses::all());
    }

    public function courses()
    {
        return view('courses');
    }

    public function courseDetails()
    {
        return view('coursedetails');
    }
}
