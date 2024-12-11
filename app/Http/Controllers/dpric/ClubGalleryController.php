<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\ClubGallery;
use Illuminate\Http\Request;
use Storage;

class ClubGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($club_name)
    {
        $club = Club::where("name", $club_name)->first();
        $clubGallery = $club->images;

        return view('dpric.admin.Clubs.clubs-gallery.index', ['club_name' => $club_name, 'gallery' => $clubGallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($club_name)
    {
        return view('dpric.admin.Clubs.clubs-gallery.create', ['club_name'=> $club_name]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $club_name)
    {
        $images = $request->validate([
            'images.*' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg', 'max:5120']
        ]);

        $filepath = 'images/dpric/clubs/clubs-gallery/';
        $club = Club::where('name', $club_name)->first();
        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $filename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($filepath, $filename, 'public');

                $club->images()->create(['image' => $filename]);
            }
        }

        return to_route('admin.club-gallery.index', ['club_name' => $club_name,  'gallery' => $club->images])->with('message', 'Image added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClubGallery $club_gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($club_name, ClubGallery $club_gallery)
    {
        $filepath = 'images/dpric/clubs/clubs-gallery/';
        $existingImage = $filepath . $club_gallery->image;
        if ($club_gallery->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $club_gallery->delete();
       return redirect()->back()->with('message', 'Image deleted successfully');
    }
}
