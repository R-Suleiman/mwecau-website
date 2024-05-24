<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mwenge Catholic University</title>
    @include('links')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>

<body>
    @include('preloader')
    @include('partials.navbar')
    <!-- Homepage section 22 -->
    <section>
        <!-- corousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/students1.JPG" class="d-block w-100 background-container" alt="studdents1" />
                    <div class="dark-overlay">
                        <div class="nav-content">
                            <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Discover the world of
                                possibility with MWECAU</h1>
                            <p>Call 2024 applications are now open</p>
                            <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                    class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                    2024/2025</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/university-image1.JPG" class="d-block w-100 background-container"
                        alt="university-image1" />
                    <div class="dark-overlay">
                        <div class="nav-content">
                            <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Example Quickly get a
                                project started</h1>
                            <p>with any of our examples ranging from using parts of the
                                framework to custom components
                                and layouts.</p>
                            <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                    class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                    2024/2025</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/university-image2.JPG" class="d-block w-100 background-container"
                        alt="university-image2" />
                    <div class="dark-overlay">
                        <div class="nav-content">
                            <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Discover the world of
                                possibility with MWECAU</h1>
                            <p>Call 2024 applications are now open</p>
                            <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                    class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                    2024/2025</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- corousel end -->
        <!-- <div class="">
            <div class="landing-image">
                <div class="landing-text">
                    <h1>Welcome to Mwenge Catholic University</h1>
                    <p>Discover amazing products and services</p>
                </div>
            </div>
        </div> -->
    </section>


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
                    <h1 class="mb-3 mb-lg-0">News & Updates</h1>
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
                    <div class="mb-3">
                        <span class="text-secondary">Other University events.</span>
                    </div>
                    <div class="card secondCard border-0 team-slider darkMode"
                        style="overflow-y: auto;  border-right: 1px solid #513f83;">
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
                    {{-- @foreach ($latestEvent->slice(1, 2) as $latestEvent)
                        <div class="card">
                            <div> <img class="img-fluid w-75"
                                    src="{{ asset('images/eventImages/' . $latestEvent->event_image) }}"
                                    alt="" style=" border: 1px solid #513f83; border-radius: 7px;"></div>
                            <div class="card-body">
                                <h6 class="fw-bold card-title favColor">{{ $latestEvent->event_title }}</h6>
                                <p class="card-text fst-italic">{{ $latestEvent->event_description }}</p>
                            </div>
                        </div> <br>
                    @endforeach --}}

                </div>
            </div>
            <div class="text-end">
                <a href="{{ route('about') }}"><button class="newsBtn text-end"> View all News <i
                            class="fa fa-arrow-right"></i></button></a>
            </div>
        </div>
    </section>

    <!-- about us section -->
    <!-- <section>

    </section> -->
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
                        <h1>Studying at Mwenge Catholic University</h1>
                        <h5>Leaders in a complex world - </h5> <small class="fst-italic">Light of the world</small>
                    </div>


                </div>


                <div class="col-12 col-md-4 col-lg-4 mb-4" data-aos="fade-right" data-aos-duration="2000">
                    <div class="card bottomBorder studyingAtMwenge darkMode">
                        <div class="card-body">
                            <img src="img/students2.JPG" style="width: 100%; border-radius: 8px;" alt="Course">
                            <div class="card-text mt-5">
                                <h4>Postgraduate Admissions</h4>
                                Whatever you're seeking from your college experience, you'll find it at Mwenge Catholic
                                University.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="card bottomBorder studyingAtMwenge darkMode" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <img src="img/students1.JPG" style="width: 100%; border-radius: 8px;" alt="Course">
                            <div class="card-text mt-5">
                                <h4>Undergraduate Admissions</h4>
                                Whatever you're seeking from your college experience, you'll find it at Mwenge Catholic
                                University.
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card bottomBorder studyingAtMwenge darkMode">
                        <div class="card-body">
                            <img src="img/students3.jpg" style="width: 100%; border-radius: 8px;" alt="Course">
                            <div class="card-text mt-5">
                                <h4>Non-Degree Admissions</h4>
                                Whatever you're seeking from your college experience, you'll find it at Mwenge Catholic
                                University.
                            </div>
                        </div>
                    </div>
                </div>
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
                <a href=""><button class="eventsBtn"> More Mwecau Events <i
                            class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
    </section>
    <!-- including a site footer -->
    @include('partials.footer')
    @include('jslinks')






















    <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                                                                                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
@else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                                                                                    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div> -->
</body>

</html>
