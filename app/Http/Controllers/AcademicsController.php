<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AcademicsController extends Controller
{
    // returning academics views
    public function academics()
    {
        return view('academics');
    }
    //storing course


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


    public function showCourseDetails($id)
    {
        $showCourseDetails = Course::find($id);
        return view('programs.course_details', compact('showCourseDetails'));
    }
    public function postGraduate()
    {
        $totalPostgraduatecourses = Course::where('course_category', 'postgraduate')->count();
        $postGraduateCourses = Course::where('course_category', 'postgraduate')->paginate(6);
        return view('programs.post-graduate', compact('totalPostgraduatecourses', 'postGraduateCourses'));
    }
    public function underGraduate()
    {
        $totalUnderGraduateCourses = Course::where('course_category', 'undergraduate')->count();
        $underGraduateCourses = Course::where('course_category', 'undergraduate')->paginate(6);
        return view('programs.undergraduate', compact('underGraduateCourses', 'totalUnderGraduateCourses'));
    }
    public function nonDegree()
    {
        $totalNonDegreeCourses = Course::where('course_category', 'non-degree')->count();
        $NonDegreeCourses = Course::where('course_category', 'non-degree')->paginate(3);
        return view('programs.non-degree', compact('NonDegreeCourses', 'totalNonDegreeCourses'));
    }
}
