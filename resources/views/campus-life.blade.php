<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Campus Life</title>

    @include('links')
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
        .talent-cont {
    margin: 30px 10px;
    padding: 20px 5px;
  }

  .talent-content-container {
    width: 70%;
    /* height: 500px; */
    background-color: white;
    position: relative;
    margin-left: auto;
    padding: 30px 50px 110px 300px;
  }

  .talent-pics {
    width: 65%;
    height: 300px;
    z-index: 1000;
    position: absolute;
    left: -40%;
    top: 10%;
  }

  .talent-content {
    width: 50%;
    position: absolute;
    top: 0%;
    right: 20%;
  }

  .talent-content-container p {
    font-size: 20px;
    color: rgb(99, 97, 97);
    margin-bottom: 20px;
  }

  .talent-content-container h3 {
    margin-bottom: 20px;
    font-size: 22px;
    color: rgb(99, 97, 97);
  }

  .talent-pics img {
    width: 100%;
  }

    </style>
  </head>
  <body style="background-color: whitesmoke">
    @include('preloader')
    @include('partials.navbar')


    {{-- about us landing page --}}
    <section class="">
        <div class="text-center wrapper align-content-center"
            style="position: relative; background: linear-gradient(to right, #513f83, #513f83); min-height: 100vh;">
            <section>
                <div class="academis1 text-center">
                    <div class="academicsText1 justify-items-around align-content-center">
                        <h1 class="underline display-1">Campus Life</h1>
                        <p class="fs-5 d-none ">
                            Studying at Mwenge catholic University is a great way to enhance your career.
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

    <!-- bg -->
    <section>
      <div>
        <div class="landing-image d-none ">
          <div class="landing-text nav-content">
            <!-- <h1>Welcome to Mwenge Catholic University</h1> -->
            <div class="mt-5 mb-5">
              <h1 class="text-center display-1 fw-bold">Campus Life</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- main content -->
    <div class="container-fluid" style="background-color: white">
      <div class="underline mt-5 mb-2" style="width: 100%;">
          <h1 style="text-align: center">Student Life</h1>
      </div>
      <p style="text-align: center; font-size: 20px; color: rgb(99, 97, 97);">Life at MWECAU is enriching, exciting, and energizing</p>
      <div
        class="row pt-5 campus-row"
      >
        <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
         <a href="#" class="card-1"> <div class="card h-100 campus-card" style="width: 100%; border: none">
        <img src="/img/students1.JPG" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Student Affairs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
         <a href="#" class="card-2"> <div class="card h-100 campus-card" style="width: 100%; border: none">
            <img src="/img/students2.JPG" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Clubs and Organization</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-4 mb-4 d-flex">
         <a href="#" class="card-3"> <div class="card h-100  campus-card" style="width: 100%; border: none">
            <img src="/img/students3.jpg" class="card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title">Housing</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>

    <div class="container-fluid ">
      <div class="row talent-cont">
        <div class="talent-content-container">
          <!-- <div class="talent-content"> -->
            <div class="underline mt-4 mb-5" style="width: 80%;">
                <h1 style="text-align: center">Creativity & Talents</h1>
            </div>
            <p>MWECAU has a rich tradition of fostering creativity and talents, and presents a wide range of performances.</p>
            <div class="pic-nav">

              <h3>Picture 1</h3>
              <h3>Picture 2</h3>
              <h3>Picture 3</h3>
            </div>
          <!-- </div> -->
          <div class="talent-pics">
            <img src="/img/students2.JPG" alt="students">
          </div>
        </div>

      </div>
    </div>
    <!-- main content end -->
    @include('partials.footer')
    @include('jslinks')
  </body>
</html>
