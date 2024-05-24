<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\staff;

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

        $UniversityEvents = Event::all();
        $latestEvent = Event::latest()->take(1)->get();
        return view('welcome', compact('latestEvent', 'UniversityEvents'));
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
    public function icons()
    {
        return view('icons');
    }
}
