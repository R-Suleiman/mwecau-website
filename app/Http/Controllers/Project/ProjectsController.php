<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectConferences;
use App\Models\ProjectContent;
use App\Models\ProjectPartner;
use App\Models\ProjectScholarship;
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
        $aboutVlir = ProjectContent::where('page_section', 'about-vlir')->first();
        $teamContents = ProjectContent::where('page_section', 'team_section')->first();
        $testimonialContents = ProjectContent::where('page_section', 'testimonial_section')->first();
        $projects = Project::with('gallery')->get();
        $conferences = ProjectConferences::all();
        $teamMembers = ProjectTeam::all();
        $testimonials = ProjectTestimonial::all();
        $projectPartners = ProjectPartner::all();
        $homeslider = ProjectContent::where('page_section', 'home_slider')->get();
        return view('project.index', compact(
            'projects',
            'conferences',
            'testimonials',
            'teamMembers',
            'aboutVlir',
            'teamContents',
            'testimonialContents',
            'projectPartners',
            'homeslider'
        ));
    }


    public function projects()
    {
        $projects = project::all();
        return view('project.projects', compact('projects'));
    }

    public function project($projectName)
    {
        $singleProject = Project::with(['gallery', 'projectTeam'])->where('name', $projectName)->firstOrFail();
        $relatedProjects = Project::where('category',  $singleProject->category)->get();
        return view('project.project', compact('singleProject', 'relatedProjects'));
    }

    public function researchers()
    {
        $team = ProjectTeam::all();
        return view('project.researchers', compact('team'));
    }
    public function projectTeamMembers()
    {
        $teamContents = ProjectContent::where('page_section', 'team_section')->first();
        $projectTeamMembers = ProjectTeam::all();
        return view('project.project-team-members', compact('projectTeamMembers', 'teamContents'));
    }
    public function contacts()
    {
        return view('project.contacts');
    }

    public function scholarships()
    {
        $projectScholarships = ProjectScholarship::all();
        return view('project.scholarships', compact('projectScholarships'));
    }
    public function conferences()
    {
        $conferences = ProjectConferences::all();
        return view('project.conferences', compact('conferences'));
    }
    public function conferenceDetails($conferenceName)
    {

        $conference = ProjectConferences::where('name', $conferenceName)->firstOrFail();
        return view('project.conference-details', compact('conference'));
    }

    public function livingLab()
    {
        return view('project.living-lab');
    }
    public function conferencePdfPreview($attachment)
    {
        $pdfFile = ProjectConferences::where('pdf', $attachment)->first();
        if (!$pdfFile) {
            return redirect()->back()->with('fail', 'The desired file does not exist in our records.');
        }
        $pdfFilePath = public_path('documents/projects/projectsDocuments/conference-docs/' . $pdfFile->pdf);

        if (!file_exists($pdfFilePath)) {
            return redirect()->back()->with('fail', 'The desired file does not exist on our servers.');
        }
        return response()->file($pdfFilePath);
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
