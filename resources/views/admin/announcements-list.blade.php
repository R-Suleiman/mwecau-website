@extends('layouts.admin')

@section('content')
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
        <table class="myTable table table-hover table-bordered table-stripped">
            <thead>
                <tr class="favbg">
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

                            <a href="{{ route('admin.announcement.details', [$announcement->name]) }}">
                                <button class="btn btn-secondary"> <i class="fa fa-eye" aria-hidden="true"></i></button>
                            </a>

                            <a href="{{ route('admin.edit.announcement', $announcement->name) }}">
                                <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                        aria-hidden="true"></i></button>
                            </a>

                            <form action="{{ route('admin.destroy.annoucement', $announcement->id) }}" method="POST">
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
