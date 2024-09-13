@extends('layouts.web')
@section('content')

    {{-- about us landing page --}}
    <section class="">
        <div class="text-center wrapper align-content-center"
            style="position: relative; background: linear-gradient(to right, #513f83, #513f83); min-height: 100vh;">
            <section>
                <div class="academis1 text-center">
                    <div class="academicsText1 justify-items-around align-content-center">
                        <h1 class="underline display-1">Admissions</h1>
                        <p class="fs-5">
                            Studying at Mwenge Catholic University is a great way to enhance your career.
                            In today’s competitive environment, professionals need the skills to adapt
                            to an ever-changing world.
                        </p>

                        <div class="d-none">
                            <a href="{{ route('login') }}"><button class="btn btn-warning" data-aos="fade-right"
                                    data-aos-duration="2000">Login</button></a>
                            <a href="{{ route('register') }}"><button class="btn btn-warning" data-aos="fade-left"
                                    data-aos-duration="2000">Register
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </section>


            <div class="custom-shape-divider-bottom-1713166410">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                        opacity=".25" class="shape-fill"></path>
                    <path
                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                        opacity=".5" class="shape-fill"></path>
                    <path
                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <section>
        <div class="academics1 text-center d-none ">
            <div class="academicsText1 justify-items-around align-content-center">
                <h1>Admissions</h1>
                <p class="text-lowercase fs-5">
                    Studying business at UniCamp is a great way to enhance your career.
                    In today’s competitive environment, professionals need the skills to adapt
                    to an ever-changing business world.
                </p>
            </div>
        </div>
    </section>

    <!-- Admissions -->
    <section>
        <div class="container text-center mt-4 mb-4">
            <div class="justify-items-around align-content-center">
                <div class=" underline col-10">
                    <img src="img/mwecau.png" class="img-fluid rounded-circle shadow-lg"
                        alt="Mwenge Catholic University logo" style="width: 23%;">
                    <br>
                    <h1 class="underline display-4">Admissions</h1>
                    <p class="fs-4">
                        Mwenge Catholic University prepares students with the transformative experience and to be
                        well-rounded leaders whomake a positive impact on the world.
                    </p>
                    {{-- counter --}}
                    <div class="container-fluid my-3" style="background-color: white">
                        <div class="counter row d-flex p-2 fs-4">
                            <div class="favColor my-2 fw-bold col-3 d-flex flex-column align-items-center ">
                                <span for="" id="establishedCount"></span>
                                <label>Established</label>
                            </div>
                            <div class="favColor my-2 fw-bold col-3 d-flex flex-column align-items-center ">
                                <span for="" id="facultyCount"></span>
                                <label>Faculties</label>
                            </div>
                            <div class="favColor my-2 fw-bold col-3 d-flex flex-column align-items-center ">
                                <span for="" id="studentsCount"></span>
                                <label>Students</label>
                            </div>
                            <div class="favColor my-2 fw-bold col-3 d-flex flex-column align-items-center ">
                                <span for="" id="gRareCount"></span>
                                <label class="text-center">Graduation Rate</label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- admission programs -->
    <section>
        <div class="admissionOverlay container my-5 py-5 text-center rounded" data-aos="fade-up" data-aos-duration="3000">
            <div class="row justify-content-around align-items-start">
                <!-- post-graduate -->
                <div class="left col-12 col-md-6 col-lg-6 mb-4 d-md-block">
                    @if ($postgraduateImage)
                        <img src="{{ asset('/images/pageImages/' . $postgraduateImage->image) }}" class="img-fluid rounded"
                            alt="Welcome at Mwecau">
                    @endif
                    {{-- <img src="img/postgrad.jpeg" class="img-fluid rounded d-" alt="Welcome at Mwecau"> --}}
                </div>

                <div class="right col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card darkMode">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>{{ Str::ucfirst($postgraduateImage->header) }} Programmes</h2>
                            </div>
                            <div class="card-text">
                                <p class="fs-6">
                                    Mwenge Catholic University offers a range of bachelor, associate, and honours
                                    degrees. Undergraduate
                                    students
                                    benefit from the extraordinary resources. Browse our undergraduate programs and find
                                    the
                                    right one for you.
                                </p>
                                <a href="{{ route('programmeCategory', 'post-graduate') }}"> <button
                                        class="programsBtn">Post-Graduate
                                        Programs <i class="fas fa-arrow-right"></i></button></a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- undergraduate -->
                <div class="right2 col-12 col-md-6 col-lg-6 mb-4 d-md-block d-lg-none d-sm-block">
                    @if ($undergraduateImage)
                        <img src="{{ asset('/images/pageImages/' . $undergraduateImage->image) }}" class="img-fluid rounded"
                            alt="Welcome at Mwecau">
                    @endif
                    {{-- <img src="img/postgrad.jpeg" class="img-fluid rounded" alt="Welcome at Mwecau"> --}}
                </div>
                <div class="left2 col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card darkMode">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>{{ Str::ucfirst($undergraduateImage->header) }} Programmes</h2>
                            </div>
                            <div class="card-text">
                                <p class="fs-6">
                                    Mwenge Catholic University a range of Undergraduate degrees students
                                    benefit from the extraordinary resources. Browse our undergraduate programs and find
                                    the right one for you.
                                </p>
                                <a href="{{ route('programmeCategory', 'undergraduate') }}"><button
                                        class="programsBtn">Undergraduate
                                        Programs <i class="fas fa-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right2 col-12 col-md-12 col-lg-6 mb-4 d-none d-lg-block d-md-none">
                    @if ($undergraduateImage)
                        <img src="{{ asset('/images/pageImages/' . $undergraduateImage->image) }}" class="img-fluid rounded"
                            alt="Welcome at Mwecau">
                    @endif
                    {{-- <img src="img/postgrad.jpeg" class="img-fluid rounded" alt="Welcome at Mwecau"> --}}
                </div>

                <!-- Non-degree programs -->
                <div class="left col-12 col-md-6 col-lg-6 mb-4">
                    @if ($nonDegreeImage)
                        <img src="{{ asset('/images/pageImages/' . $nonDegreeImage->image) }}" class="img-fluid rounded"
                            alt="Welcome at Mwecau">
                    @endif
                    {{-- <img src="img/postgrad.jpeg" class="img-fluid rounded" alt="Welcome at Mwecau"> --}}
                </div>

                <div class="right col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card darkMode">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>{{ Str::ucfirst($nonDegreeImage->header) }} Programmes</h2>
                            </div>
                            <div class="card-text">
                                <p class="fs-6">
                                    Mwenge Catholic University a range of non-degree programms
                                    student benefit from the extraordinary resources. Browse our non-degree programs and
                                    find the right one for you.
                                </p>
                                <a href="{{ route('programmeCategory', 'non-degree') }}"> <button
                                        class="programsBtn">Non-Degree Programs
                                        <i class="fas fa-arrow-right"></i></button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- academics images -->
    <section>
        <div class="academics2">
            <div class="container academicsText2 p-sm-5">
                <div class="row g-5 ">
                    <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <div class="card shadow-lg darkMode">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>Learning Abroad</h3>
                                </div>
                                <div class="card-text mb-3">
                                    <p>
                                        Mwenge Catholic University (MWECAU) offers students the chance to boarden their
                                        academic and cultural horizons through international student exchange programs.
                                        Partnering with prestigious institutions such as Inland Norway University of Applied
                                        Science, Mary Immaculate College in Ireland Catholic University of Louvain in
                                        Belgium, and the University of Georgia (UGA) in the United States, MWECAU provides a
                                        platform for student to engage with diverse global perspectives. These opportunities
                                        enrich their educational experience, enhance intercultural understanding, and
                                        strengthen their global networks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <div class="card shadow-lg darkMode">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>Career Development</h3>
                                </div>
                                <div class="card-text mb-2">
                                    Mwenge Catholic Univeristy (MWECAU) provides students with the opportunity to engange
                                    with contemporary issues critical to todays's society, offering speciaized courses in
                                    area such as child protection, executive management, servant leadership,
                                    entrepreneurship, and digital marketing. Through these students gains practical skills
                                    and knowledge that prepare them to address modern challenges, lead with integrity and
                                    thrive i dynamic business and social environment. MWECAU equips graduates with the tools
                                    to make meaningful and global workforce.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('../js/counter.js') }}"></script>

    @endsection

