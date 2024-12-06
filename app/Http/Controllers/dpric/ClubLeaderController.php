<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\ClubLeader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Storage;

class ClubLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($club_name)
    {
        $club = Club::where("name", $club_name)->first();
        $leaders = $club->leaders;
        return view("dpric.admin.clubs.leaders.index", ['club_name' => $club_name, 'leaders' => $leaders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($club_name)
    {
        return view('dpric.admin.Clubs.leaders.create', ['club_name' => $club_name]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $club_name)
    {
        $club_id = Club::where('name', $club_name)->first()->id;

        $leader = $request->validate(
            [
                'full_name' => 'required',
                'title' => ['required'
            ],
                'email' => ['nullable', 'email'],
                'phone_number' => 'nullable',
                'image' => 'nullable',
            ]
        );


       // check if the title already exists for the club
        $titleExists = ClubLeader::where('title', $request->title)
            ->where('club_id', $club_id)
            ->exists();

        if ($titleExists) {
            return back()->withErrors(['title' => 'Title selected already exists'])->withInput();
        }

        // handle file
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filepath = 'images/dpric/clubs/leaders/';
            $filename = $file->getClientOriginalName() . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($filepath, $filename, 'public');
            $leader['image'] = $filename;
        }

        $club = Club::where('name', $club_name)->first();
        $club->leaders()->create($leader);
        return to_route('admin.leaders.index', ['club_name' => $club_name, 'leaders' => $club->leaders])->with('message', 'Club Leader added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($club_name, ClubLeader $leader)
    {
        return view('dpric.admin.clubs.leaders.edit', ['club_name' => $club_name, 'leader' => $leader]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $club_name, ClubLeader $leader)
    {
        $newLeader = $request->validate([
            'full_name' => 'required',
            'title' => 'required',
            'email' => ['nullable', 'email'],
            'phone_number' => 'nullable',
            'image' => 'nullable'
        ]);

        $filename = $leader->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filepath = 'images/dpric/clubs/leaders/';
            $filename = $file->getClientOriginalName() . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($filepath, $filename, 'public');

            // remove existing photo
            $existingImage = $filepath . $leader->image;
            if ($leader->image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }
        $newLeader['image'] = $filename;
        $leader->update($newLeader);

        $club = Club::where('name', $club_name)->first();

        return to_route('admin.leaders.index', ['club_name' => $club_name, 'leaders' => $club->leaders])->with('message', 'Club Leader added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($club_name, ClubLeader $leader)
    {
        $filepath = 'images/dpric/clubs/leaders/';
        $existingImage = $filepath . $leader->image;
        if ($leader->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $leader->delete();

        $club = Club::where("name", $club_name)->first();

        return to_route('admin.leaders.index', ['club_name' => $club_name, 'leaders' => $club->leaders])->with('message', 'Club Leader deleted');
    }
}
