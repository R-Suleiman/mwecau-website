<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('dpric.admin.clubs.index', ['clubs' => $clubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.Clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $club = $request->validate([
            'name' => ['required', Rule::unique('clubs', 'name')],
            'description' => 'required',
            'department' => 'required',
            'welcome_message' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'found_date' => 'required',
            'total_members' => 'required',
            'total_projects' => 'required',
            'primary_image' => ['nullable', 'max:2048'],
        ]);

        if($request->hasFile('primary_image')) {
            $image = $request->file('primary_image');
            $imagePath = 'images/dpric/clubs/';
            $imageName = $image->getClientOriginalName() . '-' . time();
            $image->storeAs($imagePath, $imageName, 'public');
            $club['primary_image'] = $imageName;
        }

        Club::create($club);
        return to_route('admin.dpric-clubs.index')->with('message', 'Club registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Club $dpricClub)
    {
        $clubActivities = $dpricClub->activities;

        return view('dpric.admin.Clubs.show', ['club' => $dpricClub, 'clubActivities' => $clubActivities]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $dpricClub)
    {
        return view('dpric.admin.Clubs.edit', ['club' => $dpricClub]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $dpricClub)
    {
        $updatedClub = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'department' => 'required',
            'welcome_message' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'found_date' => 'required',
            'total_members' => 'required',
            'total_projects' => 'required',
            'primary_image' => ['nullable', 'max:2048'],
        ]);

        $imageName = $dpricClub->primary_image;
        if($request->hasFile('primary_image')) {
            $image = $request->file('primary_image');
            $imagePath = 'images/dpric/clubs/';
            $imageName = $image->getClientOriginalName() . '-' . time();
            $image->storeAs($imagePath, $imageName, 'public');

            // remove the old image
            $existingImage = $imagePath . $dpricClub->primary_image;
            if($dpricClub->primary_image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }
        $updatedClub['primary_image'] = $imageName;

        $dpricClub->update($updatedClub);
        return to_route('admin.dpric-clubs.show', $dpricClub)->with('message', 'Club Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $dpricClub)
    {
        $imagePath = 'images/dpric/clubs/';

        // delete the existing image
        $existingImage = $imagePath . $dpricClub->primary_image;
        if ($dpricClub->primary_image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $dpricClub->delete();
        return to_route('admin.dpric-clubs.index')->with('message', 'Club deleted Successfully!');
    }
}
