<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectScholarship;
use App\Models\ProjectScholarshipBeneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
use Str;


class AdminProjectScholarshipController extends Controller
{
    public function scholarships()
    {
        $scholarships = ProjectScholarship::all();
        return view('project.admin.scholarships.scholarships', compact('scholarships'));
    }
    public function create()
    {
        $projects = Project::all();
        return view('project.admin.scholarships.create-scholarships', compact('projects'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'offerd_by' => ['required'],
            'country' => ['required'],
            'application_url' => ['nullable'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'contact_email' => ['nullable'],
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
            'description' => ['nullable'],
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

    public function createScholarshipBeneficiary($name)
    {
        $scholarship = ProjectScholarship::where('name', $name)->firstOrFail();
        return view('project.admin.projects.add-project-scholarship-beneficiary', compact('scholarship'));
    }

    public function storeScholarshipBeneficiary(Request $request)
    {
        //validation
        $request->validate([
            'beneficiary_name' => ['required'],
            'beneficiary_research_title' => ['nullable'],
            'beneficiary_photo' => ['nullable', 'mimes:png,jpg', 'max:600']
        ]);

        $beneficiary = new ProjectScholarshipBeneficiary();

        //beneficiary profile photo processing

        if ($request->hasFile('beneficiary_photo')) {
            $profilePhoto = $request->file('beneficiary_photo');
            $profilePhotoOriginalName = pathinfo($profilePhoto->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePhotoFileExtension = $profilePhoto->getClientOriginalExtension();
            $UniqueNumber = substr(uniqid(), 0, 0);

            $profilePhotoName = $profilePhotoOriginalName . '-' . $UniqueNumber . '.' . $profilePhotoFileExtension;
            $storagePath = 'images/projects/images/scholarships/beneficiaries-profile-photos';

            try {
                $profilePhoto->storeAs($storagePath, $profilePhotoName, 'public');
                $beneficiary->profile_photo = $profilePhotoName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Beneficiary profile photo failed to upload');
            }
        }

        $beneficiary->project_id = $request->input('project_id');
        $beneficiary->scholarship_id = $request->input('scholarship_id');
        $beneficiary->beneficiary_name = $request->beneficiary_name;
        $beneficiary->beneficiary_research_title = $request->beneficiary_research_title;
        $beneficiary->beneficiary_photo = $request->beneficiary_photo;
        if ($beneficiary->save()) {
            return redirect()->route('admin.project.scholarship.scholarships')->with('success', 'New Scholarship Beneficiary has beeb added successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, Failed to add a beneficiary please try again');
        }
    }
    //adding scholarship to project
    public function scholarshipToProject($name)
    {
        $scholarship = ProjectScholarship::where('name', $name)->firstOrFail();
        $projects = Project::all();
        return view('project.admin.scholarships.add-scholarship-to-project', compact('scholarship', 'projects'));
    }
    public function storeScholarshipToProject(Request $request, $id)
    {
        // Validate incoming data to ensure project_id exists
        $request->validate([
            'project_id' => 'required|exists:projects,id',
        ]);

        // Create a new instance and assign only the project_id
        $projectScholarship = ProjectScholarship::findOrFail($id);
        $projectScholarship->project_id = $request->input('project_id');

        // Save the instance
        if ($projectScholarship->save()) {
            return redirect()->route('admin.project.scholarship.scholarships')->with('success', 'Successfully added');
        } else {
            return redirect()->back()->with('fail', 'Failed to add scholarship to project');
        }
    }

    public function destroyBeneficiary($id)
    {
        $beneficiary = ProjectScholarshipBeneficiary::findOrFail($id);

        //deleting beneficiary photo
        $storagePath = 'images/projects/images/scholarships/beneficiaries-profile-photos/';
        $existingPhoto = $storagePath . $beneficiary->profile_photo;

        if ($beneficiary->beneficiary_photo && Storage::disk('public')->exists($existingPhoto)) {
            Storage::disk('public')->delete($existingPhoto);
        }

        $beneficiary->delete();

        return redirect()->route('admin.project.scholarship.scholarships')->with('success', 'Beneficiary Successfully removed');
    }
}
