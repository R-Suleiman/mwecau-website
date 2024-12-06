<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterDepartment;
use App\Models\HealthCenterDoctor;
use Illuminate\Http\Request;
use Storage;

class HealthCenterDoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function doctors()
    {
        $doctors = HealthCenterDoctor::all();
        return view('health-center.admin.doctors.health-center-doctors', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createDoctor()
    {
        $departments = HealthCenterDepartment::all();
        return view('health-center.admin.doctors.create-doctor', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeDoctor(Request $request)
    {
        $request->validate([
            'department_id' => ['required', 'integer'],
            'name' => ['required'],
            'carde' => ['nullable'],
            'education_level' => ['nullable'],
            'profile_picture' => ['nullable', 'max:2048'],
        ]);

        $newDoctor = new HealthCenterDoctor();

        //department profile_picture processing
        $profilePictureName = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureOriginalFileName = pathinfo($profilePicture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileExtension = $profilePicture->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $profilePictureName = $profilePictureOriginalFileName . '-' . $uniqueId . '.' . $profilePictureFileExtension;

            $storagePath = 'images/health-center/doctors-profile-pictures/';
            try {
                $profilePicture->storeAs($storagePath, $profilePictureName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'profile picture failed to upload, Please try again');
            }
        }

        $newDoctor->department_id = $request->department_id;
        $newDoctor->name = $request->name;
        $newDoctor->carde = $request->carde;
        $newDoctor->education_level = $request->education_level;
        $newDoctor->profile_picture = $profilePictureName;

        if ($newDoctor->save()) {
            return redirect()->route('health-center.doctors')->with('success', 'New doctor has added successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed to add new doctor, Please try again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editDoctor(string $name)
    {
        $doctor = HealthCenterDoctor::where('name', $name)->firstOrFail();
        $departments = HealthCenterDepartment::all();
        return view('health-center.admin.doctors.edit-doctor', compact('doctor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateDoctor(Request $request, string $id)
    {
        $doctor = HealthCenterDoctor::findOrFail($id);

        $request->validate([
            'department_id' => ['required', 'integer'],
            'name' => ['required'],
            'carde' => ['nullable'],
            'education_level' => ['nullable'],
            'profile_picture' => ['max:2048'],
        ]);

        //service thumbnail processing
        $profilePictureName = $doctor->profile_picture;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureOriginalFileName = pathinfo($profilePicture->getClientOriginalName(), PATHINFO_FILENAME);
            $profilePictureFileExtension = $profilePicture->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $profilePictureName = $profilePictureOriginalFileName . '-' . $uniqueId . '.' . $profilePictureFileExtension;

            $storagePath = 'images/health-center/doctors-profile-pictures/';
            $existingProfilePicture = $storagePath . $doctor->profile_picture;
            try {
                //deleting the existing thumbnail
                if ($doctor->profilePicture && Storage::disk('public')->exists($existingProfilePicture)) {
                    Storage::disk('public')->delete($existingProfilePicture);
                }
                $profilePicture->storeAs($storagePath, $profilePictureName, 'public');
                $doctor->profile_picture = $profilePictureName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'profile picture failed to upload, Please try again');
            }
        }
        $doctor->department_id = $request->department_id;
        $doctor->name = $request->name;
        $doctor->carde = $request->carde;
        $doctor->education_level = $request->education_level;
        $doctor->profile_picture = $profilePictureName;

        $doctor->update();
        return redirect()->route('health-center.doctors')->with('success', "{$doctor->name} Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyDoctor(string $id)
    {
        $service = HealthCenterDoctor::findOrFail($id);

        //handle the service image deletion
        $storagePath = 'images/health-center/doctors-profile-pictures/';
        $existingProfilePicture = $storagePath . $service->profile_picture;
        ;
        try {
            if (Storage::disk('public')->exists($existingProfilePicture)) {
                Storage::disk('public')->delete($existingProfilePicture);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'failed to delete service thumbnail');
        }

        $service->delete();
        return redirect()->back()->with('success', 'Doctor has benn successfully removed');
    }
}
