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

@include('links')
@include('partials.navbar')
<section class="main-section">
    <div class="main-content">
        <div class="stats-box">
            {{-- <h3 class="title">Staff Profile</h3> --}}
        </div>

        <div class="container mt-5">
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


        <div class="content-box">
            <div class="container ">
                <div class="about">
                    <h4 class="favColor">About {{ $staff_details['first_name'] }} {{ $staff_details['last_name'] }}
                    </h4>
                    <p>Bio Coming soon...</p>
                </div>

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

                {{-- <div>
                    <div class="d-flex gap-3">
                        <button class="btn btn-secondary mb-2 btn-sm darkMode">
                            <i class="fa fa-graduation-cap icon"></i> Academic Qualifications
                        </button>
                        <button class="btn btn-secondary mb-2 btn-sm darkMode">
                            <i class="fa fa-user icon"></i> Professional Qualifications
                        </button>
                    </div>

                    <table class="table table-success table-hover table-bordered ">
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
                                <td>1</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="category-content prof-qual-table">
                    <table class="content-table q-table">
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
                                <td>1</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Masters</td>
                                <td>Msc</td>
                                <td>mwecau</td>
                                <td>2015 - 2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</section>
@include('jslinks')
