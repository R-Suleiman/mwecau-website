<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use App\Models\Image;

class GalleryController extends Controller
{
    // gallery
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('gallery.gallery', compact('gallery'));
    }

    public function singleGallery($gallery_id)
    {
        $gallery = Image::all();
        $galleryDetails = Gallery::findOrFail($gallery_id);
        $gallery2 = Gallery::with('galleryImages')->findOrFail($gallery_id); // Fetch the gallery and its images
        return view('gallery.single-gallery', compact('gallery', 'gallery2', 'galleryDetails'));
    }
    // public function singleGallery($gallery_id)
    // {
    //     $gallery = Gallery::with('galleryImages')->find($gallery_id);

    //     if (!$gallery) {
    //         return redirect()->route('university.galleries')->with('error', 'Gallery not found.');
    //     }

    //     return view('gallery.single-gallery', compact('gallery'));
    // }

    public function showGallery()
    {
        $galleries = Gallery::with('galleryImages')->get();
        return view('admin.gallery.show-gallery', compact('galleries'));
    }
    public function create()
    {
        return view('admin.gallery.create-gallery');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'date' => ['nullable'],
            'thumbnail' => ['required', 'max:2048'],
        ], [
            'name.required' => 'Kindly fill in Name of the Gallery',
            'date.nullable' => "The date field can't be empty",
            'thumbnail.required' => 'The thumbnail for gallery is required',
            'thumbnail.image' => 'The thumbnail must be an image.',
            'thumbnail.mimes' => 'The thumbnail must be a file of type: jpeg, png, jpg, gif.',
            'thumbnail.max' => 'The thumbnail must not be greater than 2MB.',
        ]);

        $gallery = new Gallery();
        $imageName = null; // Initialize imageName

        // Logic to process uploaded image
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images/Gallery/thumbnail'), $imageName);
        }

        $gallery->name = $request->name;
        $gallery->date = $request->date;
        $gallery->thumbnail = $imageName; // Set thumbnail to the saved image name or null

        // Saving records with error handling
        try {
            if ($gallery->save()) {
                return redirect()->route('admin.gallery.add-images-to-gallery', ['gallery_id' => $gallery->id])
                    ->with('message', 'The gallery has been successfully created! You can now add images to enhance your gallery.');
            } else {
                return redirect()->route('admin.gallery.show-gallery')
                    ->with('fail', 'Something went wrong, failed to create gallery');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.gallery.show-gallery')
                ->with('fail', 'Exception Occurred, failed to create gallery');
        }
    }


    public function addImagesToGallery($gallery_id)
    {
        $gallery = Gallery::find($gallery_id);
        return view('admin.gallery.add-images-to-gallery', compact('gallery'));
    }

    public function galleryCollection(Request $request)
    {
        $request->validate([
            'image' => ['required', 'array'], // Ensure 'image' is an array
            'image.*' => ['file', 'mimes:jpg,jpeg,png'], // Validate each file
            'gallery_id' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('images/Gallery/Collections'), $imageName);

                // Create a new GalleryImage instance for each image
                $galleryImage = new GalleryImage();
                $galleryImage->gallery_id = $request->gallery_id;
                $galleryImage->image = $imageName;
                $galleryImage->save();
            }
        }

        return redirect()->back()->with('message', 'Images uploaded successfully.');
    }


    public function getGalleryImages($id)
    {
        $gallery = Gallery::with('galleryImages')->findOrFail($id);
        return response()->json(['images' => $gallery->galleryImages]);
    }

    public function destroy($id)
    {
        $gallery = Image::find($id);
        $gallery->delete();
        return redirect()->with('message', 'Removed Successfully');
    }
}
