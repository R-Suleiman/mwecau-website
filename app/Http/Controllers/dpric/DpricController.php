<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricContent;
use App\Models\DpricNews;
use App\Models\DpricUnits;
use App\Models\DpricAwards;
use App\Models\DpricDocuments;
use App\Models\InnovationProject;
use App\Models\Club;
use App\Models\Project;
use App\Models\Document;
use Illuminate\Http\Request;

class DpricController extends Controller
{
    public function index()
    {
        // content
        $welcomeMessage = DpricContent::where('page', 'Home')->where('section', 'Welcome to the Heart of Innovation at MWECAU!')->first();
        $about = DpricContent::where('page', 'About Us')->where('section', 'Welcome Message From The Director')->first();
        $mission = DpricContent::where('page', 'About Us')->where('section', 'Our Mission')->first();
        $vision = DpricContent::where('page', 'About Us')->where('section', 'Our Vision')->first();
        $unitMessage = DpricContent::where('page', 'Home')->where('section', 'Explore Our Postgraduate Academic Units')->first();
        $researchMessage = DpricContent::where('page', 'Home')->where('section', 'Discover Our Research Projects')->first();
        $innovationMessage = DpricContent::where('page', 'Home')->where('section', 'Welcome to the Innovations Hub')->first();
        $awardsMessage = DpricContent::where('page', 'Home')->where('section', 'Celebrating Excellence with Research Awards')->first();

        // data
        $allNews = DpricNews::query()->orderBy('created_at', 'desc')->limit(3)->get();
        $units = DpricUnits::query()->orderBy('created_at', 'desc')->get();
        $awards = DpricAwards::query()->orderBy('created_at', 'desc')->limit(3)->get();
        $projects = Project::query()->orderBy('created_at', 'desc')->limit(5)->get();

        return view('dpric.index', ['welcomMessage' => $welcomeMessage, 'about' => $about, 'mission' => $mission, 'vision' => $vision, 'unitMessade' => $unitMessage, 'researchMessage' => $researchMessage, 'innovationMessage' => $innovationMessage, 'awardsMessage' => $awardsMessage, 'allNews' => $allNews, 'units' => $units, 'awards' => $awards, 'projects' => $projects]);
    }

    public function welcomeMessage()
    {
        $about = DpricContent::where('page', 'About Us')->where('section', 'Welcome Message From The Director')->first();
        $mission = DpricContent::where('page', 'About Us')->where('section', 'Our Mission')->first();
        $vision = DpricContent::where('page', 'About Us')->where('section', 'Our Vision')->first();

        return view('dpric.welcome-message', ['about' => $about, 'mission' => $mission, 'vision' => $vision]);
    }

    public function directorateManagement()
    {
        return view('dpric.directorate-management');
    }

    public function directorateStaff()
    {
        return view('dpric.directorate-staff');
    }

    public function directorateProgrammes()
    {
        return view('dpric.directorate-programmes');
    }

    public function applicationProcedures()
    {
        $applicationProcedures = DpricContent::where('page', 'Application Procedures')->where('section', 'Application Procedures')->first();

        return view('dpric.application-procedures', ['applicationProcedures' => $applicationProcedures]);
    }

    public function joiningInstruction()
    {

        $joiningInstruction = DpricContent::where('page', 'Joining Instruction')->where('section', 'Joining Instruction')->first();

        return view('dpric.joining-instruction', ['joiningInstruction' => $joiningInstruction]);
    }

    public function studentForms()
    {
        $documents = DpricDocuments::query()->where('type', 'Student Form')->orderBy('created_at', 'desc')->get();

        return view('dpric.student-forms', ['studentForms' => $documents]);
    }

    public function researchProjects()
    {
        $welcomeMessage = DpricContent::where('page', 'Research Projects')->where('section', 'Engage with Transformative Research Projects')->first();

        $projects = Project::query()->orderBy('created_at', 'desc')->get();

        return view('dpric.research-projects', ['welcomeMessage' => $welcomeMessage, 'projects' => $projects]);
    }

    public function researchPolicies()
    {
        $researchPolicy = DpricContent::where('page', 'Research Policy')->where('section', 'Research Policy and Strategies')->first();

        return view('dpric.research-policies', ['researchPolicy' => $researchPolicy]);
    }

    public function researchGuidelines()
    {
        $researchGuidelines = DpricContent::where('page', 'Research Guidelines')->where('section', 'Research Guidelines')->first();

        return view('dpric.research-guidelines', ['researchGuidelines' => $researchGuidelines]);
    }

    public function reportResearchProgress()
    {
        $researchProgress = DpricContent::where('page', 'Report Research Progress')->where('section', 'Report Research Progress')->first();

        return view('dpric.report-research-progress', ['researchProgress' => $researchProgress]);
    }

    public function researchOpportunities()
    {
        $welcomeMessage = DpricContent::where('page', 'Research Opportunities')->where('section', 'Seize Research Opportunities')->first();
        $opportunitiesContent = DpricContent::where('page', 'Research Opportunities')->where('section', 'Research Opportunities')->first();

        return view('dpric.research-opportunities', ['welcomeMessage' => $welcomeMessage, 'opportunitiesContent' => $opportunitiesContent]);
    }

    public function researchAwards()
    {
        $researchAwards = DpricContent::where('page', 'Research Awards')->where('section', 'Honoring Achievement with Research Awards')->first();
        $awards = DpricAwards::query()->orderBy('created_at', 'desc')->get();

        return view('dpric.research-awards', ['researchAwards' => $researchAwards, 'awards' => $awards]);
    }

    public function partnerWithUs()
    {
        $partnerWithUs = DpricContent::where('page', 'Partner with us')->where('section', 'Partner with us')->first();

        return view('dpric.partner-with-us', ['partnerWithUs' => $partnerWithUs]);
    }

    public function journals()
    {
        $journals = Document::where('type', 'journal')->get();
        return view('dpric.journals', ['journals' => $journals]);
    }

    public function conferenceProceedings()
    {
        return view('dpric.conference-proceedings');
    }

    public function innovationsHub()
    {
        // contents
        $welcomeMessage = DpricContent::where('page', 'MWECAU Innovations Hub')->where('section', 'Empowering Creativity at the Innovations Hub')->first();
        $innovationProjects = DpricContent::where('page', 'MWECAU Innovations Hub')->where('section', 'Bringing Ideas to Life with Innovation Projects')->first();
        $innovationClubs = DpricContent::where('page', 'MWECAU Innovations Hub')->where('section', 'Our Innovation Clubs and Organizations')->first();
        $innovationPrinciple = DpricContent::where('page', 'MWECAU Innovations Hub')->where('section', 'Principle')->first();

        // data
        $projects = InnovationProject::limit(3)->orderBy('created_at','desc')->get();
        $clubs = Club::limit(4)->get();

        return view('dpric.innovations-hub', ['welcomeMessage' => $welcomeMessage, 'innovationProjects' => $innovationProjects, 'innovationClubs' => $innovationClubs, 'innovationPrinciple' => $innovationPrinciple, 'projects' => $projects, 'clubs' => $clubs]);
    }

    public function innovationsProjects()
    {
        $projects = InnovationProject::orderBy('created_at','desc')->get();

        return view('dpric.innovations-projects', ['projects' => $projects]);
    }

    public function innovationsProject($project_title)
    {
        $project = InnovationProject::where('project_title', $project_title)->first();
        $randomImg = $project->images()->inRandomOrder()->first();
        $gallery = $project->images;

        $relatedProjects = $project->club->projects->take(5);

        return view('dpric.innovations-project', ['project' => $project, 'randomImg' => $randomImg, 'gallery' => $gallery, 'relatedProjects' => $relatedProjects]);
    }

    public function innovationsClubs()
    {
        $clubs = Club::all();
        return view('dpric.innovations-clubs', ['clubs' => $clubs]);
    }

    public function innovationsClub($club_name)
    {
        $club = Club::where('name', $club_name)->first();
        $randomImg = $club->images()->inRandomOrder()->first();
        $clubActivities = $club->activities->take(4);
        $clubLeaders = $club->leaders;
        $projects = $club->projects->take(3);
        $gallery = $club->images->take(8);

        return view('dpric.innovations-club', ['club' => $club, 'randomImg' => $randomImg, 'activities' => $clubActivities, 'leaders' => $clubLeaders, 'projects' => $projects, 'gallery' => $gallery]);
    }

    public function innovationsClubProjects($club_name)
    {
        $club = Club::where('name', $club_name)->first();
        $projects = $club->projects;

        return view('dpric.club-projects', ['projects' => $projects, 'club_name' => $club_name]);
    }

    public function tcce()
    {
        $techTransfer = DpricContent::where('page', 'Consultancy')->where('section', 'Technology Transfer, Consultancy and Continuing Education')->first();

        return view('dpric.tcce', ['techTransfer' => $techTransfer]);
    }

    public function consultancyPolicyAndGuidelines()
    {
        $consultancyPolicy = DpricContent::where('page', 'Consultancy')->where('section', 'consultancy Policy And Guidelines')->first();

        $documents = DpricDocuments::query()->where('type', 'Consultancy Policy & Guidelines')->orderBy('created_at', 'desc')->get();

        return view('dpric.consultancy-policy-and-guidelines', ['consultancyPolicy' => $consultancyPolicy, 'documents' => $documents]);
    }

    public function policies()
    {
        $policies = DpricContent::where('page', 'Policies')->where('section', 'Policies')->first();

        $documents = DpricDocuments::query()->where('type', 'Policy')->orderBy('created_at', 'desc')->get();

        return view('dpric.policies', ['policies' => $policies, 'documents' => $documents]);
    }

    public function regulationsAndGuidelines()
    {
        $regulations = DpricContent::where('page', 'Regulations and Guidelines')->where('section', 'Regulations and Guidelines')->first();

        $documents = DpricDocuments::query()->where('type', 'Regulations and Guidelines')->orderBy('created_at', 'desc')->get();

        return view('dpric.regulations-and-guidelines', ['regulations' => $regulations, 'documents' => $documents]);
    }

    public function news()
    {
        $allNews = DpricNews::query()->orderBy('created_at', 'desc')->get();

        return view('dpric.news', ['allNews' => $allNews]);
    }

    public function singleNews($news_title)
    {
        $news = DpricNews::where('title', $news_title)->first();
        return view('dpric.single-news', ['news' => $news]);
    }

    public function postgraduateUnits()
    {
        $units = DpricUnits::query()->orderBy('created_at', 'desc')->get();

        return view('dpric.postgraduate-units', ['units' => $units]);
    }

    public function postgraduateUnit($unit_title)
    {
        $unit = DpricUnits::where('title', $unit_title)->first();

        return view('dpric.postgraduate-unit', ['unit' => $unit]);
    }

    public function viewDocument($document)
    {
        $document = DpricDocuments::where('name', $document)->first();

        $filePath = storage_path('app/public/documents/dpric/documents/' . $document->path);

        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        return response()->file($filePath);
    }

    // public function researchProgrammes() {
    //     return view('dpric.research-programmes');
    // }
}
