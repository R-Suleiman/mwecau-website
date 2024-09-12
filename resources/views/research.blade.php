<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Research</title>
        @include('links')
</head>

<body>
    <!-- partners -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    @include('partials.navbar')

    <!-- corousel -->
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

    <!-- main content -->

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="find-events">
                <form class="event-form research-form">
                    <div class="form-group form-group2">
                        <input type="text" name="keywords" placeholder="Search..." />
                    </div>
                    <div class="form-group" style="width: 10%">
                        <button class="btn search-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- <div class="container-fluid mb-5">
        <div class="research-heads p-3">
            <div class="underline mt-4 mb-5" style="width: 40%">
                <h1 style="text-align: left">Research Articles</h1>
            </div>
            <button class="btn search-btn">View More</button>
        </div>
        <div class="row sports">
            <div class="col-6 col-sm-12 col-lg-6 sports-col1 sports-col1-1">
                <img src="assets/img/students3.jpg" alt="sports picture" class="sports-col1-img" />
                <div class="research-tag">
                    <div class="research-categ">
                        <label>ALUMNI</label><label>RESEARCH</label>
                    </div>
                    <a href="">
                        <p>
                            Autism rates have increased and show differences in ethnic
                            minorities
                        </p>
                    </a>
                    <p>
                        <span>Autor -</span><span class="research-date"> January 01, 2024</span>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-12 col-lg-6 sports-col2">
                <div class="col2-div1 col2-div1-r">
                    <div class="col2-div1-1">
                        <img src="assets/img/students4.jpg" alt="sports picture" class="sports-col2-img sp-1" />
                        <div class="research-tag tag-small">
                            <div class="research-categ">
                                <label>ALUMNI</label><label>RESEARCH</label>
                            </div>
                            <a href="">
                                <p style="font-size: 15px">
                                    Autism rates have increased and show differences in ethnic
                                    minorities
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col2-div1-2">
                        <img src="assets/img/students4.jpg" alt="sports picture" class="sports-col2-img sp-1-1" />
                        <div class="research-tag tag-small">
                            <div class="research-categ">
                                <label>ALUMNI</label><label>RESEARCH</label>
                            </div>
                            <a href="">
                                <p style="font-size: 15px">
                                    Autism rates have increased and show differences in ethnic
                                    minorities
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col2-div2 col2-div2-2">
                    <img src="assets/img/students1.JPG" alt="sports picture" class="sports-col2-img sp-2" />
                    <div class="research-tag tag-small-1">
                        <div class="research-categ">
                            <label>ALUMNI</label><label>RESEARCH</label>
                        </div>
                        <a href="">
                            <p style="font-size: 15px">
                                Autism rates have increased and show differences in ethnic
                                minorities
                            </p>
                        </a>
                        <p>
                            <span>Autor -</span><span class="research-date"> January 01, 2024</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <h4>Researches</h4>
        <p class="fs-5">Visit our <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG=" target="_blank" class="text-primary">Google Scholar</a> Account to view our Reseaches</p>

        <h4>Projects</h4>
        <p>List of Projects</p>

        <h4>Outreach Programs</h4>
        <p>List of Outreach Programs</p>
    </div>

    <!-- main content end -->
    @include('partials.footer')
    @include('jslinks')

</body>

</html>
