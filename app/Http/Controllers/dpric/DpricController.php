<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricContent;
use Illuminate\Http\Request;

class DpricController extends Controller
{
    public function index() {
        $welcomeMessage = DpricContent::where('page', 'Home')->where('section', 'Welcome to the Heart of Innovation at MWECAU!')->first();
        $about = DpricContent::where('page', 'About Us')->where('section', 'Welcome Message From The Director')->first();
        $mission = DpricContent::where('page', 'About Us')->where('section', 'Our Mission')->first();
        $vision = DpricContent::where('page', 'About Us')->where('section', 'Our Vision')->first();
        $unitMessage = DpricContent::where('page', 'Home')->where('section', 'Explore Our Postgraduate Academic Units')->first();
        $researchMessage = DpricContent::where('page', 'Home')->where('section', 'Discover Our Research Projects')->first();
        $innovationMessage = DpricContent::where('page', 'Home')->where('section', 'Welcome to the Innovations Hub')->first();
        $awardsMessage = DpricContent::where('page', 'Home')->where('section', 'Celebrating Excellence with Research Awards')->first();

        return view('dpric.index', ['welcomMessage' => $welcomeMessage, 'about' => $about, 'mission' => $mission, 'vision' => $vision, 'unitMessade' => $unitMessage, 'researchMessage' => $researchMessage, 'innovationMessage' => $innovationMessage, 'awardsMessage' => $awardsMessage]);
    }

    public function welcomeMessage() {
        $about = DpricContent::where('page', 'About Us')->where('section', 'Welcome Message From The Director')->first();
        $mission = DpricContent::where('page', 'About Us')->where('section', 'Our Mission')->first();
        $vision = DpricContent::where('page', 'About Us')->where('section', 'Our Vision')->first();

        return view('dpric.welcome-message', ['about' => $about, 'mission' => $mission, 'vision' => $vision]);
    }

    public function directorateManagement() {
        return view('dpric.directorate-management');
    }

    public function directorateStaff() {
        return view('dpric.directorate-staff');
    }

    public function directorateProgrammes() {
        return view('dpric.directorate-programmes');
    }

    public function applicationProcedures() {
        $applicationProcedures = DpricContent::where('page', 'Application Procedures')->where('section', 'Application Procedures')->first();

        return view('dpric.application-procedures', ['applicationProcedures' => $applicationProcedures]);
    }

    public function joiningInstruction() {

        $joiningInstruction = DpricContent::where('page', 'Joining Instruction')->where('section', 'Joining Instruction')->first();

        return view('dpric.joining-instruction', ['joiningInstruction' => $joiningInstruction]);
    }

    public function studentForms() {
        return view('dpric.student-forms');
    }

    public function researchProjects() {
        $welcomeMessage = $joiningInstruction = DpricContent::where('page', 'Research Projects')->where('section', 'Engage with Transformative Research Projects')->first();

        return view('dpric.research-projects', ['welcomeMessage' => $welcomeMessage]);
    }

    public function researchPolicies() {
        $researchPolicy = DpricContent::where('page', 'Research Policy')->where('section', 'Research Policy and Strategies')->first();

        return view('dpric.research-policies', ['researchPolicy' => $researchPolicy]);
    }

    public function researchGuidelines() {
        $researchGuidelines = DpricContent::where('page', 'Research Guidelines')->where('section', 'Research Guidelines')->first();

        return view('dpric.research-guidelines', ['researchGuidelines' => $researchGuidelines]);
    }

    public function reportResearchProgress() {
        $researchProgress = DpricContent::where('page', 'Report Research Progress')->where('section', 'Report Research Progress')->first();

        return view('dpric.report-research-progress', ['researchProgress' => $researchProgress]);
    }

    public function researchOpportunities() {
        $welcomeMessage = DpricContent::where('page', 'Research Opportunities')->where('section', 'Seize Research Opportunities')->first();
        $opportunitiesContent = DpricContent::where('page', 'Research Opportunities')->where('section', 'Research Opportunities')->first();

        return view('dpric.research-opportunities', ['welcomeMessage'=> $welcomeMessage,'opportunitiesContent'=> $opportunitiesContent]);
    }

    public function researchAwards() {
        $researchAwards = DpricContent::where( 'page', 'Research Awards')->where('section', 'Honoring Achievement with Research Awards')->first();

        return view('dpric.research-awards', ['researchAwards'=> $researchAwards]);
    }

    public function partnerWithUs() {
        $partnerWithUs = DpricContent::where( 'page', 'Partner with us')->where('section', 'Partner with us')->first();

        return view('dpric.partner-with-us', ['partnerWithUs'=> $partnerWithUs]);
    }

    public function journals() {
        return view('dpric.journals');
    }

    public function conferenceProceedings() {
        return view('dpric.conference-proceedings');
    }

    public function innovationsHub() {
        $welcomeMessage = DpricContent::where( 'page', 'MWECAU Innovations Hub')->where('section', 'Empowering Creativity at the Innovations Hub')->first();
        $innovationProjects = DpricContent::where( 'page', 'MWECAU Innovations Hub')->where('section', 'Bringing Ideas to Life with Innovation Projects')->first();
        $innovationClubs = DpricContent::where( 'page', 'MWECAU Innovations Hub')->where('section', 'Our Innovation Clubs and Organizations')->first();
        $innovationPrinciple = DpricContent::where( 'page', 'MWECAU Innovations Hub')->where('section', 'Principle')->first();

        return view('dpric.innovations-hub', ['welcomeMessage' => $welcomeMessage, 'innovationProjects' => $innovationProjects, 'innovationClubs' => $innovationClubs, 'innovationPrinciple' => $innovationPrinciple]);
    }

    public function innovationsProjects() {
        return view('dpric.innovations-projects');
    }

    public function innovationsProject() {
        return view('dpric.innovations-project');
    }

    public function innovationsClubs() {
        return view('dpric.innovations-clubs');
    }

    public function innovationsClub() {
        return view('dpric.innovations-club');
    }

    public function innovationsClubProjects() {
        return view('dpric.club-projects');
    }

    public function tcce() {
        $techTransfer = DpricContent::where( 'page', 'Consultancy')->where('section', 'Technology Transfer, Consultancy and Continuing Education')->first();

        return view('dpric.tcce', ['techTransfer'=> $techTransfer]);
    }

    public function consultancyPolicyAndGuidelines() {
        $consultancyPolicy = DpricContent::where( 'page', 'Consultancy')->where('section', 'consultancy Policy And Guidelines')->first();

        return view('dpric.consultancy-policy-and-guidelines', ['consultancyPolicy'=> $consultancyPolicy]);
    }

    public function policies() {
        $policies = DpricContent::where( 'page', 'Policies')->where('section', 'Policies')->first();

        return view('dpric.policies', ['policies'=> $policies]);
    }

    public function regulationsAndGuidelines() {
        $regulations = DpricContent::where( 'page', 'Regulations and Guidelines')->where('section', 'Regulations and Guidelines')->first();

        return view('dpric.regulations-and-guidelines', ['regulations' => $regulations]);
    }

    public function news() {
        return view('dpric.news');
    }

    public function singleNews() {
        return view('dpric.single-news');
    }

    public function postgraduateUnit() {
        return view('dpric.postgraduate-unit');
    }

    // public function researchProgrammes() {
    //     return view('dpric.research-programmes');
    // }
}
