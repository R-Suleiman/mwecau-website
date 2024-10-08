@extends('layouts.admin')
@section('content')
    <div class="text-end m-3">
        <a href="{{ route('admin.event') }}">

            <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New Event</button>
        </a>
    </div>

    <div class="content-box">
        <div class="category-content">
            @php
                $counter = 1;
            @endphp
            <table class="myTable table table-bordered table-hover table-striped">
                <thead>
                    <tr class="favbg">
                        <th style="width: 5%">S/N</th>
                        <th style="width: 27%">Event name</th>
                        <th style="width: 19%">Location</th>
                        <th style="width: 15%">Date</th>
                        <th style="width: 19%">Host</th>
                        <th style="width: 15%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $event->event_title }}</td>
                            <td>{{ $event->event_location }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->event_organizer }}</td>
                            <td class="actions-col">

                                <a href="{{ route('admin.event-details', [$event->id]) }}">
                                    <button class="btn btn-secondary"> <i class="fa fa-eye" aria-hidden="true"></i></button>
                                </a>

                                <a href="{{ route('admin.edit.event', $event->id) }}">
                                    <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                            aria-hidden="true"></i></button>
                                </a>

                                <form action="{{ route('admin.destroy.event', $event->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
