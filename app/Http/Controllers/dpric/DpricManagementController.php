<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricManagement;
use Illuminate\Http\Request;
use Storage;

class DpricManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allStaff = DpricManagement::all();
        return view('dpric.admin.management.index', ['allStaff' => $allStaff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = $request->validate([
            'initial' => 'required',
            'first_name' => 'required',
            'other_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'rank' => 'required',
            'photo' => ['required', 'max:5120']
        ]);

        if($request->hasFile('photo')) {
            $img = $request->file('photo');
            $imgPath = 'images/dpric/staff/';
            $imgName = $img->getClientOriginalName() . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->storeAs($imgPath, $imgName, 'public');
            $staff['photo'] = $imgName;
        }

        DpricManagement::create($staff);
        return to_route('admin.dpric-management.index')->with('message', 'Staff Added Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricManagement $dpricManagement)
    {
        return view('dpric.admin.management.edit', ['staff' => $dpricManagement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricManagement $dpricManagement)
    {
        $editedStaff = $request->validate([
            'initial' => 'required',
            'first_name' => 'required',
            'other_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'rank' => 'required',
            'photo' => ['max:5120']
        ]);

        $imgName = $dpricManagement->photo;
        if($request->hasFile('photo')) {
            $img = $request->file('photo');
            $imgPath = 'images/dpric/staff/';
            $imgName = $img->getClientOriginalName() . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->storeAs($imgPath, $imgName, 'public');

             // remove the existing image
             $existingImg = $imgPath . $dpricManagement->photo;
             if($dpricManagement->photo && Storage::disk('public')->exists($existingImg)) {
                 Storage::disk('public')->delete($existingImg);
             }
        }
        $editedStaff['photo'] = $imgName;
        $editedStaff['rank'] = $dpricManagement->rank;

        $dpricManagement->update($editedStaff);
        return to_route('admin.dpric-management.index')->with('message', 'Staff Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(DpricManagement $dpricManagement)
    // {
    //     $filepath = 'images/dpric/staff/';
    //     $existingImage = $filepath . $dpricManagement->photo;
    //     if ($dpricManagement->photo && Storage::disk('public')->exists($existingImage)) {
    //         Storage::disk('public')->delete($existingImage);
    //     }

    //     $dpricManagement->delete();

    //     return redirect()->back()->with('message', 'Staff deleted');
    // }
}
