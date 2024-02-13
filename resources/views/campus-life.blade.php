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
    @include('partials.navbar')
    <!-- bg -->
    <section>
      <div>
        <div class="landing-image">
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
