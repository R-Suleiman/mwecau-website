<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectTeam;
use App\Models\Research;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('gallery')->get();
        return view('project.index', compact('projects'));
    }


    public function projects()
    {
        $projects = project::all();
        return view('project.projects', compact('projects'));
    }

    public function project($id)
    {
        $singleProject = Project::findOrFail($id)->load(['gallery', 'projectTeam']);
        // $projectDetails = Research::findOrFail($id);
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
