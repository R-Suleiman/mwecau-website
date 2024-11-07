<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectConferences;
use App\Models\ProjectTeam;
use App\Models\ProjectTestimonial;
use App\Models\Research;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('gallery')->get();
        $conferences = ProjectConferences::all();
        $testimonials = ProjectTestimonial::all();
        return view('project.index', compact('projects', 'conferences', 'testimonials'));
    }


    public function projects()
    {
        $projects = project::all();
        return view('project.projects', compact('projects'));
    }

    public function project($projectName)
    {
        // Retrieve the project by name, or fail if it doesn't exist
        $singleProject = Project::where('name', $projectName)->firstOrFail();

        // Load the relationships after retrieving the single project
        $singleProject->load(['gallery', 'projectTeam']);
        return view('project.project', compact('singleProject'));
    }


    public function researchers()
    {
        $team = ProjectTeam::all();
        return view('project.researchers', compact('team'));
    }

    public function contacts()
    {
        return view('project.contacts');
    }

    public function scholarships()
    {
        return view('project.scholarships');
    }
    public function conferences()
    {
        $conferences = ProjectConferences::all();
        return view('project.conferences', compact('conferences'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
