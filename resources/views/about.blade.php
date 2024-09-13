<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | About Us</title>
    <!--slick  slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('links')
</head>

<body>
    <!-- partners -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    @include('partials.navbar')

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
                <img src="/img/mwecau_image3.JPG" class="d-block w-100 background-container" alt="..." />
                <img src="/img/mwecau_image3.JPG" class="d-block w-100 background-container" alt="..." />
                <div class="dark-overlay">
                    <div class="nav-content">
                        <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Discover the world of
                            possibility with MWECAU</h1>
                        <p style="color: white;">Fall 2024 applications are now open</p>
                        <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                2024/2025</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mwecau_image5.JPG" class="d-block w-100 background-container" alt="..." />
                <img src="/img/mwecau_image5.JPG" class="d-block w-100 background-container" alt="..." />
                <div class="dark-overlay">
                    <div class="nav-content">
                        <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Discover the world of
                            possibility with MWECAU</h1>
                        <p>Fall 2024 applications are now open</p>
                        <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                2024/2025</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{-- <img src="../i" alt=""> --}}
                <img src="/img/mwecau_image1.JPG" class="d-block w-100 img-fluid background-container" alt="..." />
                <div class="dark-overlay">
                    <div class="nav-content">
                        <h1 class="display-4 fw-bold animate__animated animate__fadeInLeft">Discover the world of
                            possibility with MWECAU</h1>
                        <p>Fall 2024 applications are now open</p>
                        <a href="https://uas.mwecau.ac.tz" target="_blank"><button
                                class="admissionBtn fs-5 animate__animated animate__fadeInRight">Admissions
                                2024/2025</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev sliderArrows" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-ico" aria-hidden="true"> <i class="fa fa-arrow-circle-left fs-1 "
                    aria-hidden="true"></i> </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-ico sliderArrows" aria-hidden="true"> <i
                    class="fa fa-arrow-circle-right fs-1 " aria-hidden="true"></i> </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- main content -->
    <div class="container">
        <div class="row g-0">
            <h2 class="text-center"> {{ $header }}</h2>
            <div class="col-md col-lg 6 lh-">
                <p class="lh-1 fs-1">
                    {!! $part1 !!}
                </p>
            </div>
            <div class="col-md col-lg 6">
                {!! $part2 !!}
                <p>

                </p>
            </div>
        </div>
    </div>
    {{-- <div class="container about-container text-center ">
        <div class="underline mt-2 mb-3 " style="width: fit-content; margin-left: 0">
            <h2 style="text-align: center; ">

            </h2>
        </div>
        <div class="row gap-4">
            <div class="col-sm-5 ">

            </div>
            <div class="col-sm-5 ">

            </div>
        </div>
    </div> --}}

    <div class="container-fluid about-container text-center ">
        <div class="row mission-block">
            <div class="underline mt-0 mb-5 ">
                <h2 class="text-center">
                    MWECAU Mission and Vision
                </h2>
            </div>

            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="mission-card card d-flex flex-column darkMode" style="width: 100%; border: none; ">
                    <div class="card-body" style="border-radius: 10px">
                        <i class="fa fa-eye display-5 mb-3 icons"></i>
                        <h5 class="card-title">Vision</h5>
                        <div class="card-text text-start">
                            <strong>Vision </strong>is to be a “leading University that sets a national,
                            regional, and international example in Education and Training,
                            Research, and Consulting as well as Community Service.”
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                <div class="mission-card card d-flex flex-column darkMode" style="width: 100%; border: none; ">
                    <div class="card-body" style="border-radius: 10px">
                        <i class="text-center fa fa-bullseye display-5 mb-3 icons"></i>
                        <h5 class="card-title text-center">Mission</h5>
                        <div class="card-text text-start">
                            <strong>The mission</strong> of the University is “to produce professionally
                            competent, innovative, and committed graduates who are grounded
                            on professional excellence and moral integrity for provision of
                            quality services to Tanzanian and the global community
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 col-sm-6 mb-5 ">
                <div class="mission-card card darkMode overflow-auto">
                    <div class="card-body" style="border-radius: 10px; width: 100%" id="card-body">
                        <i class="fa fa-file-text display-5 mb-3 icons" id="card-icon"></i>
                        <h5 class="card-title" id="card-title">Core values</h5>

                        <div class="accordion accordion-flush overflow-auto card-list" id="accordionFlushExample"
                            style="overflow-y:scroll; height: 210px;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed darkMode " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Integrity
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Trust
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Excellence
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                        Accountability
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        Respect
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">
                                        Teamwork
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed darkMode" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                        aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Service
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body darkMode">Mwenge Catholic University</div>
                                </div>
                            </div>

                        </div>

                        {{--
                        <div class="card-text text-dark text-start">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"></i> Integrity</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Trust</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Excellence</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Accountability</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Respect</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Teamwork</li>
                                <li><i class="fas fa-arrow-circle-right fs-5 favColor"
                                        style="margin-right: 10px;"></i> Service</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                <div class="mission-card card d-flex flex-column darkMode" style="width: 100%; border: none; ">
                    <div class="card-body" style="border-radius: 10px">
                        <i class="fa fa-pencil display-5 mb-3 icons"></i>
                        <h5 class="card-title">Motto</h5>
                        <div class="card-text text-start ">
                            The University is dedicated to St. Joseph the Worker, with the motto ‘‘Lux Mundi’’ which
                            translates in English to “Light of the World.”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- video -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg 3 col-md-2">
                <div class="card">
                    <div class="ratio ratio-16x9">

                        <iframe width="100%" height="550"
                            src="https://www.youtube.com/embed/kaI0KRVuo54?si=0vCoGxFQEUhnK68e"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg 3 col-md-2">
                <div class="card">
                    <div class="ratio ratio-16x9">

                        <iframe width="100%" height="550"
                            src="https://www.youtube.com/embed/kaI0KRVuo54?si=0vCoGxFQEUhnK68e"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg 3 col-md-2">
                <div class="card" style="width: 100%;">
                    <!-- Video Embed -->
                    <div class="ratio ratio-16x9">

                        <iframe width="100%" height="550"
                            src="https://www.youtube.com/embed/kaI0KRVuo54?si=0vCoGxFQEUhnK68e"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- <div class="container-fluid mb-5" style="margin: 10px">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/kaI0KRVuo54?si=0vCoGxFQEUhnK68e"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div> --}}

    <!-- counters -->
    {{-- counter --}}
    <div class="container-fluid my-5" style="background-color: white">
        <div class="row d-flex p-2 fs-4">
            <div class="favColor fw-bold col-3 d-flex flex-column align-items-center ">
                <span for="" id="establishedCount"></span>
                <label>Established</label>
            </div>
            <div class="favColor fw-bold col-3 d-flex flex-column align-items-center ">
                <span for="" id="facultyCount"></span>
                <label>Faculties</label>
            </div>
            <div class="favColor fw-bold col-3 d-flex flex-column align-items-center ">
                <span for="" id="studentsCount"></span>
                <label>Students</label>
            </div>
            <div class="favColor fw-bold col-3 d-flex flex-column align-items-center ">
                <span for="" id="gRareCount"></span>
                <label>Graduation Rate</label>
            </div>
        </div>
    </div>

    <!-- academics -->
    <div class="container text-center ">
        <div class="row academic-cont justify-content-around align-items-start ">
            <div class="underline mt-2 mb-5 ">
                <h2 class="">Life at MWECAU</h2>
            </div>
            <!-- your starts here -->
            <div class="col-sm-4 mb-5">
                <div class="mission-card card h-100 d-flex flex-column darkMode" style="width: 100%; border: none">

                    <div class="card-body ">
                        <img src="/img/mwecau.png" class="card-img-top img-fluid rounded-circle " alt="..."
                            style="width: 60%;">
                        <h5 class="card-title">Affordability</h5>
                        <div class="card-text text-start">
                            <p>
                                Some quick example text to build on the card
                                title and make up the bulk of the card's content.
                            </p>
                            <div class="text-center">
                                <a href="#"> <button class="missionBtn">Learn more</button> </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-5">
                <div class="card h-100 d-flex flex-column mission-card darkMode" style="width: 100%; border: none">
                    <div class="card-body">
                        <img src="/img/mwecau.png" class="card-img-top  img-fluid rounded-circle " alt="..."
                            style="width: 60%;">
                        <h5 class="card-title">Academics</h5>
                        <div class="card-text text-start">
                            <p>
                                An education at MWECAU has limitless possibilities.
                                Our courses are taught by esteemed faculty members.
                            </p>
                            <div class="text-center">
                                <a href="#"> <button class="missionBtn">Learn more</button> </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-5">
                <div class="card h-100 d-flex flex-column mission-card darkMode" style="width: 100%; border: none">
                    <div class="card-body">
                        <img src="/img/mwecau.png" class="card-img-top  img-fluid rounded-circle " alt="..."
                            style="width: 60%;">
                        <h5 class="card-title">Inspiring student's life</h5>
                        <div class="card-text text-start">
                            <p>
                                Our residential system creates more opportunities for learning with peers and professors
                                from different backgrounds.
                            </p>
                            <div class="text-center">
                                <a href="#"> <button class="missionBtn">Learn more</button> </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row gallery">
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/mwecau_image1.JPG" alt="">
                <img src="/img/mwecau_image1.JPG" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/mwecau_image2.JPG" alt="">
                <img src="/img/mwecau_image2.JPG" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/mwecau_image3.JPG" alt="">
                <img src="/img/mwecau_image3.JPG" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/mwecau_image4.JPG" alt="">
                <img src="/img/mwecau_image4.JPG" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/uni.jpg" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="/img/students2.JPG" alt="">
            </div>
        </div>
    </div>


    <section>
        <!-- partners -->

        <div class="container text-center mt-5 mb-5">
            <div class="underline mt-2 mb-5 " style="width: 100%;">
                <h2> Partner Institutions</h2>
            </div>
            <div class="row justify-content-between align-items-start partners">
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.tfs.go.tz/index.php/en"><img src="/img/misitu.png
          "
                            alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.ternet.or.tz/"><img src="/img/ternet.png" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.uniservitate.org/"><img src="/img/univervitate.jpg" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.mic.ul.ie/"><img src="/img/MIC.png" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.agrolab.us/"><img src="/img/agroLab.png" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.misereor.org/"><img src="/img/misereor.png" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.porticus.com/en/home"><img src="/img/porticus.png" alt=""></a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.walsh.edu/"><img src="/img/walsh university.png" alt=""></a>
                </div>

                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.kuleuven.be/english/kuleuven/"><img src="/img/logo.svg" alt=""></a>
                </div>

                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://unik.ac.ug/"><img src="/img/cropped-cropped-UniKWebiste-Hi.png"
                            alt=""></a>
                </div>

                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.inn.no/english/"><img src="/img/inn-eng-logo.svg" alt=""></a>
                </div>

                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://www.tuas.fi/en/"><img src="/img/turku-AMK.svg" alt=""></a>
                </div>

                <div class="col-6 col-lg-2 col-md-4 partner">
                    <a href="https://susie.turkuamk.fi/"><img src="/img/susie.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <!-- main content end -->

    <!-- Footer -->
    @include('partials.footer')
    @include('jslinks')

    <script src="{{ asset('../js/counter.js') }}"></script>
    <script src="{{ asset('../js/about2.js') }}"></script>
</body>

</html>
