<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthCenterAdminController extends Controller
{
    public function healthCenterDashboard()
    {
        return view('health-center.admin.health-center-dashboard');
    }
}
