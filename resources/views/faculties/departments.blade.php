@php
    $faculty_data;
    $department_data;
    $department_staff;
    foreach ($faculties as $faculty) {
        if ($faculty['faculty_name'] === $faculty_name) {
            $faculty_data = $faculty;
        }
    }
    $faculty_departments = $faculty_data['departments'];

    // get departments data
    foreach ($faculty_departments as $department) {
        if ($department['dept_name'] === $dept_name) {
            $department_data = $department;
            $department_staff = $department['staffs'];
        }
    }
@endphp

@extends('layouts.faculty')
@section('content')
    <section class="main-section">
        <div class="header-box text-center my-5">
            <h1 class="fs-4 fw-bold text-center favColor mt-3 mb-3">{{ $dept_name }} ({{ $department_data['dept_short_name'] }})</h1>
        </div>
        <div class="content-box">
            {{-- HOD's Profile --}}

            {{-- <div class="container mt-2">
                <div class="row mb-5 ">
                    <h3 class="title favColor darkMode">{{ 'Staff Profile' }}</h3>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card shadow-lg darkMode">
                            <div class="card-body">
                                @if ($staff_details['photo'] === '')
                                    @if ($staff_details['gender'] === 'M')
                                        <div class="text-center mb-4">
                                            <img src="{{ asset('../img/staff profiles/Male_Avatar.jpg') }}" class="img-fluid rounded-circle w-50 " alt="staff photo">
                                        </div>
                                    @else
                                        <div class="text-center mb-4">
                                            <img src="{{ asset('../img/staff profiles/female_avatar.jpg') }}" class="img-fluid rounded-circle w-50 " alt="staff photo">
                                        </div>
                                    @endif
                                @else
                                    <div class="text-center mb-4">
                                        <img src="{{ $staff_details['photo'] }}" class="img-fluid rounded-circle w-50 " alt="staff photo">
                                    </div>
                                @endif

                                <div class="card-text text-center ">
                                    <span>{{ $staff_details['first_name'] }}
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
            </div> --}}

            <div class="about-box">
                <div class="about">
                    <h5>About Department</h5>
                    <p>{{ $department_data['dept_descriptions'] }}</p>
                </div>

                <div class="about mt-5 mb-5">
                    <h5 class="mb-4">Programs under Department</h5>
                    <div class="tables">
                       <table id="myTable" class=" table table-bordered text-sm">
                        <thead>
                            <tr class="favbg">
                                <th>S/N</th>
                                <th>Programme ID</th>
                                <th>Program Name</th>
                                <th>Duration</th>
                                <th>Delivery Mode</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $programmes = $department_data['programmes'];
                                $counter = 1;
                            @endphp
                            @foreach ($programmes as $programme)
                                @if ($programme['study_level_code'] === 'DEG')
                                    @php
                                        $programme_category = 'undergraduate';
                                    @endphp
                                @elseif ($programme['study_level_code'] === 'MAS' || $programme['study_level_code'] === 'PHD')
                                    @php
                                        $programme_category = 'post-graduate';
                                    @endphp
                                @elseif ($programme['study_level_code'] === 'CET' || $programme['study_level_code'] === 'DIP')
                                    @php
                                        $programme_category = 'non-degree';
                                    @endphp
                                @endif

                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $programme['programme_id'] }}</td>
                                    <td>{{ $programme['programme_name'] }}</td>
                                    <td>{{ $programme['prog_duration'] }} years</td>
                                    <td></td>
                                    <td>
                                        <a
                                            href="{{ route('course_details', [$programme_category, $programme['programme_name']]) }}"><button
                                                class="btn btn-outline-secondary">view</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                    </div>
                </div>

                <div class="about mt-5 mb-5">
                    <h5 class="mb-4">Staff under Department</h5>
                    <div class="tables">
                        <table id="myTable" class="table table-bordered text-sm">
                            <thead>
                                <tr class="favbg">
                                    <th>S/N</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($department_staff as $staff)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $staff['salutation'] }}. {{ $staff['first_name'] }}</td>
                                            <td>{{ $staff['other_name'] }}</td>
                                            <td>{{ $staff['last_name'] }}</td>
                                            <td>
                                                <a href="{{ route('staff-profile', [$staff['first_name'], $staff['last_name']] ) }}"><button class="btn btn-outline-secondary">view</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="about">
                    <h5>Contact Us</h5>
                    <p><b>Location: </b> <label>Mwenge Catholic Univerisy</label></p>
                    <p><b>Address: </b> <label>P.O. Box 1226, Moshi, Kilimanjaro Tanzania.</label></p>
                    <p><b>Email: </b> <label>{{ $department_data['dept_email'] }}</label></p>
                    <p><b>Phone: </b> <label>{{ $department_data['dept_telephone'] }}</label></p>
                </div>
            </div>
        </div>
    </section>
@endsection
