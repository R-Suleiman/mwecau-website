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
                    Welcome to Mwenge Catholic
                    University's ICT services page. Our commitment is to provide students , faculty and staff with the best technical support and services to enhance their academic and administrative experiences .
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
                    We are here to ensure that the MWECAU community has reliable access to cutting - edge technology solutions .
                </p>

                <h6>Contact details:</h6>
                <p>
                    Contact our IT Helpdesk at
                    <a href="mailto:ictsupport@mwecau.ac.tz"></a> for any IT-related
                    questions, help, or technical support. From 08:00 to 16:00, our
                    helpful staff can assist you.
                </p>

                <p>
                    Our commitment is to constantly improve our offerings to meet the evolving technological demands of the academic community .
                </p>
            </div>
        </div>
        <div class="row pt-5 px-5 ict-resource-row"></div>
    </div>
    <!-- main content end -->
@endsection
