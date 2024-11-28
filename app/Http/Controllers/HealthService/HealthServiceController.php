<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterDepartment;
use App\Models\HealthCenterDoctor;
use App\Models\HealthCenterNewsEvent;
use App\Models\HealthCenterService;
use App\Models\HealthCenterTestimonial;
use Illuminate\Http\Request;

class HealthServiceController extends Controller
{

    public function index()
    {
        $services = HealthCenterService::all();
        $departments = HealthCenterDepartment::all();
        $doctors = HealthCenterDoctor::all();
        $testimonials = HealthCenterTestimonial::all();
        $newsEvents = HealthCenterNewsEvent::all();
        return view(
            'health-center.index',
            compact(
                'departments',
                'services',
                'doctors',
                'testimonials',
                'newsEvents',
            )
        );
    }

    public function aboutUs()
    {
        $departments = HealthCenterDepartment::all();
        $services = HealthCenterService::all();
        $team = HealthCenterDoctor::all();
        $testimonials = HealthCenterTestimonial::all();
        return view('health-center.about-us', compact('departments', 'team', 'services', 'testimonials'));
    }
    public function department()
    {
        return view('health-center.department');
    }
    public function service($name)
    {
        $service = HealthCenterService::where('name', $name);
        return view('health-center.service', compact('service'));
    }

    public function services()
    {
        $services = HealthCenterService::all();

        return view('health-center.services', compact('services'));
    }

    public function events()
    {
        $newsEvents = HealthCenterNewsEvent::all();
        return view('health-center.events', compact('newsEvents'));
    }

    public function viewEvent($title)
    {
        $aboutNewsEvent = HealthCenterNewsEvent::where('title', $title)->firstOrFail();
        $relatedNewsEvent = HealthCenterNewsEvent::where('title', '!=', $title)->get();
        return view('health-center.view-event', compact('aboutNewsEvent', 'relatedNewsEvent'));

    }
}
