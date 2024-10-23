@php
    $staff_details;
    $staff_department;
    foreach ($faculties as $faculty) {
        $faculty_departments = $faculty['departments'];
        foreach ($faculty_departments as $department) {
            $department_staffs = $department['staffs'];
            foreach ($department_staffs as $staff) {
                if ($staff['first_name'] === $first_name && $staff['last_name'] === $last_name) {
                    $staff_department = $department;
                    $staff_details = $staff;
                }
            }
        }
    }
@endphp

@extends('layouts.web')
@section('content')
    <section class="main-section profile-info-sec">
        <div class="main-content">
            <div class="stats-box">
                {{-- <h3 class="title">Staff Profile</h3> --}}
            </div>

            {{-- Hidden form to request photo --}}
            <form id="photoForm">
                @csrf
                <input type="hidden" name="id" value="{{ $staff_details['person_id'] }}">
            </form>


            <div class="container-fluid mt-5 staff-container">
                <div class="row mb-5 ">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card shadow-lg darkMode">
                            <div class="card-body">
                            {{-- photo section --}}
                                    <div class="text-center mb-4" id="picture" data-gender="{{$staff_details['gender']}}">
                                    </div>

                                <div class="card-text text-center ">
                                    <span>{{ $staff_details['salutation'] }}. {{ $staff_details['first_name'] }}
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
                                <th>Gender: </th>
                                <td>{{ $staff_details['gender'] }}</td>
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
                        </table>
                    </div>
                </div>
            </div>

            <div class="content-box staff-container">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="about">
                                <h4 class="favColor">About {{ $staff_details['first_name'] }} {{ $staff_details['last_name'] }}
                                </h4>
                                <p>Bio Coming soon...</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="about">
                                <h4 class="favColor">Contacts</h4>
                                <div class="my-2">
                                    <i class=" fa fa-envelope"></i>
                                    <label>{{ $staff_details['official_email'] }}</label>
                                </div>
                                <div class="my-2">
                                    <i class=" fa fa-phone"></i>
                                    <label>{{ $staff_details['phones'] }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Qualifications --}}
            <div class="content-box my-5 staff-container">
                <div class="container-fluid ">
                    <div class="d-flex gap-3">
                        <button class="btn btn-secondary mb-2 btn-sm darkMode academic-q-btn">
                            <i class="fa fa-graduation-cap icon"></i> Academic Qualifications
                        </button>
                        <button class="btn btn-secondary mb-2 btn-sm darkMode prof-q-btn">
                            <i class="fa fa-user icon"></i> Professional Qualifications
                        </button>
                    </div>
                    <div class="category-content academic-q-table">
                        <table class="table table-success table-hover table-bordered q-table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Study Level</th>
                                    <th>Qualification Name</th>
                                    <th>Institution</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="category-content content-table prof-qual-table">
                        <table class="table table-success table-hover table-bordered q-table prof-q-table">
                            <thead>
                                <tr>
                                    <th style="width: 5%">S/N</th>
                                    <th style="width: 30%">Pro Study Level</th>
                                    <th style="width: 20%">Qualification Name</th>
                                    <th style="width: 30%">Institution</th>
                                    <th style="width: 15%">Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Research --}}
            <div class="content-box my-5 staff-container">
                <div class="container-fluid ">
                    <div class="d-flex gap-3">
                        <button class="btn btn-secondary mb-2 btn-sm darkMode publications-btn">
                            <i class="fa fa-book icon"></i> Publications
                        </button>
                        <button class="btn btn-secondary mb-2 btn-sm darkMode research-btn">
                            <i class="fa fa-newspaper icon"></i> Research Projects
                        </button>
                        <button class="btn btn-secondary mb-2 btn-sm darkMode honors-btn">
                            <i class="fa fa-graduation-cap icon"></i> Honors & Awards
                        </button>
                        <button class="btn btn-secondary mb-2 btn-sm darkMode appts-btn">
                            <i class="fa fa-star icon"></i> Appointments & Positions
                        </button>
                    </div>
                    {{-- publications --}}
                    <div class="category-content publications-table">

                        <div class="d-flex gap-3" style="border-top: 1px solid gray; padding-top: 5px">
                            <button class="btn btn-secondary mb-2 btn-sm darkMode journal-btn">
                                <i class="fa fa-newspaper icon"></i> Journal
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode conference-btn">
                                <i class="fa fa-users icon"></i> Conference
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode chapter-btn">
                                <i class="fa fa-newspaper icon"></i> Chapter
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode book-btn">
                                <i class="fa fa-book icon"></i> Book
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode thesis-btn">
                                <i class="fa fa-book icon"></i> Thesis
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode dessertation-btn">
                                <i class="fa fa-book icon"></i> Dessertation
                            </button>
                            <button class="btn btn-secondary mb-2 btn-sm darkMode other-btn">
                                <i class="fa fa-list icon"></i> Other
                            </button>
                        </div>

                        <div class="category-content journal-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table conference-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table chapter-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table book-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table thesis-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table dessertation-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="category-content content-table other-table">
                            <table class="table table-success table-hover table-bordered q-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">S/N</th>
                                        <th style="width: 90%">Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Research --}}
                    <div class="category-content content-table research-table">
                        <table class="table table-success table-hover table-bordered q-table">
                            <thead>
                                <tr>
                                    <th style="width: 10%">S/N</th>
                                    <th style="width: 15%">Period</th>
                                    <th style="width: 75%">Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Honors --}}
                    <div class="category-content content-table honors-table">
                        <table class="table table-success table-hover table-bordered q-table">
                            <thead>
                                <tr>
                                    <th style="width: 10%">S/N</th>
                                    <th style="width: 75%">Award Title</th>
                                    <th style="width: 15%">Year of Award</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Appointments --}}
                    <div class="category-content content-table appts-table">
                        <table class="table table-success table-hover table-bordered q-table">
                            <thead>
                                <tr>
                                    <th style="width: 10%">S/N</th>
                                    <th style="width: 20%">Year of Appointment</th>
                                    <th style="width: 70%">Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <script src="{{asset('../js/staff-profile.js')}}"></script>
@endsection
