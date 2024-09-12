@php
    $faculty_data;
    $department_data;
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
        }
    }
@endphp

@extends('layouts.faculty')
@section('content')
    <section class="main-section">
        <div class="header-box text-center my-5">
            {{-- <h1 class="fs-2 text-center favColor">{{ $faculty_name }} ({{ $faculty_data['faculty_short_name'] }})</h1> --}}
            <h1 class="fs-4 fw-bold text-center favColor mt-3 mb-3">{{ $dept_name }} ({{ $department_data['dept_short_name'] }})</h1>
        </div>
        <div class="content-box">
            <div class="profile">
                <div class="short-profile">
                    <img src="" alt="profile photo">
                </div>
                <div class="long-profile">
                    <div class="biodata">
                        <table class="bio-tb">
                            <tr>
                                <th>Name: </th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Designation: </th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Email: </th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Contacts: </th>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

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
