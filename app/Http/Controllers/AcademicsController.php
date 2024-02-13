<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    //all functions relating to Academics page logic
    public function academics()
    {
        return view('academics');
    }
    public function showCourseDetails($id)
    {
        $showCourseDetails = Course::find($id);
        return view('programs.courses.course_details', compact('showCourseDetails'));
    }
    public function postGraduate()
    {
        $course = Course::first();
        $postGraduateCourses = Course::all();
        return view('programs/courses/post-graduate', compact('course', 'postGraduateCourses'));
    }
    public function underGraduate()
    {
        $underGraduateCourses = Course::all();
        return view('programs.courses.undergraduate', compact('underGraduateCourses'));
    }
    public function nonDegree()
    {
        $NonDegreeCourses = Course::all();
        return view('programs.courses.non-degree', compact('NonDegreeCourses'));
    }
}
