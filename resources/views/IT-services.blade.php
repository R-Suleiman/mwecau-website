@extends('layouts.web')
@section('content')
    {{-- banner --}}
    <section>
        <div>
            {{-- landing-image --}}
            <div class="">
                @if ($ictBanner)
                    <img class="img-fluid w-100" src="{{ asset('images/pageImages/' . $ictBanner->image) }}" alt="">
                @else
                    <div class="landing-text nav-content">
                        <div class="underline mt-5 mb-5">
                            <h1 style="text-align: center">ICT Services</h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- main content -->
    <div class="container-fluid" style="background-color: white">
        <div class="row py-5 ict-row">
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <p>
                    Welcome to the page for IT services of the Mwenge Catholic
                    University (MWECAU). We are dedicated to providing students,
                    teachers, and staff with the best possible technical support and
                    services to improve their academic and administrative experiences.
                </p>

                <h3>ICT Resources</h3>
                <a href="https://ums.mwecau.ac.tz" target="_blank" class="ict-resource">
                    <i class="fa fa-link"></i>
                    <span>University Management System (UMS)</span>
                </a>
                <a href="https://uas.mwecau.ac.tz" target="_blank" class="ict-resource">
                    <i class="fa fa-link"></i>
                    <span>University Application System (UAS)</span>
                </a>
                <a href="https://lms.mwecau.ac.tz" target="_blank" class="ict-resource">
                    <i class="fa fa-link"></i>
                    <span>Learning Management System (LMS)</span>
                </a>
                <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG="
                    target="_blank" class="ict-resource">
                    <i class="fa fa-link"></i>
                    <span>Google Scholar</span>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4">
                <p>
                    Our hardworking IT team is here to make sure that MWECAU community
                    has dependable access to cutting-edge technological solutions.
                </p>

                <h6>Contact details:</h6>
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
        </div>
        <div class="row pt-5 px-5 ict-resource-row"></div>
    </div>
    <!-- main content end -->
@endsection
