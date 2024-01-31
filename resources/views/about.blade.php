<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MWECAU | About Us</title>
  <!--slick  slider-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @include('links')
</head>

<body>
  <!-- partners -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  @include('partials.navbar')

  <!-- corousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/uni.jpg" class="d-block w-100 background-container" alt="..." />
        <div class="dark-overlay">
          <div class="nav-content">
            <h1 class="display-4 fw-bold">Discover the world of possibility with MWECAU</h1>
            <p style="color: white;">Fall 2024 applications are now open</p>
            <button class="btn admission-btn">Admissions</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/students1.JPG" class="d-block w-100 background-container" alt="..." />
        <div class="dark-overlay">
          <div class="nav-content">
            <h1 class="display-4 fw-bold">Discover the world of possibility with MWECAU</h1>
            <p>Fall 2024 applications are now open</p>
            <button class="btn admission-btn">Admissions</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/students4.jpg" class="d-block w-100 background-container" alt="..." />
        <div class="dark-overlay">
          <div class="nav-content">
            <h1 class="display-4 fw-bold">Discover the world of possibility with MWECAU</h1>
            <p>Fall 2024 applications are now open</p>
            <button class="btn admission-btn">Admissions</button>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- main content -->
  <div class="container about-container">
    <div class="row">
      <div class="col-sm-6">
        <div class="underline mt-2 mb-5 ">
          <h2 style="text-align: center; ">
            About Us
          </h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Voluptatibus, ea illo? Iure facilis vitae laudantium exercitationem
          quisquam inventore alias? Ratione suscipit quam perferendis dolores
          aliquid esse iusto consectetur facere. Vitae.
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          Our community is being called to reimagine the future. As the only
          university where a renowned design school comes together with
          premier colleges, we are making learning more relevant and
          transformational. We are enriched by the wide range of experiences
          and perspectives of our students, faculty, staff and alumni.
          Preparing students to make meaningful contributions to society as
          leaders in a complex world.
        </p>
      </div>
    </div>
  </div>

  <div class="container-fluid about-container">
    <div class="row mission-block">
      <div class="underline mt-2 mb-5 ">
        <h2 style="text-align: center; ">
          MWECAU Mission and Vision
        </h2>
      </div>
      <div class="col-sm-3 mb-5">
        <div class="card h-100 d-flex flex-column " style="width: 100%; border: none; ">
          <div class="card-body mission-card" style="border-radius: 10px">
            <i class="fa fa-bullseye display-3 mb-3 icons"></i>
            <h5 class="card-title">Mission</h5>
            <p class="card-text">
              The mission of the University is “to produce professionally
              competent, innovative, and committed graduates who are grounded
              on professional excellence and moral integrity for provision of
              quality services to Tanzanian and the global community
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-5">
        <div class="card h-100 d-flex flex-column " style="width: 100%; border: none; ">
          <div class="card-body mission-card" style="border-radius: 10px">
            <i class="fa fa-eye display-3 mb-3 icons"></i>
            <h5 class="card-title">Vision</h5>
            <p class="card-text">
              Vision is to be a “leading University that sets a national,
              regional, and international example in Education and Training,
              Research, and Consulting as well as Community Service.”
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-5">
        <div class="card h-100 d-flex flex-column" style="width: 100%; border: none; ">
          <div class="card-body mission-card" style="border-radius: 10px">
            <i class="fa fa-file-text display-3 mb-3 icons"></i>
            <h5 class="card-title">Core values</h5>
            <p class="card-text">
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Integrity</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Trust</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Excellence</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Accountability</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Respect</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Teamwork</li>
              <li><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i> Service</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-5">
        <div class="card h-100 d-flex flex-column " style="width: 100%; border: none; ">
          <div class="card-body mission-card" style="border-radius: 10px">
            <i class="fa fa-pencil display-3 mb-3 icons"></i>
            <h5 class="card-title">Motto / Slogan</h5>
            <p class="card-text">
              The University is dedicated to St. Joseph the Worker, with the motto ‘‘Lux Mundi’’ which translates in English to “Light of the World.”
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- video -->
  <div class="container-fluid mb-5" style="margin: 10px">
    <iframe width="100%" height="550" src="https://www.youtube.com/embed/1T_B9-kAKDE?si=it0oEVNizz0J76rI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <!-- counters -->
  <div class="container">
    <div class="elfsight-app-bb3abb2b-f006-4982-93a0-a3efdda478c1" data-elfsight-app-lazy></div>
  </div>

  <!-- academics -->
  <div class="container">
    <div class="row academic-cont">
      <div class="underline mt-2 mb-5 ">
        <h2 style="text-align: center; ">
          Life at MWECAU
        </h2>
      </div>
      <div class="col-sm-4 mb-5">
        <div class="card h-100 d-flex flex-column mission-card" style="width: 100%; border: none">
          <img src="assets/img/MWECAU logo.png" class="card-img-top" alt="..." style="width: 60%;">
          <div class="card-body mission-card">
            <h5 class="card-title">Affordability</h5>
            <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-5">
        <div class="card h-100 d-flex flex-column mission-card" style="width: 100%; border: none">
          <img src="assets/img/MWECAU logo.png" class="card-img-top" alt="..." style="width: 60%;">
          <div class="card-body mission-card">
            <h5 class="card-title">Academics</h5>
            <p class="card-text" style="text-align: center;">An education at MWECAU has limitless possibilities. Our courses are taught by esteemed faculty members.</p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-5">
        <div class="card h-100 d-flex flex-column mission-card" style="width: 100%; border: none">
          <img src="assets/img/MWECAU logo.png" class="card-img-top" alt="..." style="width: 60%;">
          <div class="card-body mission-card">
            <h5 class="card-title">Inspiring student's life</h5>
            <p class="card-text" style="text-align: center;">Our residential system creates more opportunities for learning with peers and professors from different backgrounds. </p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- gallery -->
  <div class="container-fluid mt-5 mb-5">
    <div class="row gallery">
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/students1.JPG" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/uni.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/students3.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/students2.JPG" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/students4.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 gallery-cont">
        <img src="assets/img/uni2.JPG" alt="">
      </div>
    </div>
  </div>


  <!-- partners -->

  <div class="container mt-5 mb-5">
    <div class="underline mt-2 mb-5 " style="width: 100%;">
      <h2 style="text-align: center; ">
        Our Partners
      </h2>
    </div>
    <div class="row partners">
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/MWECAU logo.png" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/study1.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/mwecau2.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/marv.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/marv.jpg" alt="">
      </div>
      <div class="col-6 col-lg-2 col-md-4 partner">
        <img src="assets/img/marv.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- visiting mwecau -->
  <!-- <div class="container-fluid">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="uni.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pic3-980x453.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="uni.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div> -->

  <!-- main content end -->

  <!-- Footer -->
  @include('partials.footer')


  <!--bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- counter -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

  <!-- slick -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="assets/js/about.js"></script>

</body>

</html>