<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DpricController extends Controller
{
    public function index() {
        return view('dpric.index');
    }

    public function welcomeMessage() {
        return view('dpric.welcome-message');
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
        return view('dpric.application-procedures');
    }

    public function joiningInstruction() {
        return view('dpric.joining-instruction');
    }

    public function studentForms() {
        return view('dpric.student-forms');
    }

    public function researchProjects() {
        return view('dpric.research-projects');
    }

    public function researchPolicies() {
        return view('dpric.research-policies');
    }

    public function researchGuidelines() {
        return view('dpric.research-guidelines');
    }

    public function reportResearchProgress() {
        return view('dpric.report-research-progress');
    }

    public function researchOpportunities() {
        return view('dpric.research-opportunities');
    }

    public function researchAwards() {
        return view('dpric.research-awards');
    }

    public function partnerWithUs() {
        return view('dpric.partner-with-us');
    }

    public function journals() {
        return view('dpric.journals');
    }

    public function conferenceProceedings() {
        return view('dpric.conference-proceedings');
    }

    public function innovationsHub() {
        return view('dpric.innovations-hub');
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
        return view('dpric.tcce');
    }

    public function consultancyPolicyAndGuidelines() {
        return view('dpric.consultancy-policy-and-guidelines');
    }

    public function policies() {
        return view('dpric.policies');
    }

    public function regulationsAndGuidelines() {
        return view('dpric.regulations-and-guidelines');
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
