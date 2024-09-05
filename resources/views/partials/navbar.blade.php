          <!-- navigation bar -->
          @include('preloader')

          <style>
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
                                  <a class="nav-link dropdown-toggle" href="#" role="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      Academics
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown-submenu">
                                          <a class="dropdown-item dropdown-toggle" href="#"
                                              id="faculty">Faculties</a>
                                          <ul class="dropdown-menu" id="sub-faculty">
                                              @foreach ($faculties as $faculty)
                                                  <li><a class="dropdown-item"
                                                          href="{{ route('faculty', $faculty['faculty_name']) }}">{{ $faculty['faculty_name'] }} ({{ $faculty['faculty_short_name'] }})</a></li>
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

                              <li class="nav-item"> 
                                  <a href="{{ route('IT.services') }}" class="nav-link">ICT Services</a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('research') }}" class="nav-link">Research</a>
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
          </section>
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
