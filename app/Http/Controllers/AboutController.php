<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function postAboutView()
    {
        $about = About::first();
        return view('admin.about.post-about', compact('about'));
    }
    public function postAbout(Request $request)
    {
        // Validate the request
        $request->validate([
            'header' => ['required'],
            'description' => ['required'],
        ]);

        // Create new about data
        About::create([
            'header' => $request->header,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('message', 'Added Successfully');
    }
    public function updateAboutView(Request $request, $id)
    {

        // Find the specific record by ID
        $about = About::findOrFail($id);
        return view('admin.about.edit-about', compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'header' => ['required'],
            'description' => ['required'],
        ]);

        $about = About::findOrFail($id);

        // Update the about data
        $about->update([
            'header' => $request->header,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('message', 'Updated Successfully');
    }
    public function deleteAbout($id)
    {
        // Find the specific record by ID
        $about = About::findOrFail($id);

        $about->delete();

        return redirect()->back()->with('message', 'Updated Successfully');
    }
}
