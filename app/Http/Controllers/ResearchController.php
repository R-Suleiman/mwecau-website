<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    //for web display
    public function research()
    {
        $projects = Research::where('category', 'project')->get();
        return view('research.projects', compact('projects'));
    }

    public function researchDetails($header)
    {
        $research = Research::where('header', $header)->get();
        return view('research.research-details', compact('research'));
    }

    public function outreach()
    {
        $outreach = Research::orderBy('created_at', 'desc')->where('category', 'outreach')->get();
        return view('research.outreach', compact('outreach'));
    }

    public function outreachDetails($header)
    {
        $outreach = Research::where('header', $header)->get();
        return view('research.outreach-details', compact('outreach'));
    }

    //admin display
    public function listOfResearch()
    {
        $research = Research::orderByDesc('created_at')->get();
        return view('admin.research.research-list', compact('research'));
    }
    public function resourceDetails($header)
    {
        $details = Research::where('header', $header)->first();
        return view('admin.research.resource-details', compact('details'));
    }
    public function postResearchView()
    {
        return view('admin.research.post-project');
    }
    public function postResearch(Request $request)
    {
        $request->validate([
            'header' => ['required', 'max:255'],
            'category' => ['required'],
            'description' => ['required']
        ], [
            'header' => 'Kindly fill in this field.',
            'category' => 'Kindly select the category of what you are about to post',
            'description' => 'The Description field can\'t be empty',
        ]);

        $newResearch = new Research();

        $newResearch->header = $request->header;
        $newResearch->category = $request->category;
        $newResearch->description = $request->description;

        $newResearch->save();

        return redirect()->back()->with('message', 'New resource have been posted successfully.');
    }
    public function editresearchView($id)
    {
        $editResearch = Research::findOrFail($id);
        return view('admin.research.edit-project', compact('editResearch'));
    }
    public function updateResearch(Request $request, $id)
    {
        $request->validate([
            'header' => ['required', 'max:255'],
            'category' => ['required'],
            'description' => ['required']
        ]);

        $updatedResearch = Research::findOrFail($id);

        $updatedResearch->header = $request->header;
        $updatedResearch->category = $request->category;
        $updatedResearch->description = $request->description;

        $updatedResearch->update();

        return redirect()->back()->with('message', 'Successfully Updated');
    }
    public function destroyResearch($id)
    {
        $destroyResearch = Research::findOrFail($id);

        $destroyResearch->delete();

        return redirect()->back()->with('message', 'Successfully deleted');
    }
}
