<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthServiceController extends Controller
{

    public function index() {
        return view('health-center.index');
    }
}
