<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\ClubActivity;
use Illuminate\Http\Request;

class ClubActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($club_name)
    {
        $club = Club::where("name", $club_name)->first();
        $activites = $club->activities;
        return view("dpric.admin.clubs.activities.index", ['club_name' => $club_name, 'activities' => $activites]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($club_name)
    {
        return view('dpric.admin.clubs.activities.create', ['club_name' => $club_name]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $club_name)
    {
        $activity = $request->validate([
            'activity_name' => 'required'
        ]);

        $club = Club::where('name', $club_name)->first();
        $club->activities()->create($activity);
        return to_route('admin.activities.index', ['club_name' => $club_name, 'activities' => $club->activities])->with('message','Activity created');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClubActivity $clubActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($club_name, ClubActivity $activity)
    {
        return view('dpric.admin.clubs.activities.edit', ['club_name' => $club_name, 'activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $club_name, ClubActivity $activity)
    {
        $newActivity = $request->validate([
            'activity_name' => 'required'
        ]);

        $activity->update($newActivity);

        $club = Club::where("name", $club_name)->first();
        $activites = $club->activities;

        return to_route('admin.activities.index', ['club_name' => $club_name, 'activities' => $activites])->with('message','Activity updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($club_name, ClubActivity $activity)
    {
        $activity->delete();

        $club = Club::where("name", $club_name)->first();
        $activites = $club->activities;

        return to_route('admin.activities.index', ['club_name' => $club_name, 'activities' => $activites])->with('message','Activity updated');
    }
}
