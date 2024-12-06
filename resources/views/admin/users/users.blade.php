@extends('layouts.admin')
@section('content')
    <div class="text-end m-3">
        <a href="{{ route('admin.new-web-admin') }}">

            <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New</button>
        </a>
    </div>

    <x-messages />

    <div class="content-box">
        <div class="category-content">
            @php
                $counter = 1;
            @endphp
            <table class="myTable table table-bordered table-hover table-striped">
                <thead>
                    <tr class="favbg">
                        <th style="width: 5%">S/N</th>
                        <th style="width: 27%">Name</th>
                        <th style="width: 19%">Email</th>
                        <th style="width: 15%">Role</th>
                        <th style="width: 15%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->role == 1)
                                    <span class="text-success">{{ 'Librarian' }}</span>
                                @elseif ($user->role == 2)
                                    <span class="text-success">{{ 'Research and Consultancy' }}</span>
                                @elseif ($user->role == 3)
                                    <span class="text-red-600">{{ 'Health Center' }}</span>
                                @else
                                    <span class="text-danger fst-italic">{{ 'Unknown Role' }}</span>
                                @endif
                            </td>

                            <td class="actions-col">
                                <a href="{{ route('admin.edit-web-admin', $user->name) }}">
                                    <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                            aria-hidden="true"></i></button>
                                </a>

                                <form action="{{ route('admin.destroy-web-admin', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>

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
