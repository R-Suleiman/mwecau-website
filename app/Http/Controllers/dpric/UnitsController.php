<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricUnits;
use Illuminate\Http\Request;
use Storage;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = DpricUnits::query()->orderBy('created_at', 'desc')->get();
        return view('dpric.admin.units.index', ['units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unit = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048']
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/units/';
            $image->storeAs($imagePath, $imageName, 'public');
            $unit['image'] = $imageName;
        }

        DpricUnits::create($unit);
        return to_route('admin.dpric-units.index')->with('message', 'Unit Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DpricUnits $dpricUnit)
    {
        return view('dpric.admin.units.show', ['unit' => $dpricUnit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricUnits $dpricUnit)
    {
        return view('dpric.admin.units.edit', ['unit' => $dpricUnit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricUnits $dpricUnit)
    {
        $unit = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048']
        ]);

        $imageName = $dpricUnit->image;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/units/';
            $image->storeAs($imagePath, $imageName, 'public');

            $existingImage = $imagePath . $dpricUnit->image;
            if($dpricUnit->image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }
        $unit['image'] = $imageName;

        $dpricUnit->update($unit);
        return to_route('admin.dpric-units.show', $dpricUnit)->with('message', 'Unit Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DpricUnits $dpricUnit)
    {
        $imagePath = 'images/dpric/units/';
        $existingImage = $imagePath . $dpricUnit->image;
        if($dpricUnit->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $dpricUnit->delete();
        return to_route('admin.dpric-units.index')->with('message', 'Unit deleted Successfully');
    }
}
