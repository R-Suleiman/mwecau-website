@php
    $faculty_data;
    foreach ($faculties as $faculty) {
        if ($faculty['faculty_name'] == $faculty_name) {
            $faculty_data = $faculty;
        }
    }
    $faculty_departments = $faculty_data['departments'];
@endphp

@extends('layouts.faculty')
@section('content')
    <div class="container mt-5 mb-4">
        <div class="row">
            <h1 class="fs-2 text-center favColor">{{ $faculty_name }} ({{ $faculty_data['faculty_short_name'] }})</h1>
            <h3 class="fs-4 text-center favColor mt-3 mb-3">List of Staff</h3>
            @php
                $counter = 1;
            @endphp
        <div class="tables">
            <table class="myTable table table-bordered text-sm">
                <thead>
                    <tr class="favbg">
                        <th>S/N</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculty_departments as $department)
                        @php
                            $staffs = $department['staffs'];
                        @endphp
                        @foreach ($staffs as $staff)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $staff['salutation'] }}. {{ $staff['first_name'] }}</td>
                                <td>{{ $staff['other_name'] }}</td>
                                <td>{{ $staff['last_name'] }}</td>
                                <td>{{ $department['dept_short_name'] }}</td>
                                <td>
                                    <a href="{{ route('staff-profile', [$staff['first_name'], $staff['last_name']] ) }}"><button class="btn btn-outline-secondary">view</button></a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>

            </table>
        </div>
        </div>
    </div>
@endsection
