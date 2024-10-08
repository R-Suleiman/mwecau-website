    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    {{-- navbar --}}
    <section>
        <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">

            <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the World</q></span>
        </div>
        {{-- small nav --}}
        <div class="small-nav d-none d-md-flex align-items-center justify-content-between">
            <div>
                <ul class="d-flex justify-content-end fw-bold text-small">
                    <li>
                        <a href="https://www.facebook.com/mwecau2016/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mwengecatholicuniversity/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mwecau1" target="_blank"><i class="fab fa-x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/mwenge-catholic-university/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <ul class="d-flex justify-content-end fw-bold text-small">
                <li>
                    <a href="{{ route('alumni.home') }}" target="_blank">Alumni</a>
                </li>
                <li>
                    <a href="{{ route('uni.journals') }}">Journals</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Timetables
                    </a>
                    <ul class="dropdown-menu">
                        @if ($postgraduateTimetable)
                            <li class="dropdown-submenu">
                                <a target="_blank" style="border: none; color: black"
                                    href="{{ route('uni-pdf-preview', $postgraduateTimetable->file) }}">Postgraduate</a>
                            </li>
                        @endif
                        @if ($undergraduateTimetable)
                            <li class="dropdown-item">
                                <a target="_blank" style="border: none; color: black"
                                    href="{{ route('uni-pdf-preview', $undergraduateTimetable->file) }}">Undergraduate</a>
                            </li>
                        @endif
                        @if ($NondegreeTimetable)
                            <li class="dropdown-item">
                                <a target="_blank" style="border: none; color: black"
                                    href="{{ route('uni-pdf-preview', $NondegreeTimetable->file) }}">Non-degree</a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Joining instructions
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $postgraduateJoiningInstruction->file) }}">Postgraduate</a>
                        </li>
                        <li class="dropdown-item">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $undergrduateJoiningInstruction->file) }}">Undergraduate</a>
                        </li>
                        <li class="dropdown-item">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $NondegreeJoiningInstruction->file) }}">Non-degree</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Fee Structure
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $postgraduateFeeStructure->file) }}">Postgraduate</a>
                        </li>
                        <li class="dropdown-item">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $undergrduateFeeStructure->file) }}">Undergraduate</a>
                        </li>
                        <li class="dropdown-item">
                            <a target="_blank" style="border: none; color: black"
                                href="{{ route('uni-pdf-preview', $NondegreeFeeStructure->file) }}">Non-degree</a>
                        </li>
                    </ul>
                </li>
                @if ($almanac)
                    <li>
                        <a target="_blank" href="{{ route('uni-pdf-preview', $almanac->file) }}">Almanac</a>
                    </li>
                @else
                    <li>
                        <a target="_blank" href="">Almanac</a>
                    </li>
                @endif
            </ul>
        </div>
    </section>

    <section style="position: sticky; top: 0; z-index: 1">
        <nav class="navbar navbar-expand-lg" style="background-color: #513F83; color:#fff;">
            <div class="container-fluid">

                <a class=" navbar-brand text-decoration-none fw-bold" href="{{ url('/') }}" style="color: #fff;">
                    <img class="img-fluid d-none d-md-block d-sm-block" src="../../img/mwecau.png"
                        style="width: 100px;">
                </a>
                <div class="uniHeader2 d-md-block d-lg-none d-sm-block">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="{{ route('about') }}">About University</a></li>
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
                                @foreach ($faculties as $faculty)
                                    @if ($faculty['faculty_id'] === '0')
                                        <li><a class="dropdown-item"
                                                href="{{ route('faculty', $faculty['faculty_name']) }}">{{ $faculty['faculty_name'] }}

                                                ({{ $faculty['faculty_short_name'] }})
                                            </a></li>
                                    @endif
                                @endforeach
                                {{-- <li><a class="dropdown-item" href="{{ route('administrative-unit') }}">Administrative
                                        Unit</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('programs-list') }}">Programmes</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a href="{{ route('projects') }}">Projects</a>
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
                                    <a href="{{route('health.center')}}">Health Center Services</a>
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

    </section>
    <section>

        <div class="d-flex px-2"
            style="align-items: center;  border-bottom: 1px solid #fff; color:white; background-color: #513F83;">
            <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()">
                @if ($combinedItems->isNotEmpty())
                    @foreach ($combinedItems as $item)
                        @if ($item instanceof App\Models\NewsUpdate)
                            <span class="fw-bold" style="color: #f866b9">Latest News: </span>
                            <a href="{{ route('announcement-details', $item->name) }}" class="marquee">
                                <span>{{ $item->name }}</span>
                            </a>
                        @elseif ($item instanceof App\Models\Event)
                            <span class="fw-bold" style="color: #f866b9">Upcoming Events </span>
                            <a href="{{ route('event-details', $item->id) }}" class="marquee">
                                <span>{{ $item->event_title }}</span>
                            </a>
                        @endif
                    @endforeach
                @endif
            </marquee>
            <a href="https://uas.mwecau.ac.tz/">
                <button class="btn fw-bold mb-1 d-none d-md-block"
                    style="width: 150px; background-color: #e000e7; color: white">Apply
                    Now</button>
            </a>
        </div>

    </section>
