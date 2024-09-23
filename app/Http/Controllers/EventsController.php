<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use RealRashid\SweetAlert\Facades\Alert;

class EventsController extends Controller
{
    //
    public function event()
    {
        return view('admin.event');
    }
    //  this function post university events
    public function createEvent(Request $request)
    {
        $request->validate([
            'event_title' => ['required', 'string'],
            'event_category' => ['required', 'string'],
            'event_description' => ['required', 'string'],
            'event_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:1024', 'nullable'],
            'speaker_fullname' => ['required', 'string'],
            'speaker_profession' => ['required', 'string'],
            'speaker_info' => ['required', 'string'],
            'speaker_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:1024', 'nullable'],
            'event_cost' => ['required', 'string'],
            'event_date' => ['required', 'string'],
            'eventStart_time' => ['required', 'string'],
            'eventEnd_time' => ['required', 'string'],
            'event_location' => ['required', 'string'],
            'event_organizer' => ['required', 'string'],
            'total_slots' => ['required', 'string'],
            'booked_slots' => ['required', 'string'],
        ]);

        // handling file upload
        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $eventImageName = time() . '' . $event_image->getClientOriginalExtension();
            $event_image->move(public_path('images/eventImages'), $eventImageName);
        } else {
            $eventImageName = null;
        }
        if ($request->hasFile('speaker_photo')) {
            $speaker_photo = $request->file('speaker_photo');
            $speakerPhotoName = time() . '' . $speaker_photo->getClientOriginalExtension();
            $speaker_photo->move(public_path('images/eventsImages'), $speakerPhotoName);
        } else {
            $speakerPhotoName = null;
        }

        $events = new Event();
        $events->event_title = $request->event_title;
        $events->event_category = $request->event_category;
        $events->event_description = $request->event_description;
        $events->event_image = $eventImageName;
        $events->speaker_fullname = $request->speaker_fullname;
        $events->speaker_profession = $request->speaker_profession;
        $events->speaker_info = $request->speaker_info;
        $events->speaker_photo = $speakerPhotoName;
        $events->event_cost = $request->event_cost;
        $events->event_date = $request->event_date;
        $events->eventStart_time = $request->eventStart_time;
        $events->eventEnd_time = $request->eventEnd_time;
        $events->event_location = $request->event_location;
        $events->event_organizer = $request->event_organizer;
        $events->total_slots = $request->total_slots;
        $events->booked_slots = $request->booked_slots;

        $events->save();
        if ($events) {
            return redirect()->back()->with('message', 'Event posted successfully');
        } else {
            Alert::error('Attention', 'Something went wrong');
            return redirect()->back();
        }
    }
    public function eventslist()
    {
        $events = event::all();
        return view('admin.events-list', compact('events'));
    }
    // for an admin
    public function adminEventDetails($id)
    {

        $eventDetails = event::findOrFail($id);
        return view('admin.event-details', compact('eventDetails'));
    }
    // for web user
    public function eventDetails($id)
    {

        $eventDetails = event::findOrFail($id);
        return view('event-details', compact('eventDetails'));
    }
    //editing an event
    public function editEvent($id)
    {
        $event = event::findOrFail($id);

        return view('admin.edit-event', compact('event'));
    }
    public function updateEvent(Request $request, $id)
    {
        $request->validate([
            'event_title' => ['nullable', 'string'],
            'event_category' => ['nullable', 'string'],
            'event_description' => ['nullable', 'string'],
            'event_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:1024'],
            'speaker_fullname' => ['nullable', 'string'],
            'speaker_profession' => ['nullable', 'string'],
            'speaker_info' => ['nullable', 'string'],
            'speaker_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:1024'],
            'event_cost' => ['nullable', 'string'],
            'event_date' => ['nullable', 'string'],
            'eventStart_time' => ['nullable', 'string'],
            'eventEnd_time' => ['nullable', 'string'],
            'event_location' => ['nullable', 'string'],
            'event_organizer' => ['nullable', 'string'],
            'total_slots' => ['nullable', 'string'],
            'booked_slots' => ['nullable', 'string'],
        ]);

        $eventUpdate = Event::findOrFail($id);

        // Handle event image upload
        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $eventImageName = time() . '.' . $event_image->getClientOriginalExtension();
            $event_image->move(public_path('images/eventImages'), $eventImageName);
            $eventUpdate->event_image = $eventImageName;
        }

        // Handle speaker photo upload
        if ($request->hasFile('speaker_photo')) {
            $speaker_photo = $request->file('speaker_photo');
            $speakerPhotoName = time() . '.' . $speaker_photo->getClientOriginalExtension();
            $speaker_photo->move(public_path('images/eventsImages'), $speakerPhotoName);
            $eventUpdate->speaker_photo = $speakerPhotoName;
        }

        // Update event fields
        $eventUpdate->event_title = $request->event_title;
        $eventUpdate->event_category = $request->event_category;
        $eventUpdate->event_description = $request->event_description;
        $eventUpdate->speaker_fullname = $request->speaker_fullname;
        $eventUpdate->speaker_profession = $request->speaker_profession;
        $eventUpdate->speaker_info = $request->speaker_info;
        $eventUpdate->event_cost = $request->event_cost;
        $eventUpdate->event_date = $request->event_date;
        $eventUpdate->eventStart_time = $request->eventStart_time;
        $eventUpdate->eventEnd_time = $request->eventEnd_time;
        $eventUpdate->event_location = $request->event_location;
        $eventUpdate->event_organizer = $request->event_organizer;
        $eventUpdate->total_slots = $request->total_slots;
        $eventUpdate->booked_slots = $request->booked_slots;

        $eventUpdate->save();

        return redirect()->back()->with('message', 'Event updated successfully');
    }

    public function eventDestroty($id)
    {
        $destroyEvent = Event::findOrFail($id);

        $destroyEvent->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    }
}
