@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container mt-5">
        <div class="row g-0">
            <h2 class="text-center text-uppercase mb-3 favColor"> {{ $header }}</h2>
            <div class="col-md col-lg 6 lh-">
                <p class="lh-1 fs-1" style="line-height: 50px">
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
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
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
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
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
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
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
            @if ($galleryImages)
                @foreach ($galleryImages as $galleryImage)
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="{{ asset('/images/pageImages/' . $galleryImage->image) }}" alt="">
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <section>
        <!-- partners -->

        <div class="container text-center mt-5 mb-5">
            <div class="underline mt-2 mb-5 " style="width: 100%;">
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
