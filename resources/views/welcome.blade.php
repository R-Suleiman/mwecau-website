<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mwenge Catholic University</title>
    @include('links')
</head>

<body>
    @include('preloader')
    @include('partials.navbar')
    <!-- Homepage section 22 -->

    <div class="homeSlider">
        @if (count($images) > 0)
            @foreach ($images as $index => $image)
                @if ($image->page == 'home' && $image->image_section == 'homeslider')
                    <div class="{{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/pageImages/' . $image->image) }}" class="d-block w-100"
                            alt="{{ $image->header }}" />
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    {{-- <section>
        <div class="">
            @if (count($images) > 0)
            @foreach ($images as $index => $image)
                @if ($image->page == 'home' && $image->image_section == 'homeslider')
                    <div class="{{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/pageImages/' . $image->image) }}" width="1772"
                            height="470" class="d-block w-100 background-container"
                            alt="{{ $image->header }}" />
                        <div class="dark-overlay">
                            <div class="nav-content">
                                <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">
                                    {{ $image->header }}
                                </h1>
                                <p>{{ $image->sub_header }}</p>
                                <a href="https://uas.mwecau.ac.tz" target="_blank">
                                    <button class="admissionBtn fs-5 animate__animated animate__fadeInRight">
                                        Admissions 2024/2025
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
          </div>
    </section> --}}

    <!-- Welcome section -->
    <section>
        <div class="container mt-5 mb-3">
            <div class="row g-lg-5">
                <div class="col-md-3 col-lg-3 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Prof. Philibert Vumilia</p>
                        <p>Vice Chancellor</p>
                    </div>
                </div>

                <div class="welcomeImgContainer col-md-9 col-lg-8">
                    <h4>Welcome to Mwenge Catholic University</h4>
                    <p style="text-align: justify; line-height: 2rem;">
                        Welcome to Mwenge Catholic University (MWECAU), a University that gives you the opportunity to
                        pursue quality education
                        in truthfulness and freedom of thought, so that you may gain professional competency to boldly
                        serve and contribute to the development of humanity.

                        In order to prepare for your future career or pursue academic and professional advancement, be
                        it education,
                        administration, sciences, law and/or social sciences, think of MWECAU as your best choice.
                        Our thoroughly tested
                        programmes offer you an intellectual and social engagement to form you into a critical-thinking
                        citizen presently needed
                        by society. <a href="{{ route('about') }}"> Read More <i class="fa fa-arrow-right"></i></a>
                        {{-- Our business administration, marketing and accounting programmes will prepare you to
                        engage in the business
                        world, as an entrepreneur or work in any of the many financial institutions. --}}
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{--
    <!-- Welcome section -->
    <section>
        <div class="container mt-3 mb-5">
            <div class="row g-lg-5 ">
                <div class="col-12 col-lg-5">
                    <h4>Welcome to Mwenge Catholic University</h4>
                    <p style="text-align: justify; line-height: 2rem;">
                        Welcome to Mwenge Catholic University (MWECAU), a University that gives you the opportunity to
                        pursue quality education
                        in truthfulness and freedom of thought, so that you may gain professional competency to boldly
                        serve and contribute to the development of humanity.

                        In order to prepare for your future career or pursue academic and professional advancement, be
                        it education,
                        administration, sciences, law and/or social sciences, think of MWECAU as your best choice.
                        <!-- Our thoroughly tested
                        programmes offer you an intellectual and social engagement to form you into a critical-thinking
                        citizen presently needed
                        by society. Our business administration, marketing and accounting programmes will prepare you to
                        engage in the business
                        world, as an entrepreneur or work in any of the many financial institutions. -->
                    </p>
                    <a href="{{ route('about') }}"><button class="welcomeBtn mb-3 "> Read More <i
                                class="fa fa-arrow-right"></i></button></a>
                </div>

                <div class="welcomeImgContainer col-12 col-lg-7">
                    <div class="image-container">
                        <img src="img/university-image3.JPG" alt="Welcome at Mwecau"
                            style="width:100%; border: 1px solid #513f83; border-radius: 7px;">
                        <img class="overlay-image img-fluid  shadow-lg" src="img/students1.JPG" alt="Overlay Image"
                            style="width: 50%;">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- news and updates section -->
    <section class="mt-5 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="underline col-lg-6">
                    <h2 class="mb-3 mb-lg-0">News & Updates</h2>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-md-12 col-lg-8">
                    @foreach ($latestEvent->take(1) as $event)
                        <div class="container">
                            <div class="mb-3">
                                <span class="text-secondary">Latest event</span>
                            </div>

                            <div class="image-containerNews mb-5">
                                <img class="img-fluid w-75"
                                    src="{{ asset('images/eventImages/' . $event->event_image) }}" alt=""
                                    style=" border: 1px solid #513f83; border-radius: 7px;">
                                <div class="overlay-newsImage shadow-lg">
                                    <div class="card">
                                        <div class="card-body p-3">

                                            <h6 class="card-title text-uppercase favColor">
                                                <a
                                                    href="{{ route('event-details', [$event->id]) }}">{{ $event->event_title }}</a>
                                            </h6>
                                            <p class="card-text fst-italic">{{ $event->event_description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-12 col-md-6 col-lg-4 secondCard" style="overflow-x: auto; height: 499px;">
                    <div class="card secondCard border-0 team-slider darkMode"
                    style="overflow-y: auto;  border-right: 1px solid #513f83;">
                        <span class="text-secondary">Other University events.</span>

                        @if ($UniversityEvents->count() > 0)
                            @foreach ($UniversityEvents as $UniversityEvent)
                                <div class="card-body">
                                    <h6 class="card-title favColor">
                                        <a class="darkMode"
                                            href="{{ route('event-details', [$UniversityEvent->id]) }}">{{ $UniversityEvent->event_title }}
                                    </h6>
                                    <small
                                        class="fw-bold card-title text-secondary">{{ $UniversityEvent->event_date }}</small>
                                </div>
                            @endforeach
                        @else
                            <div>
                                <span class="alert alert-warning" role="alert"><strong>Currently there is no
                                        university
                                        event regitered.</strong></span>
                            </div>
                        @endif

                    </div>

                </div>

            </div>
            <div class="text-end">
                <a href="{{ route('university.news.updates') }}"><button class="newsBtn text-end"> View all News <i
                            class="fa fa-arrow-right"></i></button></a>
            </div>
        </div>
    </section>

    </section>
    <!-- why choose us section -->
    <section>
        <div class="container my-5  text-center rounded" data-aos="fade-up" data-aos-duration="2000">
            <div class="row g-2 justify-content-around align-items-start">
                <div class="mb-5 ">
                    <div class="underline">
                        <h1>Why Choose Us?</h1>
                    </div> <br>
                    <span>We Are One of The Largest, Most Diverse Universities in The Tanzania</span>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="mission-card card darkMode">
                        <div class="card-body">
                            <i class="favColor fa fa-users display-3"></i>
                            <div class="card-text mt-5">
                                <h5>Academics <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    An education at Mwecau has limitless possibilities. Our courses are taught by
                                    esteemed
                                    faculty members.
                                </p>
                                <div class="mb-3">
                                    <a href="{{ route('academics') }}"><button class="whyButtons"> Read More <i
                                                class="fas fa-arrow-right"></i> </button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="mission-card card darkMode">
                        <div class="card-body">
                            <i class="favColor fa fa-file-invoice-dollar display-3"></i>
                            <div class="card-text mt-5">
                                <h5>Inspiring Student Life <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    Our residential system creates more opportunities for learning with peers and
                                    professors
                                    from different backgrounds.
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
                    <div class="mission-card card darkMode">
                        <div class="card-body">
                            <i class="favColor fa fa-graduation-cap display-3"></i>
                            <div class="card-text mt-5 ">
                                <h5>Qualified Staffs <i class="fa fa-circle-check favColor"></i></h5>
                                <p>
                                    Our financial aid program makes Mwenge Catholic University affordable for every
                                    family
                                    throughout
                                    Africa and worldwide.
                                </p>
                                <div class="mb-3">
                                    <a href="{{ route('mwecau-staffs') }}"><button class="whyButtons"> Read More <i
                                                class="fas fa-arrow-right"></i></button></a>
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
                <h1 class="text-lg-start">We're Mwenge Catholic <br> University</h1>
                <p class="text-lowercase">
                    We're Diffirent
                    WE ARE MAKING LEARNING MORE RELEVANT AND TRANSFORMATIONAL.
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
                    @php
                        // Array of animation classes
                        $animations = ['fade-down', 'fade-right', 'fade-up', 'fade-left', 'fade-in'];
                    @endphp
                    @foreach ($images as $index => $image)
                        @if ($image->page == 'home' && $image->image_section == 'homeprograms')
                            <div class="col-md-4 mb-4" data-aos="{{ $animations[$index % count($animations)] }}"
                                data-aos-duration="3000">
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
                                                } elseif ($image->header == 'Non-Degree Admission') {
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
                <div class="col-12 col-md-12 col-lg-6 mb-4">
                    <div class="upComingEvent">
                        <div class="upComingEventText">
                            <div class="mb-5 ">
                                <a href="about.html"><button class="eventsBtn1 fw-bold fs-5 fst-italic "> 19 Apr
                                    </button></a>
                            </div>
                            <p class="fs-4">
                                <a href="about.html" class="text-decoration-none text-light ">Bachelor Degree Admitted
                                    Applicants Round 1... </a>

                            </p>
                            <div class="fst-italic text-decoration-underline ">
                                2:30 PM - 3:30 PM
                            </div>
                        </div>
                    </div>
                    <!-- <img src="img/study1.jpg" style="width: 100%;" alt=""> -->
                </div>

                <div class="upComingEvent2 col-12 col-md-6 col-lg-3 mb-3">
                    <a href="about.html" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body"> <img src="img/mwecau.jpg" style="width: 100%;" alt="">
                            </div>
                            <div class="card-text">
                                <p>
                                <h6 class="fst-italic fw-bold favColor">CHRISTMAS BREAK</h6>
                                </p>
                                <div class="fst-italic text-decoration-underline ">
                                    2:30 PM - 3:30 PM
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="upComingEvent2 col-12 col-md-6 col-lg-3 mb-3">
                    <a href="about.html" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body"> <img src="img/university-image-4.JPG" style="width: 100%;"
                                    alt="">
                                <div class="card-text">
                                    <p>
                                    <h6 class="fst-italic fw-bold favColor">The 16 MWECAU Graduation Ceremony </h6>
                                    </p>
                                    <div class="fst-italic text-decoration-underline ">
                                        2:30 PM - 3:30 PM
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>

                </div>
            </div>
            <div class="">
                <a href="{{ route('university.events') }}"><button class="eventsBtn"> More Mwecau Events <i
                            class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
    </section>
    <!-- including a site footer -->
    @include('partials.footer')
    @include('jslinks')
</body>

</html>
