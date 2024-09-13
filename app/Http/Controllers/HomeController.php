<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\event;
use App\Models\Image;
use App\Models\NewsUpdate;
use App\Models\staff;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
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
    public function connection_error()
    {
        return view('errors.503');
    }

    public function index()
    {
        // Set the title
        SEOTools::setTitle('Mwenge Catholic Univeristy | University in Tanzania');
        // Set canonical URL
        SEOTools::setCanonical('https://mwecau.ac.tz/');
        $images = Image::all();
        $UniversityEvents = Event::all();
        $announcements = newsUpdate::orderBy('created_at', 'desc')->get();
        $latestEvent = Event::orderBy('created_at', 'desc')->get();
        return view('index', compact('latestEvent', 'UniversityEvents', 'images', 'announcements'));

    }

    // Cleaning the CK editor content
    public function cleanHtml($html)
    {
        $cleaned_html = html_entity_decode($html);
        return $cleaned_html;
    }

    public function about()
    {
        $courseImage = Image::where('image_section', '=', 'course-banner')->first();
        return view('about', compact('courseImage'));
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        //fetching gallery images
        $galleryImages = Image::where('image_section', 'about-gallery')->get();
        $partnersImages = Image::where('image_section', 'about-partners')->get();
        $aboutPage = About::first();
        if ($aboutPage) {
            $content = $aboutPage->description;

            // Find the split index to break the content in half
            $splitIndex = strlen($content) / 2;

            // Split the description into two parts
            $part1 = $this->cleanHtml(substr($content, 0, $splitIndex));
            $part2 = $this->cleanHtml(substr($content, $splitIndex));

            return view('about', [
                'header' => $aboutPage->header,
                'part1' => $part1,
                'part2' => $part2,
                'galleryImages' => $galleryImages,
                'partnersImages' => $partnersImages
            ]);
        }
    }

    public function events()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        return view('events');
    }

    public function campusLife()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $campusImage = Image::where('image_section', 'campus-life')->first();
        return view('campus-life', compact('campusImage'));
    }
    public function itServices()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('IT-services', compact('ictBanner'));
    }

    public function library()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('library', compact('ictBanner'));
    }
    public function research()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $images = Image::all();
        $UniversityEvents = Event::all();
        $latestEvent = Event::latest()->take(1)->get();
        return view('research', compact('latestEvent', 'UniversityEvents', 'images'));
    }
    public function uniEvents()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $event = Event::all();
        return view('all-uni-events', compact('event'));
    }
    public function newsUpdates()
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $newsUpdates = NewsUpdate::all();
        return view('news-updates', compact('newsUpdates'));
    }

    public function announcementDetails($id)
    {
        // Set canonical URL
        SEOTools::setCanonical(url()->current());
        $announcementDetails = NewsUpdate::findOrFail($id);

        return view('announcement-details', compact('announcementDetails'));
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
