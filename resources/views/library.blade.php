@extends('layouts.web')
@section('content')

<style>
    a {
        color: blue;
    }
    .lib-links {
        display: flex;
        flex-direction: column
    }
   .lib-links a:hover {
        text-decoration: underline
    }
</style>

    <!-- bg -->
    <section>
        <div>
            {{-- landing-image --}}
            <div class="">
                {{-- <img class="img-fluid w-100" src="{{ asset('images/pageImages/' . $ictBanner->image) }}" alt=""> --}}
                <img class="img-fluid w-100" src="{{ asset('img/site banners/BANNER-LIBRARY.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- main content -->
    <div class="container-fluid" style="background-color: white">
        <div class="row py-1 ict-row">
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <p>
                    Welcome to the page for Library Services of the Mwenge Catholic
                    University (MWECAU).
                </p>

                <p> The Library has diversity of information resources collected on various specialized disciplines as
                    provided for by the University Curricula and University community needs in particular , it has both
                    print and non-print formats of information resource.
                </p>

                <p>
                <h3>Objectives of MWECAU Library</h3>
                The main Objective is to develop and maintain library and information services in the relevant disciplines
                so as to support core function of the university in teaching research and outreach including consultancy
                services as well as provide information to other categories of users.
                </p>

                <p> 
                <h3>Opening and closing of Library</h3>
                Monday to Friday from 09:00 AM - 10:00 PM,  
                Saturday from 09:00 AM - 18:00 PM, 
                Sunday and public Holiday are closed.
                </p>

                <p>
                    Our hardworking IT team is here to make sure that MWECAU community
                    has dependable access to cutting-edge technological solutions.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <img style="width: 100%" src="{{ asset('img/campus life/library5.JPG') }}" alt="">
            </div>
        </div>

        <div class="row py-1 ict-row">
            <h3 class="text-center">Library Links</h3>
            <div class="col-12 col-md-6 col-lg-6 mb-4 lib-links">
                <h4>Free Electronic BOOKS</h4>
                <a href="http://www.freefullpdf.com">http://www.freefullpdf.com</a>
                <a href="www.pdfdrive.net">www.pdfdrive.ne</a>
                <a href="www.b-ok.org">www.b-ok.org</a>
                <a href="www.bookfi.net">www.bookfi.net</a>
                <a href="www.sharebookfree.com">www.sharebookfree.com</a>
                <a href="www.manybooks.net">www.manybooks.net</a>
                <a href="www.bookyards.com">www.bookyards.com</a>
                <a href="www.freecomputerbooks.com">www.freecomputerbooks.com</a>
                <a href="www.essays.se">www.essays.se</a>
                <a href="http://bookzz.org/"> http://bookzz.org/</a>
                <a href="http://bookboon.com/">http://bookboon.com/</a>
                <a href="https://books.google.com/">https://books.google.com/</a>
                <a href="http://golibgen.io/">http://golibgen.io/</a>
                <a href="www.libgen.info">www.libgen.info</a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4 lib-links">
                <h4>Subscribed E-Resource Books from COTUL.</h4>
                <a href="http://www.jstor.org/">http://www.jstor.org</a>
                <a href="http://www.tandfonline.com/">http://www.tandfonline.com/</a>
                <a href="http://www.cambridge.org/">http://www.cambridge.org/</a>
                <a href="http://emeraldinsight.com/">http://emeraldinsight.com/</a>
                <a href="http://www.elibrary.imf.org/">http://www.elibrary.imf.org/</a>
                <a href="https://research.ebsco.com/">https://research.ebsco.com/</a>
                <a href="http://onlinelibrary.wiley.com/">http://onlinelibrary.wiley.com/</a>
                <a href="http://www.siam.org/">http://www.siam.org/</a>
                <a href="http://pubs.rsc.org/">http://pubs.rsc.org/</a>
                <a href="https://www.astm.org/ ">https://www.astm.org/ </a>
                <a href="http://www.liebertpub.com/">http://www.liebertpub.com/</a>
                <a href=" http://www.birpublications.org/"> http://www.birpublications.org/</a>
                <a href="https://journals.sagepub.com/ ">https://journals.sagepub.com/ </a>
                <a href="https://academic.oup.com/journals ">https://academic.oup.com/journals </a>
            </div>
        </div>
        <div class="row ict-resource-row">
            <!-- gallery -->
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
