<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function postEvents()
    {
        return view('post_event');
        
    }
}
