@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="stats-box">
                <h3 class="title">Event</h3>
            </div>

            <div class="content-box event-box">
                <div class="category-content">
                    <div class=" container-fluid event-header">
                        <p>Category</p>
                        <h2 class="favColor">{{ $eventDetails->event_title }}</h2>
                        <div class="">
                            <img src="{{ asset('images/eventImages/' . $eventDetails->event_image) }}"
                                alt="{{ $eventDetails->event_image }}" class="h-15 img-fluid ">
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row event-row">
                            <div class="col-sm-12 col-lg-8">
                                <div class="about-event">
                                    <div class="underline mt-1 mb-5">
                                        <h3 style="text-align: center">About <strong
                                                class="favColor fs-4">{{ $eventDetails->event_title }} </strong> Event</h3>
                                    </div>
                                    <p>
                                        {{ $eventDetails->event_description }}
                                    </p>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Qui a facilis ut laborum, eligendi minus quod praesentium
                                        culpa odio maxime, dicta error perspiciatis quas sequi
                                        adipisci tempora. Illum, rerum beatae!
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Temporibus accusamus eveniet odio nihil maiores nesciunt
                                        aperiam! Consequatur ex, quod omnis recusandae error esse
                                        ad dolore perspiciatis sequi nisi! Qui, quisquam!
                                    </p>
                                </div>
                                <div class="event-speaker">
                                    <div class="underline mt-1 mb-3">
                                        <h3 class="text-center favColor fw-bold ">Our Speakers</h3>
                                    </div>

                                    <div class="speaker-profile">
                                        <img src="{{ asset('images/eventsImages/' . $eventDetails->speaker_photo) }}"
                                        alt="{{ $eventDetails->speaker_photo }}" class="img-fluid">
                                        <div class="speaker-details">
                                            <h5>{{ $eventDetails->speaker_fullname }}</h5>
                                            <label class="fw-bold text-primary fst-italic ">{{ $eventDetails->speaker_profession }}</label>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Esse, ducimus! Nulla, doloribus, excepturi quam
                                                quod recusandae mollitia ad, sit blanditiis fugiat
                                                pariatur accusamus ipsa! Magni dolorum reiciendis hic
                                                quis ratione!
                                            </p>
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
                                <div class="event-detail">
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
                                <div class="event-detail exp-flag">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
