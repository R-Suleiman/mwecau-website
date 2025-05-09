<link rel="stylesheet" href="{{ asset('../css/library.css') }}">
@extends('layouts.web')
@section('content')
    <!-- hero -->
    <section>
        <div>
            {{-- landing-image --}}
            <div class="">
                <img class="img-fluid w-100" src="{{ asset('img/site banners/BANNER-LIBRARY.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- main content -->
    <div class="container-fluid mt-5" style="background-color: white">
        <div class="main-heading">
            <h2>Welcome to MWECAU Library</h2>
            <div class="underline"></div>
        </div>

        <div class="row p-2 library-row">
            <div class="col-12 col-md-6 col-lg-6 mb-4 lib-desc">
                @if ($libraryIntroduction)
                    <p> {!! $libraryIntroduction->description !!}</p>
                @else
                    <p>nothing found</p>
                @endif
                <div class="lib-obj">
                    @if ($library)
                        <h3>{{ $library->name }}</h3>
                        <p>
                            {!! $library->description !!}
                        </p>
                    @else
                        <h3>The Objective of the MWECAU Library</h3>
                        <p>
                            The main Objective is

                            {{-- to develop and maintain library and information services in the relevant
                            disciplines so as to support core function of the university in teaching research and outreach
                            including consultancy services as well as provide information to other categories of users. --}}
                        </p>
                    @endif

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <div class="library-hrs">
                    <h3>Opening & Closing Hours</h3>
                    <div class="library-hr">
                        <label>Monday to Friday</label>
                        <span>09:00am – 06:00pm</span>
                    </div>
                    <div class="library-hr">
                        <label>Saturday</label>
                        <span>09:00am – 06:00pm</span>
                    </div>
                    <div class="library-hr">
                        <label>Sunday & Public Holidays</label>
                        <span>Closed!</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Collections --}}
    <div class="container mt-5 mb-5">
        <div class="main-heading">
            <h2>Our Collections</h2>
            <div class="underline"></div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="collection">
                    <i class="fa fa-book icon"></i>
                    <h5>General Collection</h5>
                    <p>This collection has numerous resources in diverse disciplines offered by the university and they can
                        be borrowed out of the library</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="collection">
                    <i class="fa fa-book-open icon"></i>
                    <h5>Special Reserve Collection</h5>
                    <p> This are rare materials found in the library and are in great demand by students and faculty; they
                        are not in the lending system to allow access to many users</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <div class="collection">
                    <i class="fa fa-newspaper icon"></i>
                    <h5>Reference Collection</h5>
                    <p>This collection includes reference materials such as dictionaries, yearbooks, encyclopedias and
                        gazettes</p>
                </div>
            </div>
        </div>

    </div>

 {{-- Services --}}
    <div class="container-fliud mt-5 mb-5">
        <div class="row services-row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="services">
                    <h3>Services Offered</h3>
                    <div class="service"><i class="fa fa-check"></i> <span>Circulation-check out and check in of library materials</span></div>
                    <div class="service"><i class="fa fa-check"></i> <span>Reference Services</span></div>
                    <div class="service"><i class="fa fa-check"></i> <span>User Orientation</span></div>
                    <div class="service"><i class="fa fa-check"></i> <span>Current Awareness Services</span></div>
                    <div class="service"><i class="fa fa-check"></i> <span>Information Literacy</span></div>
                    <div class="service"><i class="fa fa-check"></i> <span>Selective Dissemination of Information</span></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <img class="service-img" src="{{ asset('img/campus life/library5.JPG') }}" alt="">
            </div>
        </div>

    </div>

    {{-- E-Resources --}}

    <div class="containder-fluid mt-5 mb-5 library-res">
        <div class="main-heading">
            <h2>E-Resources</h2>
            <div class="underline"></div>
        </div>
        <div class="row" style="width: 100%">
            <h3 class="text-center fs-5">Subscribed E-Resources</h3>
            <div class="e-resouces">
                <table class="table table-striped" style="width: 100%">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">s/n</th>
                            <th scope="col">Database Name</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($libraryResources as $libraryResource)
                            @if ($libraryResource->category_name == 'e-resources')
                                <tr>
                                    <th scope="row">{{ $counter++ }}</th>
                                    <td>{{ $libraryResource->name }}</td>
                                    <td class="text-wrap">{!! $libraryResource->description !!}</td>
                                    @if ($libraryResource->link)
                                        <td><a href="{{ $libraryResource->link }}" target="_blank"><i
                                                    class="fa fa-link"></i></a></td>
                                    @else
                                        <td><a href="#"><i class="fa fa-link"></i></a></td>
                                    @endif

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row mt-4 mb-4" style="width: 100%">
            <h3 class="text-center fs-5">Open Access Resources</h3>
            <div class="e-resouces">
                <table class="myTable table table-bordered table-hover table-striped">
                    <thead class="favbg">
                        <tr>
                            <th scope="col">s/n</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($libraryResources as $libraryResource)
                            @if ($libraryResource->category_name == 'open-access-resource')
                                <tr>
                                    <th scope="row">{{ $counter++ }}</th>
                                    <td class="text-wrap">{!! $libraryResource->description !!}</td>
                                    @if ($libraryResource->link)
                                        <td><a href="{{ $libraryResource->link }}" target="_blank"><i
                                                    class="fa fa-link"></i></a></td>
                                    @else
                                        <td><a href="#"><i class="fa fa-link"></i></a></td>
                                    @endif

                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Gallery --}}
    <div class="containder">
        <div class="row library-resource-row">
            <div class="container-fluid mt-2 mb-5">
                <div class="row gallery">
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/books.JPG" alt="">
                    </div>
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/library3.JPG" alt="">
                    </div>
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/library5.JPG" alt="">
                    </div>
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/library2.JPG" alt="">
                    </div>
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/library5.JPG" alt="">
                    </div>
                    <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                        <img src="img/campus life/library1.JPG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content end -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all caption elements
            var captions = document.querySelectorAll('.pic-nav h3')

            // Attach click event to each caption
            captions.forEach(function(caption) {
                caption.addEventListener('click', function() {
                    var target = this.getAttribute('data-target')

                    // normalize all the heads
                    document.querySelectorAll('.pic-nav h3').forEach(function(head) {
                        head.style.fontWeight = 'normal'
                    })

                    var targetHead = document.querySelector(
                        '.pic-nav h3[data-target="' + target + '"]'
                    )
                    targetHead.style.fontWeight = '600'

                    // Hide all images
                    document
                        .querySelectorAll('.talent-pics img')
                        .forEach(function(image) {
                            image.classList.remove('fade-in')
                            image.classList.add('fade-out')
                        })

                    // Show the clicked image
                    var targetImage = document.querySelector(
                        '.talent-pics img[data-target="' + target + '"]'
                    )
                    targetImage.classList.remove('fade-out')
                    targetImage.classList.add('fade-in')
                })
            })
        })
    </script>
@endsection
