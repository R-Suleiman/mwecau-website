          <!-- navigation bar -->
          <section>
        <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">
            <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the World</q></span>
        </div>
        <nav class="navbar navbar-expand-lg shadow-lg"
            style="background-color: rgb(81, 63, 131); color:#fff; border-bottom: 2px solid #fff">
            <div class="container">
                <a class=" navbar-brand text-decoration-none fw-bold" href="" style="color: #fff;">
                    <img class="img-fluid d-none d-md-block d-sm-block" src="img/mwecau.png" style="width: 100px;">
                </a>
                <div class="d-md-block d-lg-none d-sm-block">
                    <h4>Mwenge Catholic University <br> </h4>
                    <small> <q class="fst-italic">Lux Mundi - Light of the World</q></small>
                </div>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class=""> <i class="fa fa-bars text-light fs-4" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{url ('/') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('academics') }}" class="nav-link">Academics </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Admission</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">ICT Services</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Research</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('campus-life') }}" class="nav-link">Campus Life</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button class="btn shadow-lg" id="nightModeToggle"> <i class="fas fa-moon"></i>
                                mode</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>