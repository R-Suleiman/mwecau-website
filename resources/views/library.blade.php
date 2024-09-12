<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | LIBRARY</title>
    @include('links')
</head>

<body style="background-color: whitesmoke">
    <!-- navbar -->
    @include('partials.navbar')

    <!-- bg -->
    <section>
        <div>
            {{-- landing-image --}}
            <div class="">
                {{-- <img class="img-fluid w-100" src="{{ asset('images/pageImages/' . $ictBanner->image) }}" alt=""> --}}
                <img class="img-fluid w-100" src="{{asset('images/pageImages/1725858684-BANNER APPLY NOW 2.jpg')}}" alt="">
            </div>
        </div>
    </section>

    <!-- main content -->
    <div class="container-fluid" style="background-color: white">
        <div class="row py-5 ict-row">
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <p>
                    Welcome to the page for Library Services of the Mwenge Catholic
                    University (MWECAU).
                </p>

                <p> More description about the library....</p>

                <h3>Library Links</h3>
                {{-- <a href="https://ums.mwecau.ac.tz" target="_blank" class="ict-resource">
                    <i class="fa fa-link"></i>
                    <span>University Management System (UMS)</span>
                </a> --}}


                <p>
                    Our hardworking IT team is here to make sure that MWECAU community
                    has dependable access to cutting-edge technological solutions.
                </p>

                <h6><b>Contact details:</b></h6>
                <p>
                    Contact our IT Helpdesk at
                    <a href="mailto:ictsupport@mwecau.ac.tz"></a> for any IT-related
                    questions, help, or technical support. From 08:00 to 16:00, our
                    helpful staff can assist you.
                </p>

                <p>
                    We are committed to constantly enhancing our offerings in order to
                    satisfy the changing technological requirements of the academic
                    community.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <img style="width: 100%" src="{{asset('img/campus life/library5.JPG')}}" alt="">
            </div>
        </div>
        <div class="row pt-5 px-5 ict-resource-row">
                <!-- gallery -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row gallery">
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/library5.JPG') }}" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/library1.JPG') }}" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/library2.JPG') }}" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/university-image-4.JPG') }}" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/books.JPG') }}" alt="">
            </div>
            <div class="col-6 col-lg-2 col-md-4 gallery-cont">
                <img src="{{ asset('images/Library/library5.JPG') }}" alt="">
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

    @include('jslinks')
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    @include('jslinks')
</body>

</html>
