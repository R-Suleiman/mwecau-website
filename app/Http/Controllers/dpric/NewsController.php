<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricNews;
use Illuminate\Http\Request;
use Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allNews = DpricNews::query()->orderBy('created_at', 'desc')->get();
        return view('dpric.admin.news.index', ['allNews' => $allNews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/news/';
            $image->storeAs($imagePath, $imageName, 'public');
            $news['image'] = $imageName;
        }

        DpricNews::create($news);
        return to_route('admin.dpric-news.index')->with('message', 'News Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DpricNews $dpricNews)
    {
        return view('dpric.admin.news.show', ['news' => $dpricNews]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricNews $dpricNews)
    {
        return view('dpric.admin.news.edit', ['news' => $dpricNews]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricNews $dpricNews)
    {
        $news = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => ['nullable', 'max:2048'],
        ]);

        $imageName = $dpricNews->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName() . '-' . time();
            $imagePath = 'images/dpric/news/';
            $image->storeAs($imagePath, $imageName, 'public');

            // delete the existing image
            $existingImage = $imagePath . $dpricNews->image;
            if ($dpricNews->image && Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        }
        $news['image'] = $imageName;

        $dpricNews->update($news);
        return to_route('admin.dpric-news.show', $dpricNews)->with('message', 'News Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DpricNews $dpricNews)
    {
        $imagePath = 'images/dpric/news/';

        // delete the existing image
        $existingImage = $imagePath . $dpricNews->image;
        if ($dpricNews->image && Storage::disk('public')->exists($existingImage)) {
            Storage::disk('public')->delete($existingImage);
        }

        $dpricNews->delete();
        return to_route('admin.dpric-news.index')->with('message', 'News deleted Successfully!');
    }
}
