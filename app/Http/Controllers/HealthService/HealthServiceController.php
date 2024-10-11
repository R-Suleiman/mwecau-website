<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthServiceController extends Controller
{

    public function index()
    {
        return view('health-center.index');
    }
    public function aboutUs()
    {
        return view('health-center.about-us');
    }
    public function department()
    {
        return view('health-center.department');
    }
    public function services()
    {
        return view('health-center.services');
    }
    public function service()
    {
        return view('health-center.service');
    }
}
