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
        $courses = course::all();
        return view('programs.programs-list', compact('courses'));
    }

    //function to return view for updating a specific course details
    public function courseUpdateForm($id)
    {

        $courseData = course::findOrFail($id);
        return view('programs.course_update_form', compact('courseData'));
    }
    // this function updates the specific course details
    public function updateCourseDetails(Request $request, $id)
    {
        $request->validate([
            'course_title' => ['required', 'string'],
            'course_description' => ['required', 'string'],
            'course_entry_qualification' => ['required', 'string'],
            'course_code' => ['required', 'string'],
            'course_duration' => ['required', 'string'],
            'course_category' => ['required', 'string'],
            'course_thumbnail' => ['image', 'mimes:jpg,png,jpeg', 'max:4024'],
        ]);

        // Find course by id
        $updatedCourseDetails = Course::findOrFail($id);

        // File processing
        if ($request->hasFile('course_thumbnail')) {
            $file = $request->file('course_thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'images/coursePhotos';



            // Checking if course thumbnail exists and if a new image has been uploaded
            if ($request->hasFile('course_thumbnail')) {
                $existingCourseThumbnail = public_path($path . '/' . $updatedCourseDetails->course_thumbnail);
                if (File::exists($existingCourseThumbnail)) {
                    File::delete($existingCourseThumbnail);
                }
            }

            // Moving and saving new course thumbnail
            $file->move($path, $filename);

            // Update course thumbnail in database
            $updatedCourseDetails->course_thumbnail = $filename;
        }

        // Update other course details
        $updatedCourseDetails->course_title = $request->course_title;
        $updatedCourseDetails->course_description = $request->course_description;
        $updatedCourseDetails->course_entry_qualification = $request->course_entry_qualification;
        $updatedCourseDetails->course_code = $request->course_code;
        $updatedCourseDetails->course_duration = $request->course_duration;
        $updatedCourseDetails->course_category = $request->course_category;

        // Save the updated course
        $updatedCourseDetails->save();

        return redirect()->back();
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
            $courseImage = Image::where('page',  [
                'non-degree',
                'Non-Degree',
                'Non Degree',
                'non degree',
            ])->first();
        }

        return view('programs.programme-category', compact('programme_category', 'courseImage'));
    }
    public function underGraduate()
    {
        $courseImage = Image::where('page', ['undergraduate', 'Undergraduate'])->first();
        $totalUnderGraduateCourses = Course::where('course_category', 'undergraduate')->count();
        $underGraduateCourses = Course::where('course_category', 'undergraduate')->get();
        return view('programs.undergraduate', compact('underGraduateCourses', 'totalUnderGraduateCourses', 'courseImage'));
    }
    public function nonDegree()
    {
        $courseImage = Image::where('page',  [
            'non-degree',
            'Non-Degree',
            'Non Degree',
            'non degree',
        ])->first();
        $totalNonDegreeCourses = Course::where('course_category', 'non-degree')->count();
        $NonDegreeCourses = Course::where('course_category', 'non-degree')->get();
        return view('programs.non-degree', compact('NonDegreeCourses', 'totalNonDegreeCourses', 'courseImage'));
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
