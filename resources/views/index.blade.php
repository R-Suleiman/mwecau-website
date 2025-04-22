@extends('layouts.web')
@section('content')
    <!-- Homepage section 22 -->
    <div class="homeSlider">

        @if (count($images) > 0)
            @foreach ($images as $index => $image)
                @if ($image->page == 'home' && $image->image_section == 'homeslider')
                    <div class="{{ $index === 0 ? 'active' : '' }}">
                        @if ($image->type == 'image')
                            <img src="{{ asset('images/pageImages/' . $image->image) }}" class="d-block w-100"
                                alt="{{ $image->header }}" />
                        @elseif ($image->type == 'video')
                            <div class="vid">
                                <video width="100%" autoplay loop muted>
                                    <source src="{{ asset('images/pageImages/' . $image->image) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="overlay">
                                    <div class="center-div">
                                        <div class="text-white text-center">
                                            <h1>{{ $image->header }}</h1>
                                            <p>{{ $image->sub_header }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        @endif

    </div>

    <!-- Welcome section -->
    <section>
        <div class="container mt-5 mb-3">
            <div class="row g-lg-5">
                <div class="col-md-3 col-lg-3 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Rev.Prof. Philbert Vumilia</p>
                        <p>Vice Chancellor</p>
                    </div>
                </div>

                <div
                    class="welcomeImgContainer col-12 col-md-9 col-lg-8 d-flex flex-column justify-content-center align-items-center">
                    <h4>Welcome to Mwenge Catholic University</h4>
                    <p style="line-height: 2rem; text-align: justify;">
                        {!! $part1 !!} {!! Str::limit($part2, 400) !!}
                        <a href="{{ route('about') }}" class="fw-bold favColor">
                            <button class="btn favbg text-white">
                                Read More <i class="fa fa-arrow-circle-right text-white" aria-hidden="true"></i>
                            </button>
                        </a>
                    </p>
                </div>


            </div>
        </div>
    </section>

    <!-- news and updates section -->
    <section>
        <div class="container">
            <h4>Latest News and Updates</h4>
            <div class="news-main-div" style="width: 100%;">
                <div class="news-small-div" style="width: 100%">
                    {{-- <h5 class="favColor">Latest</h5> --}}
                    <div class="card border-0" style="width: 100%">
                        @if ($announcements)
                            @foreach ($announcements->take(1) as $event)
                            <img class="img-fluid w-75 text-center"
                            src="{{ $event->thumbnail ? asset('/images/announcementImages/' . $event->thumbnail) : asset('img/LATEST1.jpg') }}"
                            alt="Event Thumbnail"
                            style="border: 1px solid #513f83; border-radius: 7px;">


                                <div class="card-body">
                                    <h6 class="card-title text-uppercase fw-bold favColor">
                                        <a
                                            href="{{ route('announcement-details', [$event->name]) }}">{{ $event->name }}</a>
                                    </h6>
                                    <p class="card-text fst-italic">{!! Str::limit($event->description, 50) !!}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="news-small-div" style="width: 100%;">
                    <h5 class="favColor">Other University Updates</h5>
                    @if ($announcements->count() > 0)
                        @foreach ($announcements->take(4) as $UniversityEvent)
                            <div class="card mb-2" style="width: 100%">
                                <div class="card-body">
                                    <h6 class="card-title favColor">
                                        <img src="{{ asset('img/new_icon.png') }}" alt=""
                                            style="width: 40px; vertical-align: middle;">
                                        <a
                                            href="{{ route('announcement-details', [$UniversityEvent->name]) }}">{{ $UniversityEvent->name }}</a>
                                    </h6>
                                    <small class="fw-bold text-secondary">{{ $UniversityEvent->posting_date }}</small>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <span class="alert alert-warning" role="alert"><strong>No news currently
                                    posted.</strong></span>
                        </div>
                    @endif
                    <div class="text-end mt-5">
                        <a href="{{ route('university.news.updates') }}"><button class="newsBtn text-end"> View all News <i
                                    class="fa fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose MWECAU section -->
    <section>
        <div class="container my-5  text-center rounded">
            {{-- <div class="container my-5  text-center rounded" data-aos="fade-up" data-aos-duration="2000"> --}}
            <div class="row g-2 justify-content-around align-items-start">
                <div class="mb-5 ">
                    <div class="underline">
                        <h1>Why Choose <span class="favColor fw-bold">MWECAU</span></h1>
                    </div> <br>
                    <span>We are one of the most robust and diverse universities in Tanzania.</span>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="whyChooseUS-card card">
                        <div class="card-body">
                            <i class="favColor fa fa-users display-3"></i>
                            <div class="card-text mt-5">
                                <h5>Academics <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    At Mwenge Catholic University, inspiring academic learning is fostered through a
                                    rigorous curriculum that emphasizes critical thinking, research, and practical
                                    application.
                                </p>
                                <div class="mb-3">
                                    <a href="{{ route('academics') }}">
                                        <button class="whyButtons"> Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="whyChooseUS-card card">
                        <div class="card-body">
                            <i class="favColor fa fa-file-invoice-dollar display-3"></i>
                            <div class="card-text mt-5">
                                <h5>Inspiring Student Life <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    Our residential systems and facilities creates more opportunities for learning with
                                    peers and
                                    professors from different backgrounds.
                                </p>
                                <div class="mb-3">
                                    <a href="{{ route('campus-life') }}"><button class="whyButtons"> Read More <i
                                                class="fas fa-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="whyChooseUS-card card">
                        <div class="card-body">
                            <i class="favColor fa fa-graduation-cap display-3"></i>
                            <div class="card-text mt-5 ">
                                <h5>Qualified Staffs <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    Mwenge Catholic University is supported by over 200 highly qualified academic and
                                    administrative staff, dedicated to providing quality education and services to its
                                    students.
                                </p>
                                <div class="mb-3">
                                    <a href="{{ route('mwecau-academic-staff') }}"><button class="whyButtons"> Read More
                                            <i class="fas fa-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- explore more section -->
    <section>
        <div class="explore">
            <div class="exploretxt">
                <h1 class="text-lg-start text-uppercase fw-bold">We are Mwenge Catholic <br> University</h1>
                <p class="text-lowercase">
                    We are Different,
                    WE MAKE LEARNING MORE RELEVANT, AND TRANSFORMATIONAL.
                </p>
                <div class="text-lg-end">
                    <a href="https://uas.mwecau.ac.tz" target="_blank"><button class="exploreBtn">Call for
                            Application 2024/2025<i class="fa fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- studying at Mwenge Catholic University -->
    <section>
        <div class="container text-center my-3 py-3">
            <div class="row justify-content-around align-items-start">
                <div class="mb-3">
                    <div class="underline">
                        <h1 class="favColor">Study at Mwenge Catholic University</h1>
                        <h5>Leaders in a complex world - </h5> <small class="fst-italic"> "Lux Mundi" - Light of the
                            world</small>
                    </div>
                </div>

                @if (count($images) > 0)
                    {{-- @php
                        // Array of animation classes
                        $animations = ['fade-down', 'fade-right', 'fade-up', 'fade-down', 'fade-in'];
                    @endphp --}}
                    @foreach ($images as $index => $image)
                        @if ($image->page == 'home' && $image->image_section == 'homeprograms')
                            {{-- <div class="col-md-4 mb-4" data-aos="{{ $animations[$index % count($animations)] }}" --}}
                            <div class="col-md-4 mb-4" data-aos-duration="2000">
                                <div class="card bottomBorder studyingAtMwenge darkMode">
                                    <div class="card-body">
                                        <img src="{{ asset('/images/pageImages/' . $image->image) }}"
                                            style="width: 100%; border-radius: 8px;" alt="Course">
                                        <div class="card-text mt-3">
                                            <h4 class="favColor">{{ $image->header }}</h4>
                                            <p>{{ $image->description }}</p>
                                        </div>
                                        <div class="mt-3">
                                            @php
                                                $route = '';
                                                if ($image->header == 'Postgraduate Admissions') {
                                                    $route = route('programmeCategory', 'post-graduate');
                                                } elseif ($image->header == 'Undergraduate Admissions') {
                                                    $route = route('programmeCategory', 'undergraduate');
                                                } elseif ($image->header == 'Non-Degree Admissions') {
                                                    $route = route('programmeCategory', 'non-degree');
                                                }
                                            @endphp
                                            <a href="{{ $route }}">
                                                <button class="programsBtn mt-lg-5">{{ $image->header }}</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif

            </div>
        </div>
    </section>

    <!-- upcoming events section -->
    <section>
        <div class="container text-center my-3 p-3">
            <div class="row justify-contents-around align-items-center">
                <div class="mb-3">
                    <div class="underline">
                        <h1>Upcoming Events</h1>
                    </div>
                </div>

                <div class="container-fluid mt-5 mb-5">
                    @if ($UniversityEvents->isNotEmpty())
                        <div class="row gallery g-5">
                            @foreach ($UniversityEvents->sortByDesc('created_at')->take(4) as $UniversityEvent)
                            <div class="upComingEvent2 col-12 col-md-6 col-lg-3 mb-3">
                                    <a href="{{ route('event-details', $UniversityEvent->event_title) }}"
                                        class="text-decoration-none">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                @if ($UniversityEvent->event_image == null)
                                                    <img src="{{ asset('img/mwecau.png') }}" alt="Default Image"
                                                        class="img-fluid mx-auto d-block" style="width: 30%;">
                                                @else
                                                    <img src="{{ asset('images/eventImages/' . $UniversityEvent->event_image) }}"
                                                        class="img-fluid" style="width: 100%;" alt="Event Image">
                                                @endif

                                            </div>
                                            <div class="card-text">
                                                <p>
                                                <h6 class="fst-italic fw-bold favColor">
                                                    {{ $UniversityEvent->event_title }}
                                                </h6>
                                                </p>
                                                <div class="fst-italic text-decoration-underline ">
                                                    {{ $UniversityEvent->event_date }}
                                                    {{-- {{ $UniversityEvent->eventEnd_time }} --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <span class="alert alert-warning">There are no upcoming university events at the moment. Please
                            check back soon for new updates!</span>
                    @endif
                </div>

            </div>
            @if ($UniversityEvents->isNotEmpty())
                <div class="">
                    <a href="{{ route('university.events') }}"><button class="eventsBtn"> More Mwecau Events <i
                                class="fas fa-arrow-right"></i></button></a>
                </div>
            @endif

        </div>
    </section>

    <!-- gallery -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row gallery">
            @if ($galleryImages)
                @foreach ($galleryImages as $galleryImage)
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="{{ asset('/images/pageImages/' . $galleryImage->image) }}" alt="">
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    {{-- our partners --}}
    <section>
        <div class="container text-center mt-5 mb-5">
            <div class="underline mt-2 " style="width: 100%;">
                <h2> Partner Institutions</h2>
            </div>
            <div class="row justify-content-between align-items-start partners">
                @if ($partnersImages)
                    @foreach ($partnersImages as $partnersImage)
                        <div class="col-6 col-lg-2 col-md-4 partner">
                            <a href="{{ $partnersImage->link }}"><img
                                    src="{{ asset('/images/pageImages/' . $partnersImage->image) }}" alt=""></a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
