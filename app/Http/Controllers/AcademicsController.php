<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\course;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class AcademicsController extends Controller
{
    public function faculty($faculty_name)
    {

        return view('faculties.faculty', compact('faculty_name'));
    }

    // returning academics views
    public function academics()
    {
        $postgraduateImage = Image::where('header', 'postgraduate')
            ->where('page', 'academics')
            ->first();
        $undergraduateImage = Image::where('header', 'undergraduate')
            ->where('page', 'academics')
            ->first();
        $nonDegreeImage = Image::where('header', 'non-degree')
            ->where('page', 'academics')
            ->first();
        return view('academics', compact('postgraduateImage', 'undergraduateImage', 'nonDegreeImage'));
    }
    public function department($faculty_name, $dept_name)
    {
        return view('faculties.departments', compact('faculty_name', 'dept_name'));
    }
    public function academicsJson()
    {
        $statistics = Statistic::all();
        return response()->json($statistics);
    }

    public function programsList()
    {
        return view('programs.programs-list');
    }
    public function showCourseDetails($programme_category, $programme_name)
    {
        $courseImage = Image::where('image_section', '=', 'course-banner')->first();
        return view('programs.course_details', compact('programme_category', 'programme_name', 'courseImage'));
    }
    public function programmeCategory($programme_category)
    {
        $courseImage = null;

        if ($programme_category === 'post-graduate') {
            $courseImage = Image::whereIn('page', [
                'Postgraduate',
                'Post-graduate',
                'postgraduate',
                'post-graduate',
                'Post-Graduate'
            ])->first();
        } elseif ($programme_category === 'undergraduate') {
            $courseImage = Image::where('page', ['undergraduate', 'Undergraduate'])->first();
        } elseif ($programme_category === 'non-degree') {
            $courseImage = Image::where('page', [
                'non-degree',
                'Non-Degree',
                'Non Degree',
                'non degree',
            ])->first();
        }

        return view('programs.programme-category', compact('programme_category', 'courseImage'));
    }
    public function departmentProgrammes($faculty_name)
    {
        return view('faculties.department-programmes', compact('faculty_name'));
    }
    public function staff($faculty_name)
    {
        return view('faculties.faculty-staff', compact('faculty_name'));
    }
}
