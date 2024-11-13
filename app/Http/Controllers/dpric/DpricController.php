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

    // public function researchProgrammes() {
    //     return view('dpric.research-programmes');
    // }
}
