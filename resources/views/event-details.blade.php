@extends('layouts.web')
@section('content')
    <section class="main-section">
        <div class="container-fluid event-header">
            <p>{{ $eventDetails->event_category }}</p>
            <div class="underline mt-1">
                <h3 style="text-align: center"> <strong class="favColor fs-1">{{ $eventDetails->event_title }} </strong> </h3>
            </div>
        </div>

        {{-- <div class="container-fluid"> --}}
        <div class="container">
            {{-- <div class="row event-row"> --}}
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    {{-- <div class="about-event"> --}}
                    <div class="mt-1 mb-5">
                        <h3>About <strong class="favColor fs-4">{{ $eventDetails->event_title }} </strong></h3>
                    </div>
                    <p>
                        {!! $eventDetails->event_description !!}
                    </p>

                    @if ($eventDetails->file != null)
                        <div class="mb-5 mt-3">
                            <a target="_blank" href="{{ route('event-attachment-preview', $eventDetails->file) }}">
                                <button class="btn favbg text-white">
                                    Preview Attachment <i class="fa fa-download" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    @endif

                    {{-- </div> --}}
                    <div class="event-speaker">
                        <div class="underline mt-1 mb-3">
                            <h3 class="text-center favColor fw-bold ">Event Host</h3>
                        </div>

                        <div class="speaker-profile">
                            <img src="{{ asset('images/eventSpeakerImages/' . $eventDetails->speaker_photo) }}"
                                alt="{{ $eventDetails->speaker_photo }}" class="img-fluid">
                            <div class="speaker-details">
                                <h5>{{ $eventDetails->speaker_fullname }}</h5>
                                <label
                                    class="fw-bold text-primary fst-italic ">{{ $eventDetails->speaker_profession }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 other-event-det">
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-bill"></i>
                            <h6>Cost</h6>
                        </div>
                        <label>{{ $eventDetails->event_cost }}</label>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-calendar"></i>
                            <h6>Event Date</h6>
                        </div>
                        <label>{{ $eventDetails->event_date }}</label>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-clock"></i>
                            <h6>Event Time</h6>
                        </div>
                        <label>{{ $eventDetails->eventStart_time }}</label>
                    </div>
                    <div class="event-detail flex-column align-items-start">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <h6>Location</h6>
                        </div>
                        <label>{{ $eventDetails->event_location }}</label>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-user"></i>
                            <h6>organizer</h6>
                        </div>
                        <label>{{ $eventDetails->event_organizer }}</label>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-users"></i>
                            <h6>Total Slots</h6>
                        </div>
                        <label>{{ $eventDetails->total_slots }}</label>
                    </div>
                    <div class="event-detail">
                        <div>
                            <i class="fa fa-lock"></i>
                            <h6>Booked Slots</h6>
                        </div>
                        <label>{{ $eventDetails->booked_slots }}</label>
                    </div>
                    {{-- <div class="event-detail exp-flag">
                                <p style="margin: 5px 20px">
                                    This event has already expired
                                </p>
                            </div>
                            <div class="event-detail event-socials">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-tumblr"></i>
                                <i class="fa fa-envelope"></i>
                            </div> --}}
                </div>
            </div>
        </div>
    </section>

    <script>
        const eventsTable = document.querySelector('.events-table')

        window.addEventListener('load', () => {
            eventsTable.style.display = 'block'
        })
    </script>
@endsection
