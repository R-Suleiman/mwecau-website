<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Events</title>
     
    @include('links')
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>

      <style>
        a{
            text-decoration: none;
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
            <div class="underline mt-5 mb-5">
              <h1 style="text-align: center">Events</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="find-events">
          <form class="event-form">
            <div class="form-group">
              <label for="date">Date from:</label><br />
              <input type="date" name="date" id="date" style="width: 70%" />
            </div>
            <div class="form-group">
              <select name="category">
                <option value="All categories">All categories</option>
                <option value="Academic">Academic</option>
                <option value="Entertainments">Entertainments</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="keywords" placeholder="keywords" />
            </div>
            <div class="form-group" style="width: 10%">
              <button class="search-btn">Find Events</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid main-events">
      <div class="row events-cont">
        <div class="col-12 col-lg-3 col-md-3 event-img">
          <a href=""
            ><img src="/img/students1.JPG" alt="event image"
          /></a>
        </div>
        <div class="col-12 col-lg-7 col-md-6 event-content">
          <label>Category</label>
          <a href="" class="link"
            ><h3>This is where the title of an event stays</h3></a
          >
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
            perferendis dolore dolorem consequuntur similique iusto iste numquam
            sed modi. Sequi beatae voluptatibus ipsum aperiam atque. Non placeat
            pariatur ipsum omnis....
          </p>
        </div>
        <div class="col-12 col-lg-2 col-md-3">
          <div class="stamps">
            <i class="fa fa-clock"></i> <span>2:30 pm - 3:30 pm</span>
          </div>
          <div class="stamps">
            <i class="fa fa-calendar"></i> <span> April 19, 2024</span>
          </div>
          <div class="stamps">
            <i class="fa fa-map-marker"></i> <span>MWECAU</span>
          </div>
          <a href="event.html"
            ><button class="search-btn event-btn">view more</button></a
          >
        </div>
      </div>

      <div class="row events-cont">
        <div class="col-12 col-lg-3 col-md-3 event-img">
          <a href=""
            ><img src="/img/students2.JPG" alt="event image"
          /></a>
        </div>
        <div class="col-12 col-lg-7 col-md-6 event-content">
          <label>Category</label>
          <a href="" class="link"
            ><h3>This is where the title of an event stays</h3></a
          >
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
            perferendis dolore dolorem consequuntur similique iusto iste numquam
            sed modi. Sequi beatae voluptatibus ipsum aperiam atque. Non placeat
            pariatur ipsum omnis....
          </p>
        </div>
        <div class="col-12 col-lg-2 col-md-3">
          <div class="stamps">
            <i class="fa fa-clock"></i> <span>2:30 pm - 3:30 pm</span>
          </div>
          <div class="stamps">
            <i class="fa fa-calendar"></i> <span> April 19, 2024</span>
          </div>
          <div class="stamps">
            <i class="fa fa-map-marker-alt"></i> <span>MWECAU</span>
          </div>
          <a href="event.html"
            ><button class="search-btn event-btn">view more</button></a
          >
        </div>
      </div>
    </div>

    <!-- main content end -->

    @include('partials.footer')

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
