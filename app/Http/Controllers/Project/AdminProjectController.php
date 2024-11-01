<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTeam;
use App\Models\Research;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        return view('project.admin.dashboard');
    }
    public function projects()
    {
        $projects = Project::all();
        return view('project.admin.projects', compact('projects'));
    }
    public function scholarships()
    {
        return view('project.admin.scholarships');
    }
    public function team()
    {
        $team = ProjectTeam::all();
        return view('project.admin.team', compact('team'));
    }
    public function testmonial()
    {
        $projects = Project::all();
        return view('project.admin.testmonial', compact('projects'));
    }
}
