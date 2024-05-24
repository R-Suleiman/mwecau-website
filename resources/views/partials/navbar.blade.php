          <!-- navigation bar -->
          @include('preloader')
          <section>
              <div class="uniHeader container-fluid text-center shadow-lg d-none d-lg-block d-md-none">
                  <h1> Mwenge Catholic University</h1> <span> <q class="fst-italic">Lux Mundi - Light of the
                          World</q></span>
              </div>
              <nav class="navbar navbar-expand-lg shadow-lg"
                  style="background-color: #513F83; color:#fff; border-bottom: 1px solid #fff">
                  <div class="container">
                      <a class=" navbar-brand text-decoration-none fw-bold" href="{{ url('/') }}"
                          style="color: #fff;">
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
                                  <a class="nav-link dropdown-toggle" href="#" role="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      About Us
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="{{ route('mwecau-staffs') }}">Staff</a></li>
                                      <li><a class="dropdown-item" href="{{ route('programs-list') }}">Programs</a></li>
                                      <li><a class="dropdown-item" href="{{ route('mwecau-staffs') }}">Library (web
                                              display)</a></li>
                                      <li><a class="dropdown-item" href="{{ route('register-staff') }}">Student
                                              Government</a></li>
                                  </ul>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('academics') }}" class="nav-link">Academics </a>
                              </li>

                              <li class="nav-item">
                                  <a href="https://uas.mwecau.ac.tz" target="_blank" class="nav-link">Admission</a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('icons') }}" class="nav-link">ICT Services</a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('pdf.upload.form') }}" class="nav-link">Research</a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('campus-life') }}" class="nav-link">Campus Life</a>
                              </li>

                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      Link
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="{{ route('admin.event') }}">Action</a></li>
                                      <li><a class="dropdown-item" href="{{ route('register-course') }}">Another
                                              action</a></li>
                                      <li>
                                          <hr class="dropdown-divider">
                                      </li>
                                      <li><a class="dropdown-item" href="{{ route('programs-list') }}">course list (web
                                              display)</a></li>
                                      <li><a class="dropdown-item" href="{{ route('mwecau-staffs') }}">staff list (web
                                              display)</a></li>
                                      <li><a class="dropdown-item" href="{{ route('register-staff') }}">register staff
                                              (admin route)</a></li>
                                      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>

                                      <div class="" aria-labelledby="">
                                          <a class="" href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </ul>
                              </li>

                          </ul>

                          <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                  <button class="btn shadow-lg text-light" id="nightModeToggle">
                                      <i class="fas fa-moon" aria-hidden="true"></i>`</button>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </section>
