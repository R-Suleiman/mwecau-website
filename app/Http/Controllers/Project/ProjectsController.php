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
use App\Models\ProjectScholarshipBeneficiary;
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
        $topLeaders = ProjectTeam::where('role', 'top')->get();
        $aboutVlir = ProjectContent::where('page_section', 'about-vlir')->first();
        $teamContents = ProjectContent::where('page_section', 'team_section')->first();
        $testimonialContents = ProjectContent::where('page_section', 'testimonial_section')->first();
        $projects = Project::with('gallery')->get();
        $conferences = ProjectConferences::orderBy('created_at', 'desc')->get();
        $teamMembers = ProjectTeam::all();
        $testimonials = ProjectTestimonial::all();
        $projectPartners = ProjectPartner::all();
        $homeslider = ProjectContent::where('page_section', 'home_slider')->get();
        return view('project.index', compact(
            'projects',
            'conferences',
            'testimonials',
            'topLeaders',
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
        $beneficiaryPhoto = '/storage/images/projects/images/scholarships/beneficiaries-profile-photos/';
        $storagePath = '/storage/images/projects/images/project-thumbnail/';
        $singleProject = Project::with(['gallery', 'projectTeam'])->where('name', $projectName)->firstOrFail();
        $relatedProjects = Project::where('category', $singleProject->category)->get();
        return view('project.project', compact('singleProject', 'relatedProjects', 'storagePath', 'beneficiaryPhoto'));
    }

    public function researchers()
    {
        $team = ProjectTeam::all();
        return view('project.researchers', compact('team'));
    }
    public function projectTeamMemberDetails($name)
    {
        $storagePath = 'storage/images/projects/images/team-member-profile-pictures/';
        $teamMember = ProjectTeam::where('name', $name)->firstOrFail();
        return view('project.team-member-profile-description', compact('teamMember', 'storagePath'));
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
        $storagePath = 'storage/images/projects/images/scholarships/beneficiaries-profile-photos/';
        $scholarshipBeneficiaries = ProjectScholarshipBeneficiary::all();
        $projectScholarships = ProjectScholarship::all();
        return view('project.scholarships', compact('projectScholarships', 'scholarshipBeneficiaries', 'storagePath'));
    }
    public function conferences()
    {
        $conferences = ProjectConferences::orderBy('created_at', 'desc')->get();
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

}
