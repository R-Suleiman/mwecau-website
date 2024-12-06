<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterDepartment;
use Illuminate\Http\Request;
use Storage;

class HealthCenterDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function departments()
    {
        $departments = HealthCenterDepartment::all();
        return view('health-center.admin.departments.health-center-departments', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createDepartment()
    {
        return view('health-center.admin.departments.create-department');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeDepartment(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'thumbnail' => ['required', 'max:2048'],
        ]);

        $newDepartment = new HealthCenterDepartment();

        //department thumbnail processing
        $thumbnailFileName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;

            $storagePath = 'images/health-center/department-images/';
            try {
                $thumbnail->storeAs($storagePath, $thumbnailFileName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Image failed to upload, Please try again');
            }
        }

        $newDepartment->name = $request->name;
        $newDepartment->description = $request->description;
        $newDepartment->thumbnail = $thumbnailFileName;

        if ($newDepartment->save()) {
            return redirect()->route('health-center.departments')->with('success', 'New Department has been added successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed create new department, Please try again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editDepartment($name)
    {
        $department = HealthCenterDepartment::where('name', $name)->firstOrFail();
        return view('health-center.admin.departments.edit-department', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateDepartment(Request $request, $id)
    {
        $department = HealthCenterDepartment::findOrFail($id);

        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'thumbnail' => ['max:2048'],
        ]);

        //department thumbnail processing
        $thumbnailFileName = $department->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;

            $storagePath = 'images/health-center/department-images/';
            $existingThumbnailFile = $storagePath . $department->thumbnail;
            try {
                //deleting the existing thumbnail
                if ($department->thumbnail && Storage::disk('public')->exists($existingThumbnailFile)) {
                    Storage::disk('public')->delete($existingThumbnailFile);
                }
                $thumbnail->storeAs($storagePath, $thumbnailFileName, 'public');
                $department->thumbnail = $thumbnailFileName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Image failed to upload, Please try again');
            }
        }
        $department->name = $request->name;
        $department->description = $request->description;

        $department->update();
        return redirect()->route('health-center.departments')->with('success', "{$department->name} Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyDepartment(string $id)
    {
        $department = HealthCenterDepartment::findOrFail($id);

        //handle the department image deletion
        $storagePath = 'images/health-center/department-images/';
        $existingThumbnailFile = $storagePath . $department->thumbnail;
        try {
            if (Storage::disk('public')->exists($existingThumbnailFile)) {
                Storage::disk('public')->delete($existingThumbnailFile);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'failed to delete department thumbnail');
        }

        $department->delete();
        return redirect()->back()->with('success', 'Department successfully deleted');

    }
}
