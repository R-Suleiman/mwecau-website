<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricImage;
use Illuminate\Http\Request;
use Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = DpricImage::query()->get();
        return view('dpric.admin.images.index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->validate([
            'page_name' => 'required',
            'page_section' => 'required',
            'image_path' => ['required', 'max:2048']
        ]);

        if($request->hasFile('image_path')) {
            $img = $request->file('image_path');
            $imgPath = 'images/dpric/general/';
            $imgName = $img->getClientOriginalName() . '-' . time();
            $img->storeAs($imgPath, $imgName, 'public');
            $image['image_path'] = $imgName;
        }

        DpricImage::create($image);
        return to_route('admin.dpric-images.index')->with('message', 'Image Added Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricImage $dpricImage)
    {
        return view('dpric.admin.images.edit', ['image' => $dpricImage]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricImage $dpricImage)
    {
        $image = $request->validate([
            'page_name' => 'required',
            'page_section' => 'required',
            'image_path' => ['required', 'max:2048']
        ]);

        $imgName = $dpricImage->image_path;
        if($request->hasFile('image_path')) {
            $img = $request->file('image_path');
            $imgPath = 'images/dpric/general/';
            $imgName = $img->getClientOriginalName() . '-' . time();
            $img->storeAs($imgPath, $imgName, 'public');

             // remove the existing image
             $existingImg = $imgPath . $dpricImage->image_path;
             if($dpricImage->image_path && Storage::disk('public')->exists($existingImg)) {
                 Storage::disk('public')->delete($existingImg);
             }
        }
        $image['image_path'] = $imgName;

        $dpricImage->update($image);
        return to_route('admin.dpric-images.index')->with('message', 'Image Updated Successfully!');
    }

}
