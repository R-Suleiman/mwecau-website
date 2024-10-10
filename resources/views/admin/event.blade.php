@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <form class="row event-row" action="{{ route('admin.create.event') }}" method="POST" enctype="multipart/form-data">
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
                            <div>
                                <input type="text" value="{{ old('event_title') }}"
                                    class="form-control @error('event_title') is-invalid @enderror" id="event_title"
                                    name="event_title" placeholder="Event Title" />
                                @error('event_title')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div>
                                <select name="event_category" id="event_category"
                                    class="form-control @error('event_category') is-invalid @enderror">
                                    <option value="">Select category of the event</option>
                                    <option value="academic">Academic</option>
                                    <option value="clubsOrganizations">Clubs & Organization</option>
                                    <option value="sportsEntertainment">Sports & Entertainment</option>
                                    <option value="culture">Culture</option>
                                    <option value="creativityTalents">Creativity & Talents</option>
                                </select>
                                @error('event_category')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                        <div>
                            <textarea name="event_description" id="event_description" cols="50" rows="5"
                                class="form-control darkMode @error('event_description') is-invalid  @enderror" placeholder="Event Description">{{ old('event_description') }}</textarea>
                            @error('event_description')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label>Event Image</label> <br />
                        <input type="file" class="form-control @error('event_image') is-invalid @enderror"
                            id="event_image" name="event_image" />

                        <div>
                            <span class="text-danger">
                                @error('event_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

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
                            <input type="text" class="form-control" id="speaker_fullname"
                                value="{{ old('speaker_fullname') }}" name="speaker_fullname" placeholder="Full Name" />
                            <div>
                                <span class="text-danger">
                                    @error('speaker_fullname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <input type="text" class="form-control @error('speaker_profession') is-invalid  @enderror"
                                id="speaker_profession" name="speaker_profession" value="{{ old('speaker_profession') }}"
                                placeholder="Profession" />
                            <div>
                                <span class="invalid-feedback" role="alert">
                                    @error('speaker_profession')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <textarea class="form-control @error('speaker_info') is-invalidd @enderror" id="speaker_info" name="speaker_info"
                            cols="50" rows="5" placeholder="A brief about of the Speaker/Organizer">{{ old('speaker_info') }}</textarea>
                        <div>
                            <span class="text-danger">
                                @error('speaker_info')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
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
                        <input type="text" class="form-control" value="{{ old('event_cost') }}" id="event_cost"
                            name="event_cost" placeholder="default: free" />
                        <div>
                            <span class="text-danger">
                                @error('event_cost')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-calendar"></i>
                            <h6>Event Date</h6>
                        </div>
                        <input type="date" class="form-control" value="{{ old('event_date') }}" id="event_date"
                            name="event_date" />
                        <div>
                            <span class="text-danger">
                                @error('event_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-clock"></i>
                            <h6>Event Start Time</h6>
                        </div>
                        <input type="text" class="form-control" id="eventStart_time"
                            value="{{ old('eventStart_time') }}" name="eventStart_time" placeholder="e.g. 11:30 am" />
                        <div>
                            <span class="text-danger">
                                @error('eventStart_time')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-clock"></i>
                            <h6>Event End Time</h6>
                        </div>
                        <input type="text" class="form-control" id="eventEnd_time"
                            value="{{ old('eventEnd_time') }}" name="eventEnd_time" placeholder="e.g. 04:00 pm" />
                        <div>
                            <span class="text-danger">
                                @error('eventEnd_time')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fas fa-location"></i>
                            <h6>Location</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ old('event_location') }}"
                            id="event_location" name="event_location" />
                        <div>
                            <span class="text-danger">
                                @error('event_location')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-user"></i>
                            <h6>organizer</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ old('event_organizer') }}"
                            id="event_organizer" name="event_organizer" placeholder="e.g. John Doe" />
                        <div>
                            <span class="text-danger">
                                @error('event_organizer')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fas fa-users"></i>
                            <h6>Total Slots</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ old('total_slots') }}" id="total_slots"
                            name="total_slots" placeholder="e.g. 100" />
                        <div>
                            <span class="text-danger">
                                @error('total_slots')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-lock"></i>
                            <h6>Booked Slots</h6>
                        </div>
                        <input type="text" class="form-control" value="{{ old('booked_slots') }}" id="booked_slots"
                            name="booked_slots" />
                        <div>
                            <span class="text-danger">
                                @error('booked_slots')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="admissionBtn">Post Event</button>
                </div>
            </div>
        </form>
    </div>
@endsection
