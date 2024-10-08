@extends('layouts.alumni.alumni')
@section('content')
    <div class="container mt-5">
        <div class="mb-5 text-center">
            <div class="underline">
                <h1 class="favColor fw-bold text-center">MWECAU ALUMNI</h1>
            </div> <br>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="underline">
                    <h3 class="favColor">Alumni Stories</h3>
                    <p>MWECAU Alumni: A Legacy of Excellence</p>
                    <p class="pgrapgh">

                        Mwenge Catholic University (MWECAU) has nurtured countless bright minds, shaping the future of its
                        alumni through a commitment to excellence in education. The university’s graduates have gone on to
                        make significant impacts in various fields, reflecting the values instilled during their time at
                        MWECAU.

                        From doctors, educators, engineers, and leaders in business, the MWECAU alumni network stands as a
                        testament to the institution’s dedication to fostering academic growth and societal contribution.
                        Through their achievements, they continue to uphold the university’s legacy, inspiring future
                        generations to aim higher and dream bigger.

                        Their journey does not end at graduation; it is merely the beginning of their lifelong mission to
                        serve, innovate, and lead.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="fade-slider w-100">
                    <div class="gallery-cont w-100">
                        <img src="{{ asset('/img/campus life/books.JPG') }}" alt="">
                    </div>
                    <div class="gallery-cont w-100">
                        <img src="{{ asset('/img/campus life/guests.JPG') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5 py-5">
        <div class="mb-5 text-center">
            <div class="underline">
                <h1 class="favColor fw-bold text-center">Alumni News</h1>
            </div>
        </div>
        <div>
            <span class="alert alert-warning">Attention: No active alumni news is currently available. Please check back
                later!</span>
        </div>


        {{-- <div class="row mb-5 d-flex flex-column align-items-center">
            <div class="alumni-events col-12 shift-slider">
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/img/campus life/guests.JPG') }}" class="img-fluid" style="width: 100%;"
                                alt="Event Image">
                        </div>
                        <div class="card-text d-flex flex-column align-items-center">
                            <div class="d-flex flex-column align-items-center">
                                <span class="text-center">Category</span>
                                <h5 class="fw-bold favColor">Event/News title</h5>
                            </div>
                            <span>Nov 20, 2024</span>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/img/campus life/guests.JPG') }}" class="img-fluid" style="width: 100%;"
                                alt="Event Image">
                        </div>
                        <div class="card-text d-flex flex-column align-items-center">
                            <div class="d-flex flex-column align-items-center">
                                <span class="text-center">Category</span>
                                <h5 class="fw-bold favColor">Event/News title</h5>
                            </div>
                            <span>Nov 20, 2024</span>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/img/campus life/guests.JPG') }}" class="img-fluid" style="width: 100%;"
                                alt="Event Image">
                        </div>
                        <div class="card-text d-flex flex-column align-items-center">
                            <div class="d-flex flex-column align-items-center">
                                <span class="text-center">Category</span>
                                <h5 class="fw-bold favColor">Event/News title</h5>
                            </div>
                            <span>Nov 20, 2024</span>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/img/campus life/guests.JPG') }}" class="img-fluid" style="width: 100%;"
                                alt="Event Image">
                        </div>
                        <div class="card-text d-flex flex-column align-items-center">
                            <div class="d-flex flex-column align-items-center">
                                <span class="text-center">Category</span>
                                <h5 class="fw-bold favColor">Event/News title</h5>
                            </div>
                            <span>Nov 20, 2024</span>
                        </div>
                    </div>
                </a>
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('/img/campus life/guests.JPG') }}" class="img-fluid" style="width: 100%;"
                                alt="Event Image">
                        </div>
                        <div class="card-text d-flex flex-column align-items-center">
                            <div class="d-flex flex-column align-items-center">
                                <span class="text-center">Category</span>
                                <h5 class="fw-bold favColor">Event/News title</h5>
                            </div>
                            <span>Nov 20, 2024</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-5" style="width: max-content">
                <a href="#"><button class="eventsBtn"> More Alumni News <i
                            class="fas fa-arrow-right"></i></button></a>
            </div>
        </div> --}}
    </div>
@endsection
