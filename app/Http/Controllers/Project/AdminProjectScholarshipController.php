<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectScholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdminProjectScholarshipController extends Controller
{
    public function scholarships()
    {
        $scholarships = ProjectScholarship::all();
        return view('project.admin.scholarships.scholarships', compact('scholarships'));
    }
    public function create()
    {
        return view('project.admin.scholarships.create-scholarships');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'offerd_by' => ['required'],
            'country' => ['required'],
            'application_url' => ['nullable'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'contact_email' => ['nullable'],
            'status' => ['required'],
            'duration' => ['nullable'],
            'attachment' => ['nullable', 'file', 'mimes: pdf', 'max:2048']
        ]);

        //processing scholarships file
        $newFileName = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentOriginalName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentFileExtension = $attachment->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $newFileName = $attachmentOriginalName . '-' . $randomNumber . '-' . $attachmentFileExtension;

            $attachment->move(public_path('documents/projects/projectsDocuments/scholarship-docs'), $newFileName);
        }


        $newScholarship = new ProjectScholarship();

        $newScholarship->name = $request->name;
        $newScholarship->description = $request->description;
        $newScholarship->offerd_by = $request->offerd_by;
        $newScholarship->country = $request->country;
        $newScholarship->application_url = $request->application_url;
        $newScholarship->start_date = $request->start_date;
        $newScholarship->end_date = $request->end_date;
        $newScholarship->contact_email = $request->contact_email;
        $newScholarship->status = $request->status;
        $newScholarship->duration = $request->duration;
        $newScholarship->attachment = $newFileName;

        if ($newScholarship->save()) {
            return redirect()->route('admin.project.scholarship.scholarships')->with('success', 'New scholarship has been added successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed to post scholarship');
        }
    }
    public function edit($scholarshipName)
    {
        $scholarship = ProjectScholarship::where('name', $scholarshipName)->firstOrFail();
        return view('project.admin.scholarships.edit-scholarship', compact('scholarship'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'offerd_by' => ['required'],
            'country' => ['required'],
            'application_url' => ['nullable'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'contact_email' => ['nullable'],
            'status' => ['required'],
            'duration' => ['nullable'],
            'attachment' => ['nullable', 'file', 'mimes: pdf', 'max:2048']
        ]);

        //processing scholarships file
        $scholarship = ProjectScholarship::findOrFail($id);

        $newFileName = $scholarship->attachment;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentOriginalName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentFileExtension = $attachment->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $newFileName = $attachmentOriginalName . '-' . $randomNumber . '-' . $attachmentFileExtension;

            $attachment->move(public_path('documents/projects/projectsDocuments/scholarship-docs'), $newFileName);

            //deleting the existing scholarship file
            $existingPdfFile = public_path('/documents/projects/projectsDocuments/conference-docs/' . $scholarship->pdf);
            if (File::exists($existingPdfFile)) {
                File::delete($existingPdfFile);
            }
        }

        $scholarship->name = $request->name;
        $scholarship->description = $request->description;
        $scholarship->offerd_by = $request->offerd_by;
        $scholarship->country = $request->country;
        $scholarship->application_url = $request->application_url;
        $scholarship->start_date = $request->start_date;
        $scholarship->end_date = $request->end_date;
        $scholarship->contact_email = $request->contact_email;
        $scholarship->status = $request->status;
        $scholarship->duration = $request->duration;
        $scholarship->attachment = $newFileName;

        if ($scholarship->update()) {
            return redirect()->route('admin.project.scholarship.scholarships')->with('success', "{$scholarship->name} updated successfully");
        } else {
            return redirect()->back()->with('fail', 'Failed to post scholarship');
        }
    }
    public function destroy($id)
    {
        $scholarship = ProjectScholarship::findOrFail($id);

        //removing conference related PDF file
        $existingPdfFile = public_path('/documents/projects/projectsDocuments/scholarship-docs/' . $scholarship->pdf);
        if (File::exists($existingPdfFile)) {
            File::delete($existingPdfFile);
        }

        if ($scholarship->delete()) {
            return redirect()->back()->with('success', "{$scholarship->name} has been removed successfully");
        } else {
            return redirect()->back()->with('fail', 'An error occured while removing conference');
        }
    }
}
