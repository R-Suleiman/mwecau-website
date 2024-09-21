@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="mt-5 mb-4">
            <div class="favColor mb-5 darkMode">
                <h2 class="text-center">Academic Staff</h2>
            </div>
            @php
                $counter = 1;
            @endphp
            <div class="list-table">
                <table class="myTable table table-bordered table-secondary table-responsive">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($faculties as $faculty)
                            @if ($faculty['faculty_id'] !== '0')
                                @foreach ($faculty['departments'] as $department)
                                    @foreach ($department['staffs'] as $staff)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $staff['salutation'] }}. {{ $staff['first_name'] }}</td>
                                            <td>{{ $staff['other_name'] }}</td>
                                            <td>{{ $staff['last_name'] }}</td>
                                            <td>{{ $department['dept_short_name'] }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('staff-profile', [$staff['first_name'], $staff['last_name']]) }}"><button
                                                        class="btn btn-outline-secondary">view</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            const staffTable = document.querySelector('.staff-table')

            window.addEventListener('load', () => {
                staffTable.style.display = 'block'
            })
        </script>
    @endsection
