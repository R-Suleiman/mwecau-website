<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {!! SEO::generate() !!}
    {!! OpenGraph::generate() !!}

    @include('links')
    <style>
        body {
            overflow-x: none;
        }

        #sub-faculty {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
        }

        #faculty:hover+#sub-faculty {
            display: block;
        }

        .dropdown-submenu:hover>#sub-faculty {
            display: block;
        }

        .dropdown-menu {
            position: relative;
            z-index: 1000;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        .dropdown-submenu {
            position: relative;
        }

        a {
            text-decoration: none;
            color: black;
        }

        @media screen and (max-width:580px) {
            #sub-faculty {
                display: none;
                position: absolute;
                left: 0;
                top: 100%;
            }
        }
    </style>
</head>

<body style="overflow-x: none;">
    {{-- navbar --}}
    <section>
        <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">

            <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the
                    World</q></span>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #513F83; color:#fff;">
            <div class="container">

                <a class=" navbar-brand text-decoration-none fw-bold" href="{{ url('/') }}" style="color: #fff;">
                    <img class="img-fluid d-none d-md-block d-sm-block" src="../../img/mwecau.png"
                        style="width: 100px;">
                </a>
                <div class="d-md-block d-lg-none d-sm-block">
                    <h4>Mwenge Catholic University <br> </h4>
                    <small> <q class="fst-italic">Lux Mundi - Light of the World</q></small>
                </div>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class=""> <i class="fa fa-bars text-light fs-4" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse slide-in-dow" id="navmenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('about') }}">About University</a></li>
                                <li><a class="dropdown-item" href="{{ route('mwecau-staffs') }}">Staff</a></li>
                                <li><a class="dropdown-item" href="{{ route('programs-list') }}">Programmes</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">

                                    <a class="dropdown-item dropdown-toggle" href="#" id="faculty">Faculties</a>
                                    <ul class="dropdown-menu" id="sub-faculty">
                                        @foreach ($faculties as $faculty)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('faculty', $faculty['faculty_name']) }}">{{ $faculty['faculty_name'] }}
                                                    ({{ $faculty['faculty_short_name'] }})
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('academics') }}">Programmes</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="https://uas.mwecau.ac.tz" target="_blank" class="nav-link">Admission</a>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Campuses
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="">Msarikie Campus</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="">Hedaru Campus</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Research
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG="
                                        target="_blank">Google Scholar</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('projects') }}">Project</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="">Outreach Programs</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ route('IT.services') }}">ICT Sevices</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('library') }}">Library</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Linkages</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('campus-life') }}" class="nav-link">Campus Life</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex p-2"
            style="align-items: center;  border-bottom: 1px solid #fff; color:white; background-color: #513F83;">
            <marquee behavior="scroll" direction="left">
                @if ($news)
                    @foreach ($news->take(5) as $news)
                        <a href="{{ route('announcement-details', $news->id) }}"
                            class="marquee fw-bold"><span>{{ $news->name }}</span></a>
                    @endforeach
                @endif
            </marquee>

            <a href="https://uas.mwecau.ac.tz/">
                <button class="btn fw-bold" style="width: 150px; background-color: #e000e7; color: white">Apply
                    Now</button>
            </a>
        </div>

    </section>

    {{-- main section --}}
    <main>
        @yield('content')
    </main>

  <!-- footer section -->
  <section class="footer-container text-white ">
    <!-- Section: Social media -->
    <div class="text-centr text-lg-start  text-white ">
        <div class="d-flex justify-content-between p-4"
            style="background-color: #513f83; border-bottom: 1px solid white;">
            <div class="me-5">
                <h6>Get connected with us on social networks:</h6>
            </div>
            <div class="a home-sci">
                <div class="row justify-content-center">
                    <div class="align-items-center">
                        <a href="https://www.facebook.com/mwecau2016/" target="_blank" class=""> <svg
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0 0 50 50">
                                <path
                                    d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z">
                                </path>
                            </svg> </a>
                        <a href="https://twitter.com/mwecau1" target="_blank" class="text-white icon me-4"> <svg
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                class="" viewBox="0 0 50 50">
                                <path
                                    d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z">
                                </path>
                            </svg> </a>
                        <a href="https://www.instagram.com/mwengecatholicuniversity/" target="_blank"
                            class="text-white me-4"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="40" height="40" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                    cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                    cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <path fill="#fff"
                                    d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                </path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff"
                                    d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                </path>
                            </svg></a>
                        <a href="https://www.linkedin.com/company/mwenge-catholic-university/" target="_blank"
                            class="text-white me-4"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                              <path fill="#0078d4" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"></path><path d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z" opacity=".05"></path><path d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z" opacity=".07"></path><path fill="#fff" d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"></path>
                              </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Section: Social media -->
    <div class="container">
        <div class="row">
            <div class="col-md col-sm-6 mt-5 py-lg-5 py-md-3">
                <h6 class="text-uppercase fw-bold">Mwenge Catholic University</h6>
                <hr class=" mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #e000ef; height: 5px" />
                <p style="color: white">
                  Welcome to Mwenge Catholic University (MWECAU), a University that gives you the opportunity to pursue quality education in truthfulness and freedom of thought, so that you may gain professional competency to boldly serve and contribute to the development of humanity.
                </p>
            </div>

            <div class="col-md col-sm-6 mt-5 py-lg-5 py-md-3 ">
                <h6 class="text-uppercase fw-bold">University Documents</h6>
                <hr class=" mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #e000ef; height: 5px" />
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="https://mwecau.ternet.or.tz/storage/files/1/Joining_Instruction/Joining-Instructions-for-postgraduate-students-2022-2023.pdf" target="_blank" class="text-light">Join Instructions (Postgraduate)</a></li>
                    <li class="mb-3"><a href="https://mwecau.ternet.or.tz/storage/files/1/Non-degree-Programmes-Fee-Structure-2022-2023.pdf" target="_blank" class="text-light">Fee Structure (Postgraduate)</a></li>
                    <li class="mb-3"><a href="https://mwecau.ternet.or.tz/storage/files/1/Non-degree-Programmes-Fee-Structure-2022-2023.pdf" target="_blank" class="text-light">Fee Structure (Non-degree)</a></li>
                </ul>
            </div>

            <div class="col-md col-sm-6 col-xsm-6 col-md mt-5 py-lg-5 py-md-3">
                <h6 class="text-uppercase fw-bold ">Popular links</h6>
                <hr class=" mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #e000ef; height: 5px" />
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="https://uas.mwecau.ac.tz/" target="_blank" class="text-light">Online
                            Application</a></li>
                    <li class="mb-3"><a href="https://ums.mwecau.ac.tz/" target="_blank"
                            class="text-light">University Management System(UMS)</a></li>
                    <li class="mb-3"><a
                            href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG="
                            target="_blank" class="text-light">Google Scholar</a></li>
                    <li class="mb-3"><a href="https://lms.mwecau.ac.tz/" target="_blank"
                            class="text-light">Learning
                            Management System(LMS)</a>
                    </li>
                    <li class="mb-3"><a href="#!" class="text-light">Ministry of Education, Science, and
                            Technology</a></li>
                    <li class="mb-3"><a href="https://www.tcu.go.tz/" target="_blank" class="text-light">TCU</a>
                    </li>
                    <li class="mb-3"><a href="https://www.necta.go.tz/" class="text-light">NECTA</a></li>
                    <li class="mb-3"><a href="https://www.heslb.go.tz/?lang=" class="text-light">HESLB</a></li>
                    <li class="mb-3"><a href="https://www.nactvet.go.tz/" class="text-light">NACTVET</a></li>
                </ul>
            </div>

            <div class="col-md col-sm-6 col-md mt-5 py-lg-5 py-md-3">
                <h6 class="text-uppercase fw-bold ">Contacts</h6>
                <hr class=" mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #e000ef; height: 5px" />
                <p style="color: white">Mwenge Catholic University</p>
                <p style="color: white"> P.O. Box 1226, Moshi, Kilimanjaro Tanzania, East Africa </p>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="mailto:vc@mwecau.ac.tz" class="text-light"> <i class="fas fa-envelope mr-3"></i>
                            Vice
                            Chancellor: vc@mwecau.ac.tz</a></li>
                    <li class="mb-3"><a href="mailto:info@mwecau.ac.tz" class="text-light"> <i class="fas fa-envelope mr-3"></i>
                            Secretary: info@mwecau.ac.tz</a></li>
                    <li class="mb-3"><a href="mailto:admissions@mwecau.ac.tz" class="text-light"> <i class="fas fa-envelope mr-3"></i>
                            Admission: admissions@mwecau.ac.tz</a></li>
                    <li class="mb-3"><a href="mailto:admin@mwecau.ac.tz" class="text-light"> <i class="fas fa-envelope mr-3"></i>
                            ICT Office: admin@mwecau.ac.tz</a></li>
                    <li class="mb-3"><a href="mailto:pr@mwecau.ac.tz" class="text-light"> <i class="fas fa-envelope mr-3"></i>
                            PRO Office: pr@mwecau.ac.tz</li>
                </ul>
            </div>
        </div>

    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      <label for="">
          Copyright © <span id="live-year"></span>
          <a class="text-white" href=""> MWECAU. </a>
           All right reserved.
      </label>
    </div>
    <!-- Copyright -->
</section>

    @include('jslinks')
    <script>
        const date = new Date()
        const year = date.getFullYear()
        document.getElementById('live-year').textContent = year
      </script>
       <script>
        document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                const nextEl = this.nextElementSibling;
                const isVisible = nextEl.style.display === 'block';
                document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(submenu) {
                    submenu.style.display = 'none';
                });
                nextEl.style.display = isVisible ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
