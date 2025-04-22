<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterDepartment;
use App\Models\HealthCenterService;
use Illuminate\Http\Request;
use Storage;

class HealthCenterServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function services()
    {
        $services = HealthCenterService::all();
        return view('health-center.admin.services.health-center-services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createService()
    {
        $departments = HealthCenterDepartment::all();
        return view('health-center.admin.services.create-service', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeService(Request $request)
    {
        $request->validate([
            'department_id' => ['required', 'integer'],
            'name' => ['required'],
            'description' => ['nullable'],
            'thumbnail' => ['max:2048'],
        ]);

        $newService = new HealthCenterService();

        //department thumbnail processing
        $thumbnailFileName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;

            $storagePath = 'images/health-center/services-images/';
            try {
                $thumbnail->storeAs($storagePath, $thumbnailFileName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Image failed to upload, Please try again');
            }
        }

        $newService->department_id = $request->department_id;
        $newService->name = $request->name;
        $newService->description = $request->description;
        $newService->thumbnail = $thumbnailFileName;

        if ($newService->save()) {
            return redirect()->route('health-center.healthservices')->with('success', 'New service has been added successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed create new service, Please try again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editService(string $name)
    {

        $service = HealthCenterService::where('name', $name)->firstOrFail();
        $departments = HealthCenterDepartment::all();

        $imagePath = 'storage/images/health-center/services-images/' . $service->thumbnail;
        return view('health-center.admin.services.edit-service', compact(
            'departments',
            'service',
            'imagePath'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateService(Request $request, string $id)
    {
        $service = HealthCenterService::findOrFail($id);

        $request->validate([
            'department_id' => ['required', 'integer'],
            'name' => ['required'],
            'description' => ['nullable'],
            'thumbnail' => ['max:2048'],
        ]);

        //service thumbnail processing
        $thumbnailFileName = $service->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;

            $storagePath = 'images/health-center/services-images/';
            $existingThumbnailFile = $storagePath . $service->thumbnail;
            try {
                //deleting the existing thumbnail
                if ($service->thumbnail && Storage::disk('public')->exists($existingThumbnailFile)) {
                    Storage::disk('public')->delete($existingThumbnailFile);
                }
                $thumbnail->storeAs($storagePath, $thumbnailFileName, 'public');
                $service->thumbnail = $thumbnailFileName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Image failed to upload, Please try again');
            }
        }
        $service->department_id = $request->department_id;
        $service->name = $request->name;
        $service->description = $request->description;

        $service->update();
        return redirect()->route('health-center.healthservices')->with('success', "{$service->name} Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyService(string $id)
    {
        $service = HealthCenterService::findOrFail($id);

        //handle the service image deletion
        $storagePath = 'images/health-center/services-images/';
        $existingThumbnailFile = $storagePath . $service->thumbnail;
        try {
            if (Storage::disk('public')->exists($existingThumbnailFile)) {
                Storage::disk('public')->delete($existingThumbnailFile);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'failed to delete service thumbnail');
        }

        $service->delete();
        return redirect()->back()->with('success', 'Service successfully deleted');

    }
}
