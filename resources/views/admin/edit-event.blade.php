@extends('layouts.admin')
@section('content')
    <!-- main content -->
    {{-- site messages component --}}
    <x-messages />

    <div class="container-fluid">
        <form class="row event-row" action="{{ route('admin-update-event', $event->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="col-sm-12 col-lg-8">
                <div class="about-event col-sm-12 darkMode">
                    <div class="underline mt-1 mb-4">
                        <h3 class="favColor darkMode">About The Event</h3>
                    </div>
                    <h5>Fill details about the Event</h5>
                    <div class="event-form2">
                        <div class="event-inputs col-sm-12 ">

                            <input type="text" class="form-control darkMode" id="event_title" name="event_title"
                                value="{{ $event->event_title }}" placeholder="Event Title" />


                            <select name="event_category" id="event_category" class="form-control darkMode">

                                <option value="{{ $event->event_category }}">{{ $event->event_category }}</option>
                                <option value="academic">Academic</option>
                                <option value="clubsOrganizations">Clubs & Organization</option>
                                <option value="sportsEntertainment">Sports & Entertainment</option>
                                <option value="culture">Culture</option>
                                <option value="creativityTalents">Creativity & Talents</option>
                            </select>
                        </div>

                        <textarea name="event_description" id="editor" cols="50" rows="5"
                            class="form-control darkMode @error('event_description') is-invalid @enderror" placeholder="Event Description">{{ old('event_description', $event->event_description) }}</textarea>

                        <div>
                            <span class="text-danger">
                                @error('event_description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <label for="event_image">Event Image</label> <br />
                        <input type="file" class="form-control darkMode @error('event_image') is-invalid @enderror"
                            id="event_image" name="event_image" />

                        @error('event_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>Event Attachment if Any</label> <br />
                        <input type="file" class="form-control darkMode @error('file') is-invalid @enderror"
                            id="file" name="file" />

                        <div>
                            <span class="text-danger">
                                @error('file')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                </div>

                <div class="event-speaker darkMode">
                    <div class="underline mt-1 mb-4">
                        <h3 class="text-center favColor darkMode">Speakers or Organizers Details</h3>
                        <h5>
                            Please provide details about the main Organizer or Speaker of the
                            event
                        </h5>
                    </div>

                    <div class="event-form2">
                        <div class="event-inputs">
                            <input type="text" class="form-control" value="{{ $event->speaker_fullname }}"
                                id="speaker_fullname" name="speaker_fullname" placeholder="Full Name" />
                        </div>
                        <textarea class="form-control" id="speaker_info" name="speaker_info" cols="50" rows="5"
                            placeholder="A brief about of the Speaker/Organizer"> {{ $event->speaker_info }}</textarea>
                        <label>Speaker Photo (Optional)</label> <br />
                        <input type="file" class="form-control" id="speaker_photo " name="speaker_photo" />
                        <br />
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4 other-event-det post-event-det darkMode">
                <div class="underline mt-1 mb-4">
                    <h3 class="text-center favColor darkMode">More Event Details</h3>
                </div>
                <div class="event-form2">
                    <div class="event-detail">
                        <div>

                            <h6><i class="fa fa-bill"></i> Cost</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ $event->event_cost }}" id="event_cost"
                            name="event_cost" placeholder="default: free" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-calendar"></i>
                            <h6>Event Date</h6>
                        </div>
                        <input type="date" class="form-control" id="event_date" value="{{ $event->event_date }}"
                            name="event_date" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-clock"></i>
                            <h6>Event Start Time</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ $event->eventStart_time }}"
                            id="eventStart_time" name="eventStart_time" placeholder="e.g. 11:30 am" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-clock"></i>
                            <h6>Event End Time</h6>
                        </div>
                        <input type="text" class="form-control" id="eventEnd_time" value="{{ $event->eventEnd_time }}"
                            name="eventEnd_time" placeholder="e.g. 04:00 pm" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fas fa-location"></i>
                            <h6>Location</h6>
                        </div>
                        <input type="text" class="form-control" id="event_location"
                            value="{{ $event->event_location }}" name="event_location" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-user"></i>
                            <h6>organizer</h6>
                        </div>
                        <input type="text" class="form-control" id="event_organizer"
                            value="{{ $event->event_organizer }}" name="event_organizer" placeholder="e.g. John Doe" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fas fa-users"></i>
                            <h6>Total Slots</h6>
                        </div>
                        <input type="text" class="form-control" id="total_slots" value="{{ $event->total_slots }} "
                            name="total_slots" placeholder="e.g. 100" />
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-lock"></i>
                            <h6>Booked Slots</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ $event->booked_slots }}" id="booked_slots"
                            name="booked_slots" />
                    </div>

                    <button type="submit" class="admissionBtn">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
