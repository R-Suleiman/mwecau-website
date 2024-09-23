<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Image;
use App\Models\staff;
use App\Models\course;
use App\Models\Document;
use Barryvdh\DomPDF\PDF;
use App\Models\Statistic;
use App\Models\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Pdf as ModelsPdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function ApiRequest()
    {
        // Make the API request
        $response = Http::get('https://ums.mwecau.ac.tz/Api/get_university_structure');

        if ($response->successful()) {
            $programs = $response->json();
            return response()->json($programs);
        } else {
            return redirect()->back();
        }
    }
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
    public function postAnnouncementView()
    {
        return view('admin.post-announcement');
    }
    public function postAnnouncement(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['nullable', 'max:500'],
            'posting_date' => ['required'],
            'attachment' => ['nullable', 'file', 'max:2048', 'mimes:pdf'],
        ]);

        // File upload processing
        $attachmentName = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = time() . '_' . $attachment->getClientOriginalName();
            $attachment->move(public_path('documents/announcementAttachments'), $attachmentName);
        }

        // Save the announcement
        $newAnnouncement = new NewsUpdate();
        $newAnnouncement->name = $request->name;
        $newAnnouncement->description = $request->description;
        $newAnnouncement->posting_date = $request->posting_date;
        $newAnnouncement->attachment = $attachmentName;
        $newAnnouncement->save();

        return redirect()->back()->with('succes', 'Announcement Posted Successfully');
    }

    public function siteImage()
    {
        // $siteImages = Image::first();
        return view('admin.site-images');
    }
    public function uploadPageImage(Request $request)
    {
        $request->validate([
            'header' => ['string', 'max:255', 'nullable'],
            'sub_header' => ['max:255', 'string', 'nullable'],
            'description' => ['max:255', 'string', 'nullable'],
            'page' => ['required', 'max:255', 'string'],
            'image_section' => ['required', 'max:255', 'string'],
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,svg,gif|max:12288',
            'link' => ['nullable'],

        ], [
            'image.dimensions' => 'The image dimensions are not within the allowed range. Please upload an image between 100x100 and 2000x2000 pixels.',
        ]);

        //logic to process uplaoded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images/pageImages'), $imageName);
        }

        $newPageImage = new Image();

        $newPageImage->header = $request->header;
        $newPageImage->sub_header = $request->sub_header;
        $newPageImage->description = $request->description;
        $newPageImage->page = $request->page;
        $newPageImage->image_section = $request->image_section;
        $newPageImage->image = $imageName;
        $newPageImage->link = $request->link;

        //saving records
        $newPageImage->save();
        Alert::success('Message', 'Image uploaded successfully');

        return redirect()->back();
    }
    public function allSiteImages()
    {
        $groupedImages = Image::all()->groupBy('page');
        return view('admin.all-site-images', compact('groupedImages'));
    }

    public function changeImageView($id)
    {
        $imageDetails = Image::findOrFail($id);
        return view('admin.change-image', compact('imageDetails'));
    }
    public function changeImage(Request $request, $id)
    {
        $request->validate([
            'header' => ['max:255'],
            'image' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $changeImage = Image::findOrFail($id);

        // Image file processing
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images/pageImages'), $imageName);

            // Checking if the image exists, then deleting it
            $existingImage = public_path('/images/pageImages/' . $changeImage->image);
            if (File::exists($existingImage)) {
                File::delete($existingImage);
            }
            $changeImage->image = $imageName;
        }

        $changeImage->header = $request->header;

        $changeImage->update();

        Alert::success('success', 'Image Updated successfully');

        return redirect()->back();
    }
    public function deleteImage($id)
    {
        $deleteImage = Image::findOrFail($id);

        // Deleting existing image
        $existingImage = public_path('images/pageImages' . $deleteImage->picture);

        if (File::exists($existingImage)) {
            File::delete($existingImage);
        }
        $deleteImage->delete();

        return redirect()->back()->with('message', 'Image deleted successfully');
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
    public function courseDetails($programme_name)
    {
        $courseImage = Image::where('image_section', '=', 'course-banner')->first();
        return view('admin.course_details', compact('programme_name', 'courseImage'));
    }

    //returning list of all programs
    public function listOfPrograms()
    {

        $listOfPrograms = course::all();

        return view('admin.list-of-programs', compact('listOfPrograms'));
    }

    //deteting course and all its related details
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->back();
    }
    //function to return view for Pdf's
    public function postPdfView()
    {
        return view('admin.post-pdf');
    }
    public function postPdf(Request $request)
    {
        $request->validate([
            'header' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'type' => ['required', 'string'],
            'file' => ['required', 'mimes:pdf', 'max:2048'],
        ]);

        // File processing
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('documents/pdfs'), $fileName);
        }
        $newPDF = new Document();

        $newPDF->header = $request->header;
        $newPDF->description = $request->description;
        $newPDF->type = $request->type;
        $newPDF->file = $fileName;

        Alert::success('Message', 'PDF uploaded successfully.');

        $newPDF->save();
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


    // returning specific staff profile
    public function staffProfile($first_name, $last_name)
    {
        return view('admin.staff-profile', compact('first_name', 'last_name'));
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

    public function statistics()
    {
        return view('admin.uni-statistics');
    }
    public function postStatistics(Request $request)
    {
        $request->validate([
            'statistic_name' => ['required'],
            'value' => ['required']

        ]);

        $newStatistic = new Statistic();

        $newStatistic->statistic_name = $request->statistic_name;
        $newStatistic->value = $request->value;

        $newStatistic->save();

        Alert::success('success', 'New uni Statistic added');

        return redirect()->back();
    }
    public function EditUniStatistivView()
    {
        return view();
    }
    public function updateStatistic(Request $request, $id)
    {
        $request->validate([]);
    }
}
