<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthServiceController extends Controller
{

    public function index() {
        return view('health-center.index');
    }

    public function services() {
        return view('health-center.services');
    }

    public function events() {
        return view('health-center.events');
    }

    public function viewEvent() {
        return view('health-center.view-event');
    }
}
