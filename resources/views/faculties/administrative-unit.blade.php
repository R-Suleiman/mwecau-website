@php
    $faculty_data;
    $faculty_departments;
    $staff_details = null;
    $staff_department = null;
    foreach ($faculties as $faculty) {
        if ($faculty['faculty_id'] === '0') {
            $faculty_data = $faculty;
            $faculty_departments = $faculty['departments'];
            foreach ($faculty_departments as $department) {
                $department_staffs = $department['staffs'];
                foreach ($department_staffs as $staff) {
                    if (str_contains($staff['position'], 'Vice Chancellor')) {
                        $staff_department = $department;
                        $staff_details = $staff;
                    }
                }
            }
        }
    }
@endphp
@extends('layouts.faculty')
@section('content')
    <div class="container">
        <div class="row">
            <div class="my-5 text-center">
                <h1 class="fs-2 fw-bold text-center favColor">{{ $faculty_data['faculty_name'] }} ({{ $faculty_data['faculty_short_name'] }})
                </h1>
            </div>

        </div>
        <section class="main-section">
            <div class="content-box">
                @if ($staff_details !== null)
                <div class="container mt-2">
                    <div class="row mb-5 ">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card shadow-lg darkMode">
                                <div class="card-body">
                                    @if ($staff_details['photo'] === '')
                                            <div class="text-center mb-4">
                                                <img src="{{ asset('../img/staff profiles/VC-MWECAU.jpg') }}" class="img-fluid rounded-circle w-50 " alt="staff photo">
                                            </div>
                                    @else
                                        <div class="text-center mb-4">
                                            <img src="{{ $staff_details['photo'] }}" class="img-fluid rounded-circle w-50 " alt="staff photo">
                                        </div>
                                    @endif

                                    <div class="card-text text-center ">
                                        <span>{{ $staff_details['salutation'] }}. {{ $staff_details['other_name'] }} {{ $staff_details['first_name'] }}
                                            {{ $staff_details['last_name'] }}</span> <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-8">
                            <table class="table table-success table-hover table-bordered table-striped ">
                                <tr>
                                    <th>Name: </th>
                                    <td>{{ $staff_details['salutation'] }}. {{ $staff_details['first_name'] }}
                                        {{ $staff_details['other_name'] }} {{ $staff_details['last_name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Designation: </th>
                                    <td>{{ $staff_details['position'] }}</td>
                                </tr>
                                <tr>
                                    <th>Department: </th>
                                    <td>{{ $staff_department['dept_name'] }} ({{ $staff_department['dept_short_name'] }})</td>
                                </tr>
                                <tr>
                                    <th>Specialization: </th>
                                    <td>{{ $staff_details['specialization'] }}</td>
                                </tr>
                                <tr>
                                    <th>Highest Award Level: </th>
                                    <td>{{ $staff_details['highest_award_level'] }}</td>
                                </tr>
                                <tr>
                                    <th>Email: </th>
                                    <td>{{ $staff_details['official_email'] }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                <div class="about-box">
                    <div class="about">
                        <h5>About {{ $faculty_data['faculty_name'] }}</h5>
                        <p>{{ $faculty_data['faculty_descriptions'] }}</p>
                    </div>

                    <div class="about">
                        <h5>Staff under {{ $faculty_data['faculty_name'] }}</h5>
                        <div class="tables">
                            <table id="myTable" class="table table-bordered text-sm">
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
                                            $counter = 1;
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

                    <div class="about">
                        <h5>Contact Us</h5>
                        <p><b>Location: </b> <label>Mwenge Catholic Univerisy</label></p>
                        <p><b>Address: </b> <label>P.O. Box 1226, Moshi, Kilimanjaro Tanzania.</label></p>
                        <p><b>Email: </b> <label>{{ $faculty_data['faculty_email'] }}</label></p>
                        <p><b>Phone: </b> <label>{{ $faculty_data['faculty_telephone'] }}</label></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
