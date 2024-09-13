<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\event;
use App\Models\Image;
use App\Models\staff;
use App\Models\NewsUpdate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // $images = Image::orderBy('created_at', 'desc')->get();
        $images = Image::all();
        $UniversityEvents = Event::all();
        $announcements = newsUpdate::orderBy('created_at', 'desc')->get();
        $latestEvent = Event::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('latestEvent', 'UniversityEvents', 'images', 'announcements'));
    }

    // Cleaning the CK editor content
    public function cleanHtml($html) {
        $cleaned_html = html_entity_decode($html);
        return $cleaned_html;
    }

    public function about()
    {
        // Fetch the first record or modify it to fetch specific records
        $aboutPage = About::first();

        // Check if aboutPage exists
        if ($aboutPage) {
            $content = $aboutPage->description; // Fetch the description

            // Find the split index to break the content in half
            $splitIndex = strlen($content) / 2;

            // Split the description into two parts
            $part1 = $this->cleanHtml(substr($content, 0, $splitIndex));
            $part2 = $this->cleanHtml(substr($content, $splitIndex));

            // Pass both parts of the description and the name to the view
            return view('about', [
                'header' => $aboutPage->header,
                'part1' => $part1,
                'part2' => $part2
            ]);
        }
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
