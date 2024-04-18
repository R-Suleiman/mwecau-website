@extends('layouts.admin')

@section('content')
<section class="main-section">
      <div class="main-content">
        <div class="stats-box">
          <h3 class="title">Events</h3>
        </div>

        <div class="content-box">
          <div class="find-events">
            <form class="event-form">
              <div class="form-group">
                <label for="date">Date from:</label><br />
                <input type="date" name="date" id="date" style="width: 65%" />
              </div>
              <div class="form-group">
                <select name="category">
                  <option value="All categories">All</option>
                  <option value="Academic">Academics</option>
                  <option value="Entertainments">Entertainments</option>
                </select>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="keywords"
                  placeholder="search program"
                />
              </div>
              <div class="form-group" style="width: 10%; padding: 0">
                <button class="btn">Search</button>
              </div>
            </form>
          </div>

          <div class="category-content">
            @php
                $counter = 1;
            @endphp
            <table class="content-table">
              <thead>
                <tr>
                  <th style="width: 5%">S/N</th>
                  <th style="width: 27%">Event name</th>
                  <th style="width: 19%">Location</th>
                  <th style="width: 15%">Date</th>
                  <th style="width: 19%">Host</th>
                  <th style="width: 15%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($events as $event )
              <tr>
                  <td>{{ $counter++ }}</td>
                  <td>{{ $event->event_title }}</td>
                  <td>{{ $event->event_location }}</td>
                  <td>{{ $event->event_date }}</td>
                  <td>{{ $event->event_organizer }}</td>
                  <td class="actions-col">
                    <a href="{{ route('admin.event-details', [$event->id]) }}">
                      <i class="fa fa-eye actions-icon view"></i>
                    </a>
                    <i class="fa fa-pen actions-icon edit"></i
                    ><i class="fa fa-trash actions-icon delete"></i>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- pagination here -->
          </div>
        </div>
      </div>
    </section>
@endsection


    <script>
      const eventsTable = document.querySelector('.events-table')

      window.addEventListener('load', () => {
        eventsTable.style.display = 'block'
      })
    </script>
    {{-- <script src="./sidebar.js"></script> --}}
  </body>
</html>
