<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            'event_image' => ['nullable'],
            'speaker_fullname' => ['required', 'string'],
            'speaker_profession' => ['nullable', 'string'],
            'speaker_info' => ['nullable', 'string'],
            'speaker_photo' => ['nullable'],
            'event_cost' => ['nullable', 'string'],
            'event_date' => ['required', 'string'],
            'eventStart_time' => ['required', 'string'],
            'eventEnd_time' => ['required', 'string'],
            'event_location' => ['required', 'string'],
            'event_organizer' => ['required', 'string'],
            'total_slots' => ['nullable', 'string'],
            'booked_slots' => ['nullable', 'string'],
            'file' => ['nullable', 'file', 'max:2048', 'mimes:pdf']
        ], [
            'event_title.required' => 'Please provide the event title.',
            'event_category.required' => 'Please select an event category.',
            'event_description.required' => 'Event description is required.',
            'event_image.image' => 'The event image must be a valid image file.',
            'event_image.mimes' => 'The event image must be a file of type: jpeg, png, jpg, or gif.',
            'event_image.max' => 'The event image must not be larger than 2 MB.',
            'speaker_fullname.required' => 'Please provide the full name of the speaker.',
            'speaker_profession.required' => 'The speaker\'s profession is required.',
            'speaker_info.required' => 'Please provide some information about the speaker.',
            'speaker_photo.mimes' => 'The event image must be a file of type: jpeg, png, jpg, or gif.',
            'speaker_photo.max' => 'The event image must not be larger than 6 MB.',
            'event_cost.required' => 'Please specify the event cost.',
            'event_date.required' => 'The event date is required.',
            'eventStart_time.required' => 'Please provide the event start time.',
            'eventEnd_time.required' => 'Please provide the event end time.',
            'event_location.required' => 'The event location is required.',
            'event_organizer.required' => 'Please specify the event organizer.',
            'total_slots.required' => 'Please provide the total number of slots available for the event.',
            'booked_slots.required' => 'Please provide the number of booked slots.',
        ]);

        //handling  attachment upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('documents/event-documents'), $fileName);
        } else {
            $fileName = null;
        }
        // handling images upload
        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $eventImageName = time() . '-' . $event_image->getClientOriginalName();
            $event_image->move(public_path('images/eventImages'), $eventImageName);
        } else {
            $eventImageName = null;
        }
        if ($request->hasFile('speaker_photo')) {
            $speaker_photo = $request->file('speaker_photo');
            $speakerPhotoName = time() . '-' . $speaker_photo->getClientOriginalName();
            $speaker_photo->move(public_path('images/eventSpeakerImages'), $speakerPhotoName);
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
        $events->file = $fileName;

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
            'event_title' => ['required', 'string'],
            'event_category' => ['required', 'string'],
            'event_description' => ['required', 'string'],
            'event_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:3024'],
            'speaker_fullname' => ['required', 'string'],
            'speaker_profession' => ['nullable', 'string'],
            'speaker_info' => ['required', 'string'],
            'speaker_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:3024'],
            'event_cost' => ['nullable', 'string'],
            'event_date' => ['required', 'string'],
            'eventStart_time' => ['required', 'string'],
            'eventEnd_time' => ['required', 'string'],
            'event_location' => ['required', 'string'],
            'event_organizer' => ['required', 'string'],
            'total_slots' => ['nullable', 'string'],
            'booked_slots' => ['nullable', 'string'],
            'file' => ['nullable', 'file', 'max:2048', 'mimes:pdf']
        ]);

        $eventUpdate = Event::findOrFail($id);

        // Handle attachment upload
        if ($request->hasFile('file')) {
            $eventAttachment = public_path('documents/event-documents/' . $eventUpdate->file);
            if (File::exists($eventAttachment)) {
                File::delete($eventAttachment);
            }
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('documents/event-documents'), $fileName);
            $eventUpdate->file = $fileName;
        } else {
            $fileName = $eventUpdate->file;
        }

        // Handle event image upload
        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $eventImageName = time() . '-' . $event_image->getClientOriginalName();
            $event_image->move(public_path('images/eventImages'), $eventImageName);
            $eventUpdate->event_image = $eventImageName;
        } else {
            $eventImageName = $eventUpdate->event_image;
        }

        // Handle speaker photo upload
        if ($request->hasFile('speaker_photo')) {
            $speaker_photo = $request->file('speaker_photo');
            $speakerPhotoName = time() . '-' . $speaker_photo->getClientOriginalName();
            $speaker_photo->move(public_path('images/eventSpeakerImages'), $speakerPhotoName);
            $eventUpdate->speaker_photo = $speakerPhotoName;
        } else {

            $speakerPhotoName = $eventUpdate->speaker_photo;
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
        $eventUpdate->file = $fileName;

        $eventUpdate->save();

        return redirect()->route('admin.events.list')->with('message', 'Event updated successfully');
    }

    public function eventDestroy($id)
    {
        // Find the event by ID or fail if it doesn't exist
        $destroyEvent = Event::findOrFail($id);

        $eventAttachment = public_path('event/event-documents/' . $destroyEvent->file);
        if (File::exists($eventAttachment)) {
            File::delete($eventAttachment);
        }

        $eventImagePath = public_path('images/eventImages/' . $destroyEvent->event_image);
        if (File::exists($eventImagePath)) {
            File::delete($eventImagePath);
        }

        $speakerImagePath = public_path('images/eventSpeakerImages/' . $destroyEvent->speaker_photo);
        if (File::exists($speakerImagePath)) {
            File::delete($speakerImagePath);
        }

        $destroyEvent->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Event deleted successfully');
    }
}
