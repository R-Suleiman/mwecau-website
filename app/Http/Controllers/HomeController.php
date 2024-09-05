<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Image;
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
        $latestEvent = Event::latest()->take(1)->get();
        return view('welcome', compact('latestEvent', 'UniversityEvents', 'images'));
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
        return view('campus-life');
    }
    public function itServices()
    {
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('IT-services', compact('ictBanner'));
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
        $newsUpdates = Event::all();
        return view('news-updates', compact('newsUpdates'));
    }
    public function icons()
    {
        return view('icons');
    }
}
