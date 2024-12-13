<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\InnovationProject;
use Illuminate\Http\Request;
use Storage;

class InnovationProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($club_name)
    {
        $club = Club::where("name", $club_name)->first();
        $projects = $club->projects->take(3);
        return view("dpric.admin.clubs.projects.index", ['club_name' => $club_name, 'projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($club_name)
    {
        return view('dpric.admin.Clubs.projects.create', ['club_name' => $club_name]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $club_name)
    {
        $project = $request->validate(
            [
                'project_title' => 'required',
                'description' => 'required',
                'category' => 'required',
                'duration' => 'required',
                'primary_image' => 'nullable',
            ]
        );

        // handle file
        if ($request->hasFile('primary_image')) {
            $file = $request->file('primary_image');
            $filepath = 'images/dpric/clubs/projects/';
            $filename = $file->getClientOriginalName() . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($filepath, $filename, 'public');
            $project['primary_image'] = $filename;
        }

        $club = Club::where('name', $club_name)->first();
        $club->projects()->create($project);
        return to_route('admin.projects.index', ['club_name' => $club_name, 'projects' => $club->projects])->with('message', 'Project Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($club_name, InnovationProject $project)
    {
        // relevant gallery
        $project = InnovationProject::where("project_title", $project->project_title)->first();
        $innovationProjectGallery = $project->images;
        $randomImage = $project->images()->inRandomOrder()->first();

        // related projects
        $club = $project->club;
        $relatedProjects = $club->projects->take(5);


        return view('dpric.admin.Clubs.projects.show', ['club_name' => $club_name, 'project' => $project, 'gallery' => $innovationProjectGallery->take(8), 'related_projects' => $relatedProjects, 'randomImg' => $randomImage]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($club_name, InnovationProject $project)
    {
        return view('dpric.admin.clubs.projects.edit', ['club_name' => $club_name, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $club_name, InnovationProject $project)
    {
        $newProject = $request->validate(
            [
                'project_title' => 'required',
                'description' => 'required',
                'category' => 'required',
                'duration' => 'required',
                'primary_image' => ['nullable', 'max:2048'],
            ]
        );


        $filename = $project->primary_image;
        if ($request->hasFile('primary_image')) {
            $file = $request->file('primary_image');
            $filepath = 'images/dpric/clubs/projects/';
            $filename = $file->getClientOriginalName() . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($filepath, $filename, 'public');

            // remove existing photo
            $existingImage = $filepath . $project->primary_image;
            if ($project->primary_image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
        }
    }
    $newProject['primary_image'] = $filename;

    $project->update($newProject);

    return to_route('admin.projects.show', ['club_name' => $club_name, 'project' => $project])->with('message', 'Project updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InnovationProject $project, $club_name)
    {
        $filepath = 'images/dpric/clubs/projects/';
        $existingImage = $filepath . $project->primary_image;
        if ($project->primary_image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $project->delete();

        $club = Club::where("name", $club_name)->first();

        return to_route('admin.projects.index', ['club_name' => $club_name, 'projects' => $club->projects])->with('message', 'Project Deleted successfully');
    }
}
