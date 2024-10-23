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
            'header' => ['max:255', 'nullable'],
            'sub_header' => ['max:255', 'nullable'],
            'description' => ['max:255', 'nullable'],
            'page' => ['required', 'max:255'],
            'image_section' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'image' => 'required|mimes:jpeg,png,jpg,JPG,svg,gif|max:12288',
            'link' => ['nullable'],
        ]);

        //logic to process uploaded image
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
        $newPageImage->type = $request->type;
        $newPageImage->image = $imageName;
        $newPageImage->link = $request->link;

        //saving records with error handling
        try {
            if ($newPageImage->save()) {
                // Retrieve the saved data to verify it
                $savedData = Image::find($newPageImage->id);
                \Log::info('Saved data: ' . json_encode($savedData->toArray()));
                Alert::success('Message', 'Image uploaded successfully');
            } else {
                Alert::error('Error', 'Failed to save image data');
                \Log::error('Failed to save image data: ' . json_encode($newPageImage->toArray()));
            }
        } catch (\Exception $e) {
            Alert::error('Error', 'An error occurred while saving the image data');
            \Log::error('Exception while saving image data: ' . $e->getMessage());
        }

        return redirect()->back();
    }
    public function allImages()
    {
        $images = Image::orderBy('id', 'desc')->get();
        dd($images);
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
            'sub_header' => ['max:255'],
            'type' => ['required'],
            'image' => 'mimes:jpeg,png,jpg,gif,mp4'
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
        $changeImage->sub_header = $request->sub_header;
        $changeImage->type = $request->type;

        $changeImage->update();

        Alert::success('success', 'Updated successfully');

        return redirect()->back();
    }
    public function deleteImage($id)
    {
        $deleteImage = Image::findOrFail($id);

        // Deleting existing image
        $existingImage = public_path('/images/pageImages/' . $deleteImage->picture);

        if (File::exists($existingImage)) {
            File::delete($existingImage);
        }
        $deleteImage->delete();

        return redirect()->back()->with('message', 'Selected record Successfully deleted');
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
    public function staffProfile($first_name, $last_name, )
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
