<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTeam;
use File;
use Illuminate\Http\Request;

class AdminProjectTeamController extends Controller
{
    public function index()
    {
        $team = ProjectTeam::all();
        return view('project.admin.team.team', compact('team'));
    }
    public function create($projectName)
    {
        $project = Project::where('name', $projectName)->first();
        return view('project.admin.team.create', compact('project'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => ['integer'],
            'initials' => ['required', 'max:5'],
            'name' => ['required', 'string', 'max:100'],
            'institute' => ['nullable', 'string'],
            'bio' => ['nullable', 'string'],
            'position' => ['nullable', 'string', 'max:50'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ], [
            'project_id.integer' => 'The project ID must be a valid number.',
            'initials.required' => 'Please provide the initials.',
            'initials.max' => 'Initials cannot exceed 5 characters.',
            'name.required' => 'Please enter the name of the team member.',
            'name.max' => 'The name cannot exceed 100 characters.',
            'institute.string' => 'The institute name should be text only.',
            'bio.string' => 'The biography should be text only.',
            'position.string' => 'The position should be text only.',
            'position.max' => 'The position cannot exceed 50 characters.',
            'profile_picture.required' => 'Please upload a profile picture for the team member.',
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, JPG, or GIF format.',
            'profile_picture.max' => 'The profile picture size should not exceed 2MB.',
        ]);

        //profile picture processing
        $profilePictureName = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureOriginalName = pathinfo($profilePicture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileNameExtension = $profilePicture->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            //new profile picture name
            $profilePictureName = $profilePictureOriginalName . '-' . $randomNumber . '-' . $profilePictureFileNameExtension;
            $profilePicture->move(public_path('images/projects/images/team-member-profile-pictures'), $profilePictureName);
        }

        $teamMember = new ProjectTeam();

        $teamMember->project_id = $request->project_id;
        $teamMember->initials = $request->initials;
        $teamMember->name = $request->name;
        $teamMember->institute = $request->institute;
        $teamMember->bio = $request->bio;
        $teamMember->position = $request->position;
        $teamMember->profile_picture = $profilePictureName;

        if ($teamMember->save()) {
            return redirect()->route('admin.project.team.index')->with('success', 'Team member added successfully to the project.');
        } else {
            return redirect()->back()->with('fail', 'An error occurred while adding the team member to the project. Please try again or contact support if the issue persists.');
        }

    }

    public function edit($name)
    {
        $teamMember = ProjectTeam::where('name', $name)->first();
        return view('project.admin.team.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'initials' => ['required', 'max:5'],
            'name' => ['required', 'string', 'max:100'],
            'institute' => ['nullable', 'string'],
            'bio' => ['nullable', 'string'],
            'position' => ['nullable', 'string', 'max:50'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
        ], [
            'project_id.integer' => 'The project ID must be a valid number.',
            'initials.required' => 'Please provide the initials.',
            'initials.max' => 'Initials cannot exceed 5 characters.',
            'name.required' => 'Please enter the name of the team member.',
            'name.max' => 'The name cannot exceed 100 characters.',
            'institute.string' => 'The institute name should be text only.',
            'bio.string' => 'The biography should be text only.',
            'position.string' => 'The position should be text only.',
            'position.max' => 'The position cannot exceed 50 characters.',
            'profile_picture.required' => 'Please upload a profile picture for the team member.',
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, JPG, or GIF format.',
            'profile_picture.max' => 'The profile picture size should not exceed 2MB.',
        ]);

        $teamMember = ProjectTeam::findOrFail($id);
        //profile picture processing
        $profilePictureName = $teamMember->profile_picture;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureOriginalName = pathinfo($profilePicture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileNameExtension = $profilePicture->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            //new profile picture name
            $profilePictureName = $profilePictureOriginalName . '-' . $randomNumber . '-' . $profilePictureFileNameExtension;
            $profilePicture->move(public_path('images/projects/images/team-member-profile-pictures'), $profilePictureName);

            //deleting the existing profile picture
            $existingProfilePicture = public_path('/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture);
            if (File::exists($existingProfilePicture)) {
                File::delete($existingProfilePicture);
            }
        }

        $teamMember->initials = $request->initials;
        $teamMember->name = $request->name;
        $teamMember->institute = $request->institute;
        $teamMember->bio = $request->bio;
        $teamMember->position = $request->position;
        $teamMember->profile_picture = $profilePictureName;

        if ($teamMember->update()) {
            return redirect()->route('admin.project.team.index')->with('success', 'Team member added successfully to the project.');
        } else {
            return redirect()->back()->with('fail', 'An error occurred while adding the team member to the project. Please try again or contact support if the issue persists.');
        }

    }

    public function memberProfile($name)
    {
        $projects = Project::all();
        $teamMember = ProjectTeam::where('name', $name)->first();

        if ($teamMember) {
            $teamMember->load('project'); // Eager load the related project
        }
        return view('project.admin.team.member-profile', compact('teamMember', 'projects'));
    }

    public function destroy($id)
    {
        $teamMember = ProjectTeam::findOrFail($id);

        //deleting team member profile picture
        $profilePicture = public_path('/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture);

        if (File::exists($profilePicture)) {
            File::delete($profilePicture);
        }

        if ($teamMember->delete()) {
            return redirect()->route('admin.project.team.index')->with('success', 'Team member successfully deleted');
        } else {
            return redirect()->back()->with('fail', 'An error occured when deleting a team member, pleas try again if the issue presist please contact for support');
        }
    }
}
