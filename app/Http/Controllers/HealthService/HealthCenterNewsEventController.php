<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterNewsEvent;
use Illuminate\Http\Request;
use Storage;

class HealthCenterNewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function newsEvents()
    {
        $newsEvents = HealthCenterNewsEvent::all();
        return view('health-center.admin.newsEvents.health-center-news-events', compact('newsEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createNewsEvent()
    {
        return view('health-center.admin.newsEvents.health-center-create-news-event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeNewsEvent(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['nullable'],
            'date' => ['date', 'nullable'],
            'time' => ['nullable'],
            'location' => ['nullable'],
            'organizer' => ['nullable'],
            'contact' => ['nullable'],
            'email' => ['nullable'],
            'image' => ['nullable', 'max:2048'],
        ]);

        $newNewsEvent = new HealthCenterNewsEvent();

        //department image processing
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageOriginalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $imageName = $imageOriginalFileName . '-' . $uniqueId . '.' . $imageFileExtension;

            $storagePath = 'images/health-center/news-events-images/';
            try {
                $image->storeAs($storagePath, $imageName, 'public');
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'image failed to upload, Please try again');
            }
        }

        $newNewsEvent->title = $request->title;
        $newNewsEvent->description = $request->description;
        $newNewsEvent->date = $request->date;
        $newNewsEvent->time = $request->time;
        $newNewsEvent->location = $request->location;
        $newNewsEvent->organizer = $request->organizer;
        $newNewsEvent->contact = $request->contact;
        $newNewsEvent->email = $request->email;
        $newNewsEvent->image = $imageName;

        if ($newNewsEvent->save()) {
            return redirect()->route('health-center.news-events')->with('success', 'Successfully Posted');
        } else {
            return redirect()->back()->with('fail', 'Failed to add new doctor, Please try again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editNewsEvent(string $title)
    {
        $newsEvent = HealthCenterNewsEvent::where('title', $title)->firstOrFail();
        return view('health-center.admin.newsEvents.health-center-edit-news-event', compact('newsEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateNewsEvent(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['nullable'],
            'date' => ['date', 'nullable'],
            'time' => ['nullable'],
            'location' => ['nullable'],
            'organizer' => ['nullable'],
            'contact' => ['nullable'],
            'email' => ['nullable'],
            'image' => ['nullable', 'max:2048'],
        ]);

        $newsEvent = HealthCenterNewsEvent::findOrFail($id);

        //department image processing
        $imageName = $newsEvent->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageOriginalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageFileExtension = $image->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $imageName = $imageOriginalFileName . '-' . $uniqueId . '.' . $imageFileExtension;

            $storagePath = 'images/health-center/news-events-images/';
            $existingImage = $storagePath . $newsEvent->image;
            try {
                //deleting the existing thumbnail
                if ($newsEvent->image && Storage::disk('public')->exists($existingImage)) {
                    Storage::disk('public')->delete($existingImage);
                }
                $image->storeAs($storagePath, $imageName, 'public');
                $newsEvent->image = $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', 'Image Failed to upload, Please try again');
            }
        }

        $newsEvent->title = $request->title;
        $newsEvent->description = $request->description;
        $newsEvent->date = $request->date;
        $newsEvent->time = $request->time;
        $newsEvent->location = $request->location;
        $newsEvent->organizer = $request->organizer;
        $newsEvent->contact = $request->contact;
        $newsEvent->email = $request->email;
        $newsEvent->image = $imageName;

        if ($newsEvent->update()) {
            return redirect()->route('health-center.news-events')->with('success', "{$newsEvent->title} Successfully Updated.");
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyNewsEvent(string $id)
    {
        $newsEvent = HealthCenterNewsEvent::findOrFail($id);

        //handle the service image deletion
        $storagePath = 'images/health-center/news-events-images/';
        $existingImage = $storagePath . $newsEvent->image;
        ;
        try {
            if (Storage::disk('public')->exists($existingImage)) {
                Storage::disk('public')->delete($existingImage);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'failed to delete a related image');
        }

        $newsEvent->delete();
        return redirect()->back()->with('success', 'Successfully removed');
    }
}
