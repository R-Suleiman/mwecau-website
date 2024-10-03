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
                    <p>Here is ta short story about MWECAU Alumni</p>
                    <p class="pgrapgh">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, architecto! Voluptatibus
                        ab porro eveniet nostrum impedit, debitis fugiat obcaecati reprehenderit? Quo, quasi odit qui
                        reiciendis rem porro sint! Tempore, aliquam?
                        Iure alias, natus blanditiis dolorem dolores recusandae pariatur consequuntur laudantium
                        perspiciatis, nostrum maxime totam aperiam adipisci quam sunt quod qui a? A nesciunt pariatur
                        temporibus omnis magnam esse in numquam?
                        Sit sunt ratione est deserunt eum voluptatibus ad voluptatem cupiditate repudiandae eveniet hic
                        perferendis similique tempore quam repellendus fugit suscipit reiciendis facere aperiam impedit vel,
                        beatae nihil. Aspernatur, recusandae dicta.</p>
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

    <div class="container-fluid mt-5">
        <div class="mb-5 text-center">
            <div class="underline">
                <h1 class="favColor fw-bold text-center">Alumni News</h1>
            </div>
        </div>

        <div class="row mb-5 d-flex flex-column align-items-center">
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
        </div>
    </div>
@endsection
