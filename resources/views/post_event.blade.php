<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Event</title>

  @include('links')
</head>

<body>
  @include('partials.navbar')

  <!-- Ecode Design -->
  <!-- <div class="container">
    <div class="row">
      <div class="col-6 co-md-6 col-lg-6 mt-5">
        <h3 class="mx-5 mb-3">About The Event</h3>
        <h5>Fill details about the Event</h5>
        <form action="">
          <input type="text" class="form-control" placeholder="Event Title" />
          <select name="category" class="form-select" id="category">
            <option value="Event Category">-- Event Category --</option>
            <option value="academic">Academic</option>
            <option value="clubsOrganizations">Clubs & Organizations</option>
            <option value="sportsEntertainment">Sports & Entertainment</option>
            <option value="culture">Culture</option>
            <option value="creativityTalents">Creativity & Talents</option>
          </select>

          <textarea name="" cols="50" class="form-control" rows="5" placeholder="Event Description"></textarea>
          <label>Upload event image</label>
          <input type="file" class="form-control" />

        </form>

      </div>
      <div class="col-6 co-md-6 col-lg-6">
        <form action="">
          <h1>FORM TWO</h1>
        </form>

      </div>
    </div>
  </div> -->

  <!-- Senior Design -->
  <!-- main content -->
  <div class="container-fluid">
    <div class="row event-row">
      <div class="col-sm-12 col-lg-8">
        <div class="about-event">
          <div class="underline mt-1 mb-4">
            <h3 class="text-center">About The Event</h3>
          </div>
          <h5>Fill details about the Event</h5>
          <form class="event-form2">
            <div class="event-inputs">
              <input type="text" class="form-control" placeholder="Event Title" />
              <select name="category" class="form-select" id="category">
                <option value="Event Category">-- Event Category --</option>
                <option value="academic">Academic</option>
                <option value="clubsOrganizations">Clubs & Organizations</option>
                <option value="sportsEntertainment">Sports & Entertainment</option>
                <option value="culture">Culture</option>
                <option value="creativityTalents">Creativity & Talents</option>
              </select>
            </div>

            <textarea name="" cols="50" class="form-control" rows="5" placeholder="Event Description"></textarea>

            <label>Upload event image</label>
            <input type="file" class="form-control" /> <br />

          </form>
        </div>

        <div class="event-speaker">
          <div class="mt-1 mb-4">
            <h3 class="text-center">Speakers or Organizers Details</h3>
          </div>
          <h5>Please provide details about the main Organizer or Speaker of the event</h5>

          <form class="event-form2">
            <div class="event-inputs">
              <input type="text" class="form-control" placeholder="Full Name" />
              <input type="text" class="form-control" placeholder="Profession" />
            </div>
            <textarea name="" cols="50" rows="5" class="form-control" placeholder="A brief about of the Speaker/Organizer"></textarea>
            <label>Speaker Photo (Optional)</label>
            <input type="file" class="form-control" /> <br />
          </form>
        </div>
      </div>

      <form class="col-sm-12 col-lg-4 other-event-det post-event-det">
        <div class="underline mt-1 mb-4">
          <h3 class="text-center">More Event Details</h3>
        </div>

        <form action="" class="event-form2">
          <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label ">Cost</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="cost" placeholder="Free">
            </div>
          </div>

          <div class="row mb-3">
            <label for="eventDate" class="col-sm-2 col-form-label "> Event Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="eventDate" placeholder="Event Date">
            </div>
          </div>

          <div class="row mb-3">
            <label for="eventStartTime" class="col-sm-2 col-form-label ">Event start time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="eventStartTime" placeholder="Event Start Time">
            </div>
          </div>

          <div class="row mb-3">
            <label for="eventEndTime" class="col-sm-2 col-form-label ">Event End Time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="eventEndTime" placeholder="Enter event end time">
            </div>
          </div>

          <div class="row mb-3">
            <label for="location" class="col-sm-2 col-form-label ">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="location" placeholder="Event Location">
            </div>
          </div>

          <div class="row mb-3">
            <label for="organizer" class="col-sm-2 col-form-label ">Organizer</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="organizer" placeholder="Enter Organizer">
            </div>
          </div>

          <div class="row mb-3">
            <label for="eventEndTime" class="col-sm-2 col-form-label ">Event End Time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="eventEndTime" placeholder="Enter event end time">
            </div>
          </div>

          <div class="row mb-3">
            <label for="totalSlots" class="col-sm-2 col-form-label ">Total Slots</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="totalSlots" placeholder="eg: 100">
            </div>
          </div>

          <div class="row mb-3">
            <label for="bookedSlots" class="col-sm-2 col-form-label ">Booked Slots</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="bookedSlots" placeholder="Booked Slots">
            </div>
          </div>

          <!-- <div class="event-detail">
            <div>
              <i class="fa fa-bill"></i>
              <h6>Cost</h6>
            </div>
            <input type="text" class="form-control" placeholder="default: free">
          </div>

          <div class="event-detail">
            <div>
              <i class="fa fa-calendar"></i>
              <h6>Event Date</h6>
            </div>
            <input type="date" class="form-control">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-clock"></i>
              <h6>Event Start Time</h6>
            </div>
            <input type="text" class="form-control" placeholder="e.g. 11:30 am">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-clock"></i>
              <h6>Event End Time</h6>
            </div>
            <input type="text" class="form-control" placeholder="e.g. 04:00 pm">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-map-marker"></i>
              <h6>Location</h6>
            </div>
            <input type="text" class="form-control">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-user"></i>
              <h6>organizer</h6>
            </div>
            <input type="text" placeholder="e.g. John Doe" class="form-control">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-users"></i>
              <h6>Total Slots</h6>
            </div>
            <input type="text" placeholder="e.g. 100" class="form-control">
          </div>
          <div class="event-detail">
            <div>
              <i class="fa fa-lock"></i>
              <h6>Booked Slots</h6>
            </div>
            <input type="text" class="form-control">
          </div> -->

          <!-- <div class="col-12 col-lg-12 col-md-3">
            <label for="bookedSlots">Booked Slots</label>
            <input type="text" class="form-control" id="bookedSlots">
          </div> -->

          <button type="submit" class="learnBtn">Post Event</button>

          <!-- <div class="event-detail exp-flag">
            <p style="margin: 5px 20px">This event has already expired</p>
          </div>
          <div class="event-detail event-socials">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-tumblr"></i>
            <i class="fa fa-envelope"></i>
          </div> -->
        </form>
    </div>
  </div>
  </div>
  <!-- main content end -->

  @include('partials.footer')
  @include('jslinks')
</body>

</html>