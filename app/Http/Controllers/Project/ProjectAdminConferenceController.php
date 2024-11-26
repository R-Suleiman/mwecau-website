<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectConferences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectAdminConferenceController extends Controller
{
    public function index()
    {
        $conferences = ProjectConferences::all();
        return view('project.admin.conference.conference', compact('conferences'));
    }
    public function create(Request $request)
    {
        return view('project.admin.conference.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required'],
            'host' => ['nullable'],
            'location' => ['required'],
            'date' => ['required'],
            'pdf' => ['nullable'],

        ]);

        //processing pdf file
        $newFileName = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfOriginalName = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
            $pdfFileExtension = $pdf->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $newFileName = $pdfOriginalName . '-' . $randomNumber . '-' . $pdfFileExtension;

            $pdf->move(public_path('documents/projects/projectsDocuments/conference-docs'), $newFileName);
        }

        $conference = new ProjectConferences();

        $conference->name = $request->name;
        $conference->description = $request->description;
        $conference->host = $request->host;
        $conference->location = $request->location;
        $conference->date = $request->date;
        $conference->pdf = $newFileName;

        if ($conference->save()) {
            return redirect()->route('admin.project.conference.index')->with('success', 'Conference added successfully');
        } else {
            return redirect()->back()->with('fail', 'An error occured when adding  a conference, please  try again if the issue presist pleas report the issue.');
        }
    }
    public function edit($conferenceName)
    {
        $conference = ProjectConferences::where('name', $conferenceName)->first();
        return view('project.admin.conference.edit', compact('conference'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required'],
            'host' => ['nullable'],
            'location' => ['required'],
            'date' => ['required'],
            'pdf' => ['nullable'],

        ]);

        $conference = ProjectConferences::findOrFail($id);
        //processing pdf file
        $newFileName = $conference->pdf;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfOriginalName = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
            $pdfFileExtension = $pdf->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $newFileName = $pdfOriginalName . '-' . $randomNumber . '-' . $pdfFileExtension;

            $pdf->move(public_path('documents/projects/projectsDocuments/conference-docs'), $newFileName);

            //deleting the existing conference file
            $existingPdfFile = public_path('/documents/projects/projectsDocuments/conference-docs/' . $conference->pdf);
            if (File::exists($existingPdfFile)) {
                File::delete($existingPdfFile);
            }
        }

        $conference->name = $request->name;
        $conference->description = $request->description;
        $conference->host = $request->host;
        $conference->location = $request->location;
        $conference->date = $request->date;
        $conference->pdf = $newFileName;

        if ($conference->update()) {
            return redirect()->route('admin.project.conference.index')->with('success', "{$conference->name}  Updated successfully");
        } else {
            return redirect()->back()->with('fail', 'An error occured while updating, please  try again if the issue presist pleas report the issue.');
        }
    }

    public function destroy($id)
    {
        $conference = ProjectConferences::findOrFail($id);

        //removing conference related PDF file
        $existingPdfFile = public_path('/documents/projects/projectsDocuments/conference-docs/' . $conference->pdf);
        if (File::exists($existingPdfFile)) {
            File::delete($existingPdfFile);
        }

        if ($conference->delete()) {
            return redirect()->back()->with('success', "{$conference->name} has been removed successfully");
        } else {
            return redirect()->back()->with('fail', 'An error occured while removing conference');
        }
    }
}
