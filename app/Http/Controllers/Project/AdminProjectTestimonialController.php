<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
 
class AdminProjectTestimonialController extends Controller
{
    public function testimonials()
    {
        $testimonials = ProjectTestimonial::all();
        return view('project.admin.testimonials.testimonials-index', compact('testimonials'));
    }
    public function createTestimonial()
    {
        return view('project.admin.testimonials.create-testimonial');
    }
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'testifier_initials' => ['required'],
            'testifier_name' => ['required'],
            'testimonial_description' => ['required'],
            'testifier_occupation' => ['required'],
            'testifier_profile_picture' => ['required', 'max:2048']
        ]);

        //processing scholarships file
        $profilePictureName = null;
        if ($request->hasFile('testifier_profile_picture')) {
            $profile_picture = $request->file('testifier_profile_picture');
            $profilePictureOriginalName = pathinfo($profile_picture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileExtensidon = $profile_picture->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $profilePictureName = $profilePictureOriginalName . '-' . $randomNumber . '-' . $profilePictureFileExtensidon;

            $storagePath = 'images/projects/images/testimonials/profile-pictures';

            $profile_picture->storeAs($storagePath, $profilePictureName, 'public');

        }


        $newTestimonial = new ProjectTestimonial();

        $newTestimonial->testifier_initials = $request->testifier_initials;
        $newTestimonial->testifier_name = $request->testifier_name;
        $newTestimonial->testimonial_description = $request->testimonial_description;
        $newTestimonial->testifier_occupation = $request->testifier_occupation;
        $newTestimonial->testifier_profile_picture = $profilePictureName;

        if ($newTestimonial->save()) {
            return redirect()->route('admin.project.testimonial.testimonials')->with('success', 'New scholarship has been added successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed to post scholarship');
        }
    }
    public function editTestimonial($testimonialName)
    {
        $testimonial = ProjectTestimonial::where('testifier_name', $testimonialName)->firstOrFail();
        return view('project.admin.testimonials.edit-testimonial', compact('testimonial'));
    }
    public function updateTestimonial(Request $request, $id)
    {
        $request->validate([
            'testifier_initials' => ['required'],
            'testifier_name' => ['required'],
            'testimonial_description' => ['required'],
            'testifier_occupation' => ['required'],
            'testifier_profile_picture' => ['nullable', 'max:2048']
        ]);

        //processing profile picture file
        $testimonial = ProjectTestimonial::findOrFail($id);

        $profilePictureName = $testimonial->testifier_profile_picture;
        if ($request->hasFile('testifier_profile_picture')) {
            $profile_picture = $request->file('testifier_profile_picture');
            $profilePictureOriginalName = pathinfo($profile_picture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileExtension = $profile_picture->getClientOriginalExtension();
            $randomNumber = rand(1000, 9999);
            $profilePictureName = $profilePictureOriginalName . '-' . $randomNumber . '.' . $profilePictureFileExtension;

            $storagePath = 'images/projects/images/testimonials/profile-pictures/';
            $profile_picture->storeAs($storagePath, $profilePictureName, 'public');

            //deleting the existing profile image
            $existingProfilePicture = $storagePath . $testimonial->testifier_profile_picture;
            if ($testimonial->testifier_profile_picture && Storage::disk('public')->exists($existingProfilePicture)) {
                Storage::disk('public')->delete($existingProfilePicture);
            }
        }

        $testimonial->testifier_initials = $request->testifier_initials;
        $testimonial->testifier_name = $request->testifier_name;
        $testimonial->testimonial_description = $request->testimonial_description;
        $testimonial->testifier_occupation = $request->testifier_occupation;
        $testimonial->testifier_profile_picture = $profilePictureName;

        if ($testimonial->update()) {
            return redirect()->route('admin.project.testimonial.testimonials')->with('success', "{$testimonial->testifier_name} updated successfully");
        } else {
            return redirect()->back()->with('fail', 'Failed to post scholarship');
        }
    }

    public function aboutTestimonial($testifierName)
    {

        $testifier = ProjectTestimonial::where('testifier_name', $testifierName)->firstOrFail();
        return view('project.admin.testimonials.about-testimonial', compact('testifier'));
    }
    public function destroyTestimonial($id)
    {
        $testimonial = ProjectTestimonial::findOrFail($id);

        //removing conference related PDF file
        $storagePath = 'images/projects/images/testimonials/profile-pictures/';
        $existingProfilePicture = $storagePath . $testimonial->testifier_profile_picture;
        if ($testimonial->testifier_profile_picture && Storage::disk('public')->exists($existingProfilePicture)) {
            Storage::disk('public')->delete($existingProfilePicture);
        }

        if ($testimonial->delete()) {
            return redirect()->back()->with('success', "{$testimonial->testifier_name} has been removed successfully");
        } else {
            return redirect()->back()->with('fail', 'An error occured while removing conference');
        }
    }
}
