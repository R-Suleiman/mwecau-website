@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">

            <!-- main content -->
            <div class="container">
                <div class="mt-5 col-4">
                    @if (session()->has('message'))
                        <span class="alert alert-success shadow">
                            {{ session('message') }}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    @if (session()->has('fail'))
                        <span class="alert alert-danger p-3 mt-5">
                            {{ session('fail') }}
                        </span>
                    @endif
                </div>
            </div>

            <div class="container-fluid">
                <form class="row event-row" action="{{ route('admin.create.event') }}" method="POST"
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
                                        placeholder="Event Title" />


                                    <select name="event_category" id="event_category"
                                        class="form-control darkMode @error('event_category') is-invalid  @enderror">
                                        <option value="Event Category">-- Event Category --</option>
                                        <option value="academic">Academic</option>
                                        <option value="clubsOrganizations">Clubs & Organization</option>
                                        <option value="sportsEntertainment">Sports & Entertainment</option>
                                        <option value="culture">Culture</option>
                                        <option value="creativityTalents">Creativity & Talents</option>
                                    </select>

                                    @error('event_category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <textarea name="event_description" id="event_description" cols="50" rows="5"
                                    class="form-control darkMode @error('event_description') is-invalid  @enderror" placeholder="Event Description"></textarea>

                                <div>
                                    <span class="text-danger">
                                        @error('event_description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <label>Event Image</label> <br />
                                <input type="file"
                                    class="form-control darkMode @error('event_image') is-invalid @enderror"
                                    id="event_image" name="event_image" />

                                <div>
                                    <span class="text-danger">
                                        @error('event_image')
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
                                    <input type="text" class="form-control" id="speaker_fullname" name="speaker_fullname"
                                        placeholder="Full Name" />
                                    <input type="text" class="form-control" id="speaker_profession"
                                        name="speaker_profession" placeholder="Profession" />
                                </div>
                                <textarea class="form-control" id="speaker_info" name="speaker_info" cols="50" rows="5"
                                    placeholder="A brief about of the Speaker/Organizer"></textarea>
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
                                <input type="text" class="form-control" id="event_cost" name="event_cost"
                                    placeholder="default: free" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fa fa-calendar"></i>
                                    <h6>Event Date</h6>
                                </div>
                                <input type="date" class="form-control" id="event_date" name="event_date" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fa fa-clock"></i>
                                    <h6>Event Start Time</h6>
                                </div>
                                <input type="text" class="form-control" id="eventStart_time" name="eventStart_time"
                                    placeholder="e.g. 11:30 am" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fa fa-clock"></i>
                                    <h6>Event End Time</h6>
                                </div>
                                <input type="text" class="form-control" id="eventEnd_time" name="eventEnd_time"
                                    placeholder="e.g. 04:00 pm" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fas fa-location"></i>
                                    <h6>Location</h6>
                                </div>
                                <input type="text" class="form-control" id="event_location" name="event_location" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fa fa-user"></i>
                                    <h6>organizer</h6>
                                </div>
                                <input type="text" class="form-control" id="event_organizer" name="event_organizer"
                                    placeholder="e.g. John Doe" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fas fa-users"></i>
                                    <h6>Total Slots</h6>
                                </div>
                                <input type="text" class="form-control" id="total_slots" name="total_slots"
                                    placeholder="e.g. 100" />
                            </div>
                            <div class="event-detail">
                                <div>
                                    <i class="fa fa-lock"></i>
                                    <h6>Booked Slots</h6>
                                </div>
                                <input type="text" class="form-control" id="booked_slots" name="booked_slots" />
                            </div>

                            <button type="submit" class="admissionBtn">Post Event</button>

                            <!-- <div class="event-detail exp-flag">
                    <p style="margin: 5px 20px">This event has already expired</p>
                  </div>
                  <div class="event-detail event-socials">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-tumblr"></i>
                    <i class="fa fa-envelope"></i>
                  </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>)
@endsection
