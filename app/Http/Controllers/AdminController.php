<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\staff;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function adminHome()
    {

        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);

        $adminName = Auth::user(); //getting name of the authenticated admin
        $totalUniCourses = Course::all()->count(); //getting total number of courses
        $totalUnistaff = staff::all()->count(); //getting total number of staff
        $totalUnievents = event::all()->count(); //getting tottal number of events
        $allUniStaff = staff::all();
        $allUniCourses = course::all();
        $allUniEvents = event::all();

        return view('admin.dashboard', compact('totalUniCourses', 'totalUnistaff', 'totalUnievents', 'adminName', 'allUniStaff', 'allUniCourses', 'allUniEvents'));
    }
    //returning program registration form
    public function registerCourse()
    {
        return view('admin.register-course');
    }
    //registering a program on to the database
    public function storeCourse(Request $request)
    {

        $request->validate([
            'course_title' => ['required', 'string'],
            'course_description' => ['required', 'string'],
            'course_entry_qualification' => ['required', 'string'],
            'course_code' => ['required', 'string'],
            'course_duration' => ['required', 'string'],
            'course_category' => ['required', 'string'],
            'course_thumbnail' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:4024'],
        ]);

        // handling file upload

        if ($request->hasFile('course_thumbnail')) {
            $course_thumbnail = $request->file('course_thumbnail');
            $courseImageName = time() . '' . $course_thumbnail->getClientOriginalExtension();
            $course_thumbnail->move(public_path('images/coursePhotos'), $courseImageName);
        } else {
            $courseImageName = null;
        }

        $newCourse = new course();

        $newCourse->course_title = $request->course_title;
        $newCourse->course_description = $request->course_description;
        $newCourse->course_entry_qualification = $request->course_entry_qualification;
        $newCourse->course_code = $request->course_code;
        $newCourse->course_duration = $request->course_duration;
        $newCourse->course_category = $request->course_category;
        $newCourse->course_thumbnail = $courseImageName;

        $newCourse->save();

        Alert::success('Message', 'Course added successfully');
        return redirect()->back();
    }
    //returning view for specific course details
    public function courseDetails($id)
    {
        $courseDetails = course::findOrFail($id);

        return view('admin.course_details', compact('courseDetails'));
    }

    //returning list of all programs
    public function listOfPrograms()
    {

        $listOfPrograms = course::all();

        return view('admin.list-of-programs', compact('listOfPrograms'));
    }
    //function to return view for updating a specific course details
    public function courseUpdateForm($id)
    {

        $courseData = course::findOrFail($id);
        return view('admin.course_update_form', compact('courseData'));
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
        Alert::success('Messsage', 'Course details is successfully updated');
        return redirect()->back();
    }
    //deteting course and all its related details
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->back();
    }

    //returning staff registration form
    public function staffForm()
    {
        return view('admin.register-staff');
    }
    //registering staff on to the database
    public  function registerStaff(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'staffID' => ['required', 'unique:staffs'],
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'aboutStaff' => ['string', 'required'],
            'academicQualification' => ['required', 'string'],
            'department' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'language' => ['required'],
            'staffProfile_picture' => ['required', 'image', 'mimes:png', 'max:1024'],
        ], [
            'staffID.required' => 'staff id is required',
            'staffID.unique' => 'Staff with this ID has already been registered',
            'staffProfile_picture.required' => 'Please select staff profile picture',
            'staffProfile_picture.mimes' => 'Please select file .PNG file type',
            'staffProfile_picture.max' => 'file should not exceed 1MB',
        ]);

        if ($request->hasFile('staffProfile_picture')) {
            $staffProfilePicture = $request->file('staffProfile_picture');
            $staffProfilePictureName = time() . '.' . $staffProfilePicture->getClientOriginalExtension();
            $staffProfilePicture->move(public_path('images/staffProfiles'), $staffProfilePictureName);
        } else {
            $staffProfilePictureName = null;
        }

        $newStaff = new Staff();

        $newStaff->title = $request->title;
        $newStaff->staffID = $request->staffID;
        $newStaff->firstName = $request->firstName;
        $newStaff->lastName = $request->lastName;
        $newStaff->aboutStaff = $request->aboutStaff;
        $newStaff->academicQualification = $request->academicQualification;
        $newStaff->department = $request->department;
        $newStaff->email = $request->email;
        $newStaff->phone = $request->phone;
        $newStaff->gender = $request->gender;
        $newStaff->nationality = $request->nationality;
        $newStaff->language = $request->language;
        $newStaff->staffProfile_picture = $staffProfilePictureName;

        $newStaff->save();

        return redirect()->back();
    }

    //rettuning the list of staffs
    public function listOfStaff()
    {

        $listOfStaff = staff::all();
        return view('admin.list-of-staff', compact('listOfStaff'));
    }
    // returning specific staff profile
    public function staffProfile($id)
    {

        $staffProfile = staff::findOrFail($id);
        return view('admin.staff-profile', compact('staffProfile'));
    }
    //form for editing a specific staff profile
    public function editStaffProfile($id)
    {

        $staffDetails = staff::findOrFail($id);
        return view('admin.edit-staff-profile', compact('staffDetails'));
    }



    //updating a specific staff profile
    public function updateStaffProfile(Request $request, $id)
    {

        $staffDetails = staff::findOrFail($id);
        $request->validate([
            'title' => ['required', 'string'],
            'staffID' => ['required'],
            // 'staffID' => ['required', Rule::unique('staffs,',)->ignore($staffDetails->ID)],
            // 'staffID' => 'required|unique:staffs,staffID,' . $staffDetails->id,

            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'aboutStaff' => ['string', 'required'],
            'academicQualification' => ['required', 'string'],
            'department' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'language' => ['required'],
            'staffProfile_picture' => ['image', 'mimes:png', 'max:1024'],
        ], [
            'staffID' => 'Staff with this ID is already exist',
            'staffID.unique' => 'This ID has already been registered',
            'staffProfile_picture.mimes' => 'Please select .PNG file type.',
            'staffProfile_picture.max' => 'File size should not exceed 1MB, please select another.',
        ]);

        //staff profile picture processing
        if ($request->hasFile('staffProfile_picture')) {
            $file = $request->file('staffProfile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'images/staffProfiles';

            if ($request->file('staffProfile_picture')) {
                unlink(public_path($path . '/' . $staffDetails->staffProfile_picture));
            }

            //moving processed profile photo
            $file->move($path, $filename);

            $staffDetails->staffProfile_picture = $filename;
        }

        //updating course details
        $staffDetails->title = $request->title;
        $staffDetails->staffID = $request->staffID;
        $staffDetails->firstName = $request->firstName;
        $staffDetails->lastName = $request->lastName;
        $staffDetails->aboutStaff = $request->aboutStaff;
        $staffDetails->academicQualification = $request->academicQualification;
        $staffDetails->department = $request->department;
        $staffDetails->email = $request->email;
        $staffDetails->phone = $request->phone;
        $staffDetails->gender = $request->gender;
        $staffDetails->nationality = $request->nationality;
        $staffDetails->language = $request->language;


        $staffDetails->update();

        alert::success('Message', 'successfully Updated');
        return redirect()->back();
    }

    public function destroyStaff($id)
    {
        $DeleteStaff = staff::findOrFail($id);
        unlink(public_path('images/staffProfiles/' . $DeleteStaff->staffProfile_picture));
        $DeleteStaff->delete();

        return redirect()->back();
    }
}
