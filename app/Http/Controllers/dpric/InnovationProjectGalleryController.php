<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\InnovationProject;
use App\Models\InnovationProjectGallery;
use Illuminate\Http\Request;
use Storage;

class InnovationProjectGalleryController extends Controller
{

    public function index($club_name, $project_name) {
        $project = InnovationProject::where("project_title", $project_name)->first();

        return view('dpric.admin.Clubs.projects-gallery.index', ['club_name' => $club_name, 'gallery' => $project->images, 'project_name' => $project_name]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($club_name, $project_name)
    {
        return view('dpric.admin.Clubs.projects-gallery.create', ['club_name'=> $club_name,'project_name'=> $project_name]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $club_name, $project_name)
    {
        $images = $request->validate([
            'images.*' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg', 'max:5120']
        ]);

        $filepath = 'images/dpric/clubs/projects-gallery/';
        $innovationProject = InnovationProject::where('project_title', $project_name)->first();
        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $filename = $image->getClientOriginalName() . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($filepath, $filename, 'public');

                $innovationProject->images()->create(['image' => $filename]);
            }
        }

        return to_route('admin.project-gallery.index', ['club_name' => $club_name, 'project_name' => $project_name, 'gallery' => $innovationProject->images])->with('message', 'Image added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(InnovationProjectGallery $project_gallery, $club_name, $project_name){
        $project = InnovationProject::where("project_title", $project_name)->first();

        return to_route('admin.project-gallery.show', ['project_name' => $project_name, 'project_gallery', $project->images]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $club_name, $project_name, InnovationProjectGallery $project_gallery)
    {
        $filepath = 'images/dpric/clubs/projects-gallery/';
        $existingImage = $filepath . $project_gallery->image;
        if ($project_gallery->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $project_gallery->delete();
       return redirect()->back()->with('message', 'Image deleted successfully');
    }
}
