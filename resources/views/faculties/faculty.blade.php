@php
    $faculty_data;
    $staff_details = null;
    $staff_department = null;
    foreach ($faculties as $faculty) {
        if ($faculty['faculty_name'] === $faculty_name) {
            $faculty_data = $faculty;
            $faculty_departments = $faculty['departments'];
            foreach ($faculty_departments as $department) {
                $department_staffs = $department['staffs'];
                foreach ($department_staffs as $staff) {
                    if ($faculty_data['faculty_id'] === '0' && str_contains($staff['position'], 'Vice Chancellor')) {
                        $staff_department = $department;
                        $staff_details = $staff;
                    } else if (str_contains($staff['position'], 'Dean')) {
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
<div>
@if ($faculty_data['faculty_id'] === '1')
<img src="{{ asset('img/site banners/FOS.jpg') }}" alt="" class="w-100">
@elseif ($faculty_data['faculty_id'] === '2')
<img src="{{ asset('img/site banners/(FoHBS).jpg') }}" alt="" class="w-100">
@elseif ($faculty_data['faculty_id'] === '3')
<img src="{{ asset('img/site banners/(FoED).jpg') }}" alt="" class="w-100">
@elseif ($faculty_data['faculty_id'] === '4')
<img src="{{ asset('img/site banners/(DNoDP).jpg') }}" alt="" class="w-100">
@endif
</div>

    <div class="container mt-5">
        {{-- <div class="row">
            <div class="my-5 text-center">
                <h1 class="fs-2 fw-bold text-center favColor">{{ $faculty_name }} ({{ $faculty_data['faculty_short_name'] }})
                </h1>
            </div>
        </div> --}}
        <section class="main-section">
            <div class="content-box">
                @if ($staff_details !== null)
                <div class="container mt-2">
                    <div class="row mb-5 ">
                        <h3 class="title favColor darkMode text-center mb-4">{{ $faculty_data['faculty_name'] }}</h3>
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
                                        <span>{{ $staff_details['salutation'] }}. {{ $staff_details['first_name'] }} {{ $staff_details['other_name'] }}
                                            {{ $staff_details['last_name'] }}</span> <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-8 prof-details-block">
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

                    {{-- <div class="about">
                        <h5>Faculty Structure</h5>
                        <p>Coming Soon...</p>
                    </div> --}}

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
