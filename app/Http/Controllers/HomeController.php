<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Image;
use App\Models\NewsUpdate;
use App\Models\staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //this a default laravel middleware to applied inside the controller to protect all the routes inside this controller
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index()
    {
        // $images = Image::orderBy('created_at', 'desc')->get();
        $images = Image::all();
        $UniversityEvents = Event::all();
        $announcements = newsUpdate::orderBy('created_at', 'desc')->get();
        $latestEvent = Event::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('latestEvent', 'UniversityEvents', 'images', 'announcements'));
    }

    public function about()
    {
        return view('about');
    }
    public function events()
    {
        return view('events');
    }

    public function campusLife()
    {
        $campusImage = Image::where('image_section', 'campus-life')->first();
        return view('campus-life', compact('campusImage'));
    }
    public function itServices()
    {
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('IT-services', compact('ictBanner'));
    }
    public function library()
    {
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('library', compact('ictBanner'));
    }
    public function research()
    {
        $images = Image::all();
        $UniversityEvents = Event::all();
        $latestEvent = Event::latest()->take(1)->get();
        return view('research', compact('latestEvent', 'UniversityEvents', 'images'));
    }
    public function uniEvents()
    {
        $event = Event::all();
        return view('all-uni-events', compact('event'));
    }
    public function newsUpdates()
    {
        $newsUpdates = NewsUpdate::all();
        return view('news-updates', compact('newsUpdates'));
    }
    public function announcementDetails($id)
    {
        $announcementDetails = NewsUpdate::findOrFail($id);

        return view('announcement-details', compact('announcementDetails'));
    }
    public function icons()
    {
        return view('icons');
    }
    public function documentPreview($attachment)
    {
        // Fetch the attachment
        $attachmentFile = NewsUpdate::where('attachment', $attachment)->first();

        // Check if the file exists in the database
        if (!$attachmentFile) {
            return redirect()->back()->with('error', 'The specified attachment does not exist in our records.');
        }

        // Construct the file path
        $filePath = public_path('documents/announcementAttachments/' . $attachmentFile->attachment);

        // Check if the file exists in the file system
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found on the server.');
        }

        return response()->file($filePath);
    }

}
