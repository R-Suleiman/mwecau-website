<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\ProjectGallery;
use App\Models\ProjectPartner;
use App\Models\ProjectScholarship;
use App\Models\ProjectTeam;
use App\Models\Research;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'project_objectives' => ['nullable'],
            'project_outputs' => ['nullable'],
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
            $randomNumber = rand(1, 9999);
            //new file name
            $thumbnailName = $originalName . '-' . $randomNumber . '.' . $extension;
            $storagePath = 'images/projects/images/project-thumbnail';
            try {
                $thumbnail->storeAs($storagePath, $thumbnailName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Project thumbnail failed to upload, Please try again.');
            }
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
            $storagePath = 'documents/projects';
            try {
                $pdf->storeAs($storagePath, $pdfName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Project attachment failed to upload');
            }
        }

        $newProject = new Project();

        $newProject->name = $request->name;
        $newProject->category = $request->category;
        $newProject->description = $request->description;
        $newProject->project_objectives = $request->project_objectives;
        $newProject->project_outputs = $request->project_outputs;
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
            'project_objectives' => ['nullable'],
            'project_outputs' => ['nullable'],
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
        $thumbnailName = $project->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $originalName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $thumbnail->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1, 9999);
            //new file name
            $thumbnailName = $originalName . '-' . $randomNumber . '.' . $extension;

            $storagePath = 'images/projects/images/project-thumbnail';

            $existingThumbnail = $storagePath . '/' . $project->thumbnail;
            try {
                if ($project->thumbnail && Storage::disk('public')->exists($existingThumbnail)) {
                    Storage::disk('public')->delete($existingThumbnail);
                }
                $thumbnail->storeAs($storagePath, $thumbnailName, 'public');//store the image
                $project->thumbnail = $thumbnailName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Project thumbnail failed to upload, Please try again.');
            }
        }

        //processing pdf
        $pdfName = $project->pdf;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $originalName = pathinfo($pdf->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $pdf->getClientOriginalExtension();
            // Generate a random 4-digit number
            $randomNumber = rand(1000, 9999);
            //new file name
            $pdfName = $originalName . '-' . $randomNumber . '.' . $extension;
            $storagePath = 'documents/projects';
            $existingAttachment = $storagePath . '/' . $project->pdf;

            try {
                if ($project->pdf && Storage::disk('public')->exists($existingAttachment)) {
                    Storage::disk('public')->delete($existingAttachment);
                }
                $pdf->storeAs($storagePath, $pdfName, 'public');
                $project->pdf = $pdfName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Project attachment failed to upload.');
            }
        }

        $project->name = $request->name;
        $project->category = $request->category;
        $project->description = $request->description;
        $project->project_objectives = $request->project_objectives;
        $project->project_outputs = $request->project_outputs;
        $project->date = $request->date;
        $project->duration = $request->duration;
        $project->location = $request->location;
        $project->pdf = $pdfName;
        $project->thumbnail = $thumbnailName;

        try {
            if ($project->update()) {
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
        //find project by an id
        $project = Project::findOrFail($id);

        // deleting existing attachment if any
        $existingPdfFile = 'documents/projects' . $project->pdf;
        if ($project->pdf && Storage::disk('public')->exists($existingPdfFile)) {
            Storage::disk('public')->delete($existingPdfFile);
        }

        // deleting existing thumbnail if any
        $existingThumbnail = 'images/projects/images/project-thumbnail' . $project->thumbnail;
        if ($project->thumbnail && Storage::disk('public')->exists($existingThumbnail)) {
            Storage::disk('public')->delete($existingThumbnail);
        }

        try {
            $project->delete();
            return redirect()->route('admin.project.projects')->with('success', 'The project and all related data have been removed successfully.');

        } catch (\Exception $e) {
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
        // find a project by an id
        $image = ProjectGallery::findOrFail($id);
        $storagePath = 'images/projects/images/project-gallery/';
        $existingImage = $storagePath . $image->image;
        if ($image->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
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

    //contents Management
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
                $uniqueId = uniqid(1, 9999);

                $newImageName = $imageOriginalName . '-' . $uniqueId . '.' . $ImageFileNameExtension;
                $storagePath = 'images/projects/images/project-gallery';

                try {
                    $image->storeAs($storagePath, $newImageName, 'public');
                } catch (\Exception $e) {
                    return redirect()->back()->with('fail', 'Something went wrong');
                }

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
            $existingPageSectionImage = public_path('/images/projects/images/page-section-images/' . $pageSection->image);
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

    //paroject partners
    public function partners()
    {
        $partners = ProjectPartner::all();
        return view('project.admin.partners.new-project-partners', compact('partners'));
    }
    public function storeProjectPartner(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'link' => ['required', 'url'],
            'partner_logo' => ['required', 'max:2048']
        ], [
            'name.required' => 'Please provide the partner name.',
            'link.required' => 'Please provide the partner link.',
            'link.url' => 'Please provide a valid URL for the partner link.',
            'partner_logo.required' => 'Please upload a logo for the partner.',
            'partner_logo.max' => 'The logo image size should not exceed 2MB.'
        ]);

        if ($request->hasFile('partner_logo')) {
            $logo = $request->file('partner_logo');
            $logoOriginalName = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
            $logoExtension = $logo->getClientOriginalExtension();
            $randomNumber = rand(1, 9999);

            // Ensure the filename uses dot before extension
            $newLogoName = $logoOriginalName . '-' . $randomNumber . '.' . $logoExtension;

            $storagePath = 'images/projects/images/partners-logo/';

            try {
                $logo->storeAs($storagePath, $newLogoName, 'public');

                $newPartner = new ProjectPartner();
                $newPartner->name = $request->name;
                $newPartner->link = $request->link;
                $newPartner->partner_logo = $newLogoName;

                $newPartner->save();

                return redirect()->back()->with('success', 'The project partner has been successfully added to the list!.');
            } catch (\Exception $e) {
                // \Log::error('Error storing project partner logo: ' . $e->getMessage());

                return redirect()->back()->with('fail', 'Oops! There was an issue adding the project partner. Please try again, and if the problem persists, don’t hesitate to reach out to support.');
            }
        } else {
            return redirect()->back()->with('fail', 'Logo file is missing.');
        }
    }

    public function editPartner($partnerName)
    {
        $partner = ProjectPartner::where('name', $partnerName)->firstOrFail();
        return view('project.admin.partners.edit-partner', compact('partner'));
    }
    public function updateProjectPartner(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'link' => ['required'],
            'partner_logo' => ['max:2048']
        ]);
        $partner = ProjectPartner::findOrFail($id);

        $newLogoName = $partner->partner_logo;

        if ($request->hasFile('partner_logo')) {
            $logo = $request->file('partner_logo');
            $logoOriginalName = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
            $logoExtension = $logo->getClientOriginalExtension();
            $randomNumber = rand(1, 9999);

            $newLogoName = $logoOriginalName . '-' . $randomNumber . '.' . $logoExtension;

            $storagePath = 'images/projects/images/partners-logo/';

            try {
                $filePath = $logo->storeAs($storagePath, $newLogoName, 'public');

                // Delete old logo file if it exists
                $existingLogoPath = $storagePath . $partner->partner_logo;
                if (Storage::disk('public')->exists($existingLogoPath)) {
                    Storage::disk('public')->delete($existingLogoPath);
                }

                // Set new logo name if uploaded successfully
                $partner->partner_logo = $newLogoName;

            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Unable to upload due to an error.');
            }
        }
        $partner->name = $request->name;
        $partner->link = $request->link;

        // Save the changes
        $partner->update();

        return redirect()->route('admin.project.index')->with('success', 'Partner has been updated successfully');

    }
    public function destroyProjectPartner($id)
    {
        $partner = ProjectPartner::findOrFail($id);

        //deleting partner logo
        $storagePath = 'images/projects/images/partners-logo/';
        $existingLogo = $storagePath . $partner->partner_logo;
        if (Storage::disk('public')->exists($existingLogo)) {
            Storage::disk('public')->delete($existingLogo);
        }

        $partner->delete();
        return redirect()->back()->with('success', 'Partner removed Successfully');
    }

    //managing sliding images
    public function newContent()
    {
        $homeslider = ProjectContent::where('page_section', 'home_slider')->get();
        return view('project.admin.page-contents.new-content');
    }
    public function storeHomeSliderContent(Request $request)
    {
        $request->validate([
            'section_header' => ['nullable'],
            'section_sub_header' => ['nullable'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $newHomeItem = new ProjectContent();
        // Processing uploaded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageExtension = $image->getClientOriginalExtension();
            $randomNumber = uniqid(); // Use uniqid for uniqueness

            $newImageName = $imageOriginalName . '-' . $randomNumber . '.' . $imageExtension;

            // Defining path for storing uploaded image
            $imagePath = 'images/projects/images/sliding-images/';

            try {
                $image->storeAs('public/' . $imagePath, $newImageName);
                $newHomeItem->image = $newImageName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Something went wrong. Image failed to upload. Please try again.');
            }
        }

        $newHomeItem->page_section = "home_slider";
        $newHomeItem->section_header = $request->section_header;
        $newHomeItem->section_sub_header = $request->section_sub_header;

        $newHomeItem->save();
        return redirect()->back()->with('success', 'Uploaded successfully');
    }
    public function destroyHomeContent($id)
    {
        $homeContent = ProjectContent::findOrFail($id);
        //deleting content image if any
        $imagePath = 'images/projects/images/sliding-images/';
        if ($homeContent->image && Storage::disk('public')->exists($imagePath)) {
            storage::disk('public')->delete($imagePath);
        }
        $homeContent->delete();

        return redirect()->back()->with('success', 'Content removed Successfully');
    }
}
