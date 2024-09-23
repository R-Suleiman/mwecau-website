    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    {{-- navbar --}}
    <section>
        <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">

            <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the World</q></span>
        </div>
        {{-- small nav --}}
        <div class="small-nav">
            <ul class="d-flex justify-content-end fw-bold text-small">
                <li>
                    <a href="#">Alumni</a>
                </li>
                <li>
                    <a href="{{ route('uni.journals') }}">Journals</a>
                </li>
                <li>
                    <a href="#">Joining instructions</a>
                </li>
                <li>
                    <a href="#">Fee structure</a>
                </li>
                <li>
                    <a href="#">Almanac</a>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #513F83; color:#fff;">
            <div class="container-fluid">

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
                                <li class="dropdown-item"><a href="{{ route('about') }}">About University</a></li>
                                @foreach ($faculties as $faculty)
                                    @if ($faculty['faculty_id'] === '0')
                                        <li><a class="dropdown-item"
                                                href="{{ route('faculty', $faculty['faculty_name']) }}">{{ $faculty['faculty_name'] }}
                                                Unit
                                                ({{ $faculty['faculty_short_name'] }})
                                            </a></li>
                                    @endif
                                @endforeach
                                {{-- <li><a class="dropdown-item" href="{{ route('administrative-unit') }}">Administrative
                                        Unit</a></li> --}}
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" id="staff" href="#">Staff</a>
                                    <ul class="dropdown-menu" id="sub-staff">
                                        <li><a class="dropdown-item"
                                                href="{{ route('mwecau-administrative-staff') }}">Administrative
                                                Staff</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('mwecau-academic-staff') }}">Academic Staff</a></li>
                                    </ul>
                                </li>
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
                                    <a class="dropdown-item dropdown-toggle " i="faculty" href="#">Faculties</a>
                                    <ul class="dropdown-menu" id="sub-faculty">
                                        @foreach ($faculties as $faculty)
                                            @if ($faculty['faculty_id'] !== '0')
                                                <li><a class="dropdown-item"
                                                        href="{{ route('faculty', $faculty['faculty_name']) }}">{{ $faculty['faculty_name'] }}
                                                        ({{ $faculty['faculty_short_name'] }})
                                                    </a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('academics') }}">Programmes</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Admission
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ route('academics') }}">Admission Information</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('programs-list') }}">Programmes</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="https://uas.mwecau.ac.tz">Apply Now</a>
                                </li>
                                <li class="dropdown-item">
                                    <a
                                        href="https://mwecau.ternet.or.tz/storage/files/1/Joining_Instruction/Joining-Instructions-for-postgraduate-students-2022-2023.pdf">Joining
                                        Instructions</a>
                                </li>
                            </ul>
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

                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a href="{{ route('outreach') }}">Outreach Programs</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ route('IT.services') }}">ICT Sevices</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">Health Center Services</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">Guidance and Counseling</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('library') }}">Library</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Linkages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#">Student Mobility</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">Staff Exchange</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">Joint Projects</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('campus-life') }}" class="nav-link">Campus Life</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex px-2"
            style="align-items: center;  border-bottom: 1px solid #fff; color:white; background-color: #513F83;">
            <marquee behavior="scroll" direction="left">
                @if ($news)
                    @foreach ($news->take(5) as $news)
                        <a href="{{ route('announcement-details', $news->name) }}"
                            class="marquee fw-bold"><span>{{ $news->name }}</span></a>
                    @endforeach
                @endif
            </marquee>

            <a href="https://uas.mwecau.ac.tz/">
                <button class="btn fw-bold mb-1 d-none d-md-block" style="width: 150px; background-color: #e000e7; color: white">Apply
                    Now</button>
            </a>
        </div>

    </section>
