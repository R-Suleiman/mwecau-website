<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Events</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    @include('links')
  </head>
  <body style="background-color: whitesmoke">
@include('partials.navbar')


    <!-- main content -->
    {{-- <div class="container-fluid">
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
              <button class="btn search-btn">Find Events</button>
            </div>
          </form>
        </div>
      </div>
    </div> --}}
    <div class="container-fluid main-events">
        @if (count($event) > 0)
@foreach ($event as $events )
 <div class="row events-cont">
        <div class="col-12 col-lg-3 col-md-3 event-img">
          {{-- <a href=""><img src="{{ assets/img/students1.JPG }}" alt="event image"/> --}}
            <img src="{{ asset('images/eventImages/' . $events->event_image) }}"
            alt="{{ $events->event_image }}" class=" img-fluid ">
        </a>
        </div>
        <div class="col-12 col-lg-7 col-md-6 event-content">
          <label>{{ $events->event_category }}</label>
          <a href="" class="link"
            ><h3>{{ $events->event_title }}</h3></a
          >
          <p>
            {{ $events->event_decription }}
          </p>
        </div>
        <div class="col-12 col-lg-2 col-md-3">
          <div class="stamps">
            <i class="fa fa-clock"></i> <span>{{ $events->created_at }}</span>
          </div>
          <div class="stamps">
            <i class="fa fa-calendar"></i> <span> April 19, 2024</span>
          </div>
          <div class="stamps">
            <i class="fa fa-map-marker"></i> <span>{{ $events->event_location }}</span>
          </div>
          <a href="{{ route('event-details', $events->id) }}"
            ><button class="btn search-btn event-btn">view more</button></a
          >
        </div>
      </div>
@endforeach
        @endif
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
