    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    {{-- navbar --}}
    <section>
        <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">

            <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the World</q></span>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #513F83; color:#fff;">
            <div class="container-fluid">

                <a class=" navbar-brand text-decoration-none fw-bold" href="{{ url('/') }}" style="color: #fff;">
                    <img class="img-fluid d-none d-md-block d-sm-block" src="../../img/mwecau.png" style="width: 100px;">
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
                            <a href="{{ route('alumni.home') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">News</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Events</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Alumni Resources</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
