<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Image;
use App\Models\course;
use Barryvdh\DomPDF\PDF;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

        $adminName = Auth::user();
        $totalUnievents = event::all()->count();
        $allUniEvents = event::all();

        return view('admin.dashboard', compact('totalUnievents', 'adminName', 'allUniEvents'));
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
    // returning specific staff profile
    public function staffProfile($first_name, $last_name)
    {
        return view('admin.staff-profile', compact('first_name', 'last_name'));
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
