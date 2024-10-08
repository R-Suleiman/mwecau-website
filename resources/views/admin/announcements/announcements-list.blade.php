@extends('layouts.admin')

@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h2 class="text-center">{{ 'Active Announcement' }}</h2>
            </div>
            <hr>
            <div class="text-end m-3">
                <a href="{{ route('admin.post.announcement') }}">
                    <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New Announcement</button>
                </a>
            </div>
            <div class="">
                @php
                    $counter = 1;
                @endphp
                <x-messages />
                <table class="table table-primary table-hover table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $announcement->name }}</td>
                                <td class="d-flex">

                                    <a href="{{ route('admin.event-details', [$announcement->id]) }}">
                                        <button class="btn btn-secondary"> <i class="fa fa-eye"
                                                aria-hidden="true"></i></button>
                                    </a>

                                    <a href="{{ route('admin.edit.announcement', $announcement->name) }}">
                                        <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                                aria-hidden="true"></i></button>
                                    </a>

                                    <form action="{{ route('admin.destroy.annoucement', $announcement->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are sure you want to delete this announcement! This action cant be reversed')">
                                            <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class="content-box">
                <div class="category-content">
                    @php
                        $counter = 1;
                    @endphp
                    <table class="myTable content-table">
                        <thead>
                            <tr class="favbg">
                                <th style="width: 5%">S/N</th>
                                <th style="width: 27%">Name</th>
                                <th style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($announcements as $event)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td class="actions-col">

                                        <a href="{{ route('admin.event-details', [$event->id]) }}">
                                            <button class="btn btn-secondary"> <i class="fa fa-eye"
                                                    aria-hidden="true"></i></button>
                                        </a>

                                        <a href="{{ route('admin.edit.event', $event->id) }}">
                                            <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                                    aria-hidden="true"></i></button>
                                        </a>

                                        <form action="{{ route('admin.destroy.event', $event->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button class="btn btn-danger"> <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
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
