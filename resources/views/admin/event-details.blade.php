@extends('layouts.admin')
@section('content')
    <div class="content-box event-box">
        <div class="category-content">
            <div class=" container-fluid event-header">
                <p>Category</p>
                <h2 class="favColor">{{ $eventDetails->event_title }}</h2>
                <div class="text-center" style="width: 100%; height: 300px; overflow-y: auto;">
                    <img src="{{ asset('images/eventImages/' . $eventDetails->event_image) }}"
                        alt="{{ $eventDetails->event_image }}" style="width: 100%; height: auto;">
                </div>


            </div>

            <div class="container-fluid ">
                <div class="row event-row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="about-event">
                            <div class="underline mt-1 mb-5">
                                <h3 style="text-align: center">About <strong
                                        class="favColor fs-4">{{ $eventDetails->event_title }} </strong></h3>
                            </div>
                            <p>
                                {!! $eventDetails->event_description !!}
                            </p>
                        </div>
                        <div class="event-speaker">
                            <div class="underline mt-1 mb-3">
                                <h3 class="text-center favColor fw-bold ">Event Host</h3>
                            </div>

                            <div class="speaker-profile">
                                <img src="{{ asset('images/eventsImages/' . $eventDetails->speaker_photo) }}"
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const eventsTable = document.querySelector('.events-table')

        window.addEventListener('load', () => {
            eventsTable.style.display = 'block'
        })
    </script>
    {{-- <script src="./sidebar.js"></script> --}}
@endsection
