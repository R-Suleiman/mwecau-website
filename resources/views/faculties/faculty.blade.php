@php
$faculty_data;
    foreach ($faculties as $faculty) {
       if ($faculty['faculty_name'] === $faculty_name) {
        $faculty_data = $faculty;
       }
    }
@endphp
@extends('layouts.faculty')
@section('content')
    <div class="container">
        <div class="row">
            <div class="my-5 text-center">
                <h1 class="fs-2 text-center favColor">{{ $faculty_name }} ({{ $faculty_data['faculty_short_name'] }})</h1>
            </div>

        </div>
        <section class="main-section">
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
                                    <th>Title: </th>
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
                        <h5>About {{ $faculty_data['faculty_name'] }}</h5>
                        <p>{{ $faculty_data['faculty_descriptions'] }}</p>
                    </div>

                    <div class="about">
                        <h5>Faculty Structure</h5>
                        <p>Coming Soon...</p>
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
