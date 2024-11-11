<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\ProjectGallery;
use App\Models\ProjectScholarship;
use App\Models\ProjectTeam;
use App\Models\Research;
use File;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        $totalprojects = Project::all()->count();
        $totalScholarships = ProjectScholarship::all()->count();
        $websiteContents = ProjectContent::all();
        return view('project.admin.dashboard', compact('totalScholarships', 'totalprojects', 'websiteContents'));
    }
    public function projects()
    {
        $projects = Project::all();
        return view('project.admin.projects.projects', compact('projects'));
    }
    public function createProject()
    {
        return view('project.admin.projects.create-project');
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'category' => ['nullable'],
            'description' => ['required'],
            'date' => ['nullable', 'date'],
            'duration' => ['nullable'],
            'location' => ['nullable', 'string'],
            'thumbnail' => ['required', 'image', 'max:2048'],
            'pdf' => ['nullable', 'file', 'mimes:pdf', 'max:2048'],
        ], [
            'name.required' => 'Please enter the project name.',
            'description.required' => 'The project description is required to proceed.',
            'date.date' => 'Please provide a valid date format for the project date.',
            'duration.integer' => 'The duration must be a valid number (in hours, days, etc.).',
            'location.string' => 'The location should be text-based. Please remove any special characters.',
            'pdf.file' => 'The uploaded file should be a valid document.',
            'pdf.mimes' => 'Only PDF files are allowed for upload.',
            'pdf.max' => 'The PDF file size should not exceed 2MB.',
        ]);

        //processing thumbnail
        $thumbnailName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $originalName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $thumbnail->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1000, 9999);
            //new file name
            $thumbnailName = $originalName . '-' . $randomNumber . '.' . $extension;
            $thumbnail->move(public_path('images/projects/images/'), $thumbnailName);
        }


        //processing pdf
        $pdfName = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $originalName = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $pdf->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1000, 9999);
            //new file name
            $pdfName = $originalName . '-' . $randomNumber . '.' . $extension;
            $pdf->move(public_path('documents/projects/projectsDocuments/'), $pdfName);
        }


        $newProject = new Project();

        $newProject->name = $request->name;
        $newProject->category = $request->category;
        $newProject->description = $request->description;
        $newProject->date = $request->date;
        $newProject->duration = $request->duration;
        $newProject->location = $request->location;
        $newProject->pdf = $pdfName;
        $newProject->thumbnail = $thumbnailName;

        try {
            if ($newProject->save()) {
                return redirect()->route('admin.project.projects')
                    ->with('success', 'The project has been successfully created! You can now manage it from the projects dashboard.');
            } else {
                return redirect()->back()
                    ->with('fail', 'An error occurred while creating the project. Please double-check your information and try again, or contact support if the issue persists.');
            }
        } catch (\Exception $e) {
            \Log::error('Exception while saving project data: ' . $e->getMessage()); // Log the error first
            return redirect()->back()
                ->with('fail', 'An error occurred while creating the project. Please double-check your information and try again, or contact support if the issue persists.');
        }

    }
    public function edit($projectName)
    {
        $project = Project::where('name', $projectName)->first();
        return view('project.admin.projects.edit', compact('project'));
    }
    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'category' => ['nullable'],
            'description' => ['required'],
            'date' => ['nullable', 'date'],
            'duration' => ['nullable'],
            'location' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'pdf' => ['nullable', 'file', 'mimes:pdf', 'max:2048'],
        ], [
            'name.required' => 'Please enter the project name.',
            'description.required' => 'The project description is required to proceed.',
            'date.date' => 'Please provide a valid date format for the project date.',
            'duration.integer' => 'The duration must be a valid number (in hours, days, etc.).',
            'location.string' => 'The location should be text-based. Please remove any special characters.',
            'pdf.file' => 'The uploaded file should be a valid document.',
            'pdf.mimes' => 'Only PDF files are allowed for upload.',
            'pdf.max' => 'The PDF file size should not exceed 2MB.',
        ]);

        $project = Project::findOrFail($id);

        //processing thumbnail
        $thumbnailName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $originalName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $thumbnail->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1000, 9999);
            //new file name
            $thumbnailName = $originalName . '-' . $randomNumber . '.' . $extension;
            $thumbnail->move(public_path('images/projects/images/'), $thumbnailName);

            $existingThummbnail = public_path('/images/projects/images/' . $project->thumbnail);
            if (File::exists($existingThummbnail)) {
                File::delete($existingThummbnail);
            }
            $project->thumbnail = $thumbnailName;
        }


        //processing pdf
        $pdfName = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $originalName = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $pdf->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1000, 9999);
            //new file name
            $pdfName = $originalName . '-' . $randomNumber . '.' . $extension;
            $pdf->move(public_path('documents/projects/projectsDocuments/'), $pdfName);

            $existingPdf = public_path('/documents/projects/projectDocuments/' . $project->pdf);
            if (File::exists($existingPdf)) {
                File::delete($existingPdf);
            }
            $project->pdf = $pdfName;
        }

        $project->name = $request->name;
        $project->category = $request->category;
        $project->description = $request->description;
        $project->date = $request->date;
        $project->duration = $request->duration;
        $project->location = $request->location;
        $project->pdf = $pdfName;
        $project->thumbnail = $thumbnailName;

        try {
            if ($project->save()) {
                return redirect()->route('admin.project.projects')
                    ->with('success', 'The project has been successfully updated! You can view and manage the latest changes in the projects dashboard.');
            } else {
                return redirect()->back()
                    ->with('fail', 'An issue occurred while updating the project. Please review your changes and try again.');
            }
        } catch (\Exception $e) {
            \Log::error('Exception while updating project data: ' . $e->getMessage()); // Log the error
            return redirect()->back()
                ->with('fail', 'A system error prevented the project from being updated. Please try again later or contact support if the issue continues.');
        }

    }
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $existingPdfFile = public_path('/documents/projects/projectsDocuments/' . $project->pdf);
        if (File::exists($existingPdfFile)) {
            File::delete($existingPdfFile);
        }

        $existingThumbnail = public_path('/images/projects/images/' . $project->thumbnail);
        if (File::exists($existingThumbnail)) {
            File::delete($existingThumbnail);
        }

        if ($project->delete()) {
            return redirect()->route('admin.project.projects')
                ->with('success', 'The project and all related data have been successfully deleted.');
        } else {
            return redirect()->back()
                ->with('fail', 'An error occurred while trying to delete the project. Please try again or contact support if the issue persists.');
        }
    }
    public function projectDatails($projectName)
    {
        $project = Project::where('name', $projectName)->first();
        $projectGallery = ProjectGallery::where('project_id', $project->id)->get();
        // $projectTeam = ProjectTeam::where('project_id', $project->id)->count();
        return view('project.admin.projects.project-details', compact('project', 'projectGallery'));
    }
    public function removeGalleryImage($id)
    {
        $image = ProjectGallery::findOrFail($id);
        $existingImage = public_path('/images/projects/images/project-gallery/' . $image->image);
        if (File::exists($existingImage)) {
            File::delete($existingImage);
        } else {
            return redirect()->back()->with('error', 'Image not found on the server.');
        }
        if ($image->delete()) {
            return redirect()->back()->with('success', 'Image successfully removed.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the image from the database.');
        }
    }

    public function scholarships()
    {
        return view('project.admin.scholarships');
    }
    public function team()
    {
        $team = ProjectTeam::all();
        return view('project.admin.team', compact('team'));
    }
    public function testmonial()
    {
        $projects = Project::all();
        return view('project.admin.testmonial', compact('projects'));
    }
    public function createGallery(Request $request, $projectName)
    {
        $project = Project::where('name', $projectName)->firstOrFail();
        return view('project.admin.projects.create-project-gallery', compact('project'));
    }
    public function storeProjectGallery(Request $request)
    {
        $request->validate([
            'project_id' => ['integer'],
            'image' => ['required', 'array'],
            'image.*' => ['file', 'max:12048']
        ]);

        //processing uploaded images
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $ImageFileNameExtension = $image->getClientOriginalExtension();
                $random = rand(1, 9999);

                $newImageName = $imageOriginalName . '-' . $random . '-' . $ImageFileNameExtension;

                $image->move(public_path('images/projects/images/project-gallery'), $newImageName);

                $newGallery = new ProjectGallery();
                $newGallery->project_id = $request->project_id;
                $newGallery->image = $newImageName;

                $newGallery->save();
            }
        }
        return redirect()->back()->with('success', "Gallery for {$newGallery->title} has been created successfully");

    }
    public function editPageSection($id)
    {
        $content = Projectcontent::findOrFail($id);
        return view('project.admin.edit-page-sections', compact('content'));
    }
    public function updatePageSection(Request $request, $id)
    {
        $request->validate([
            'section_header' => ['nullable'],
            'section_sub_header' => ['nullable'],
            'section_description' => ['nullable'],
            'image' => ['max:2028'],
        ]);

        $pageSection = ProjectContent::findOrFail($id);

        $newImageName = $pageSection->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $randomNumbers = rand(1, 9999);
            $newImageName = $imageOriginalName . '-' . $randomNumbers . '-' . $imageFileExtension;

            $image->move(public_path('images/projects/images/page-section-images'), $newImageName);

            //deleting existing image
            $existingPageSectionImage = public_path('/images.projects/images/page-section-images/' . $pageSection->image);
            if (File::exists($existingPageSectionImage)) {
                File::delete($existingPageSectionImage);
            }
        }

        $pageSection->section_header = $request->section_header;
        $pageSection->section_sub_header = $request->section_sub_header;
        $pageSection->section_description = $request->section_description;
        $pageSection->image = $newImageName;

        $pageSection->update();

        if ($pageSection->update()) {
            return redirect()->route('admin.project.index')->with('success', 'Updated Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, Failed to update');
        }
    }
}
