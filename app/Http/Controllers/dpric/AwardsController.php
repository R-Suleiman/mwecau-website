<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricAwards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = DpricAwards::query()->orderBy('created_at', 'desc')->get();
        return view('dpric.admin.awards.index', ['awards' => $awards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $award = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/awards/';
            $image->storeAs($imagePath, $imageName, 'public');
            $award['image'] = $imageName;
        }

        DpricAwards::create($award);
        return to_route('admin.dpric-awards.index')->with('message', 'Award Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DpricAwards $dpricAward)
    {
        return view('dpric.admin.awards.show', ['award' => $dpricAward]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricAwards $dpricAward)
    {
        return view('dpric.admin.awards.edit', ['award' => $dpricAward]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricAwards $dpricAward)
    {
        $award = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048'],
        ]);

        $imageName = $dpricAward->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/awards/';
            $image->storeAs($imagePath, $imageName, 'public');

            // delete the existing image
            $existingImage = $imagePath . $dpricAward->image;
            if ($dpricAward->image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }
        $award['image'] = $imageName;

        $dpricAward->update($award);
        return to_route('admin.dpric-awards.show', $dpricAward)->with('message', 'Award Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DpricAwards $dpricAward)
    {
        $imagePath = 'images/dpric/awards/';

        // delete the existing image
        $existingImage = $imagePath . $dpricAward->image;
        if ($dpricAward->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $dpricAward->delete();
        return to_route('admin.dpric-awards.index')->with('message', 'Award deleted Successfully!');
    }
}
