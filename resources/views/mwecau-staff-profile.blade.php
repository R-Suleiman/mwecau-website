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
                            <div class="text-center mb-4"> <img
                                    src="{{ asset('images/staffProfiles/' . $staffProfile->staffProfile_picture) }}"
                                    class="img-fluid rounded-circle w-50 " alt=""
                                    style="background-color: rgb(107, 107, 252)"></div>

                            <div class="card-text text-center ">
                                <span> <strong>{{ $staffProfile->title }}</strong> {{ $staffProfile->firstName }}
                                    {{ $staffProfile->lastName }}</span> <br>
                                <span> <strong>Department : </strong> {{ $staffProfile->department }} </span><br>
                                <span> <strong
                                        class="text-danger">{{ 'Sehemu hii natakiwa nieweke title ya staff' }}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-8">
                    <table class="table table-success table-hover table-bordered table-striped ">
                        <tr>
                            <th>Name: </th>
                            <td>{{ $staffProfile->firstName }} {{ $staffProfile->lastName }}</td>
                        </tr>
                        <tr>
                            <th>Gender: </th>
                            <td>{{ $staffProfile->gender }}</td>
                        </tr>
                        <tr>
                            <th>Nationality: </th>
                            <td class="text-uppercase">{{ $staffProfile->nationality }}</td>
                        </tr>
                        <tr>
                            <th>Language: </th>
                            <td>{{ $staffProfile->language }}</td>
                        </tr>
                    </table>

                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5 class="mb-2">Personal Contacts</h5>
                            <div class="mb-0">
                                <i class=" fa fa-envelope"></i>
                                <span>{{ $staffProfile->email }}</span>
                            </div> <br>

                            <div>
                                <i class=" fa fa-phone"></i>
                                <span>{{ $staffProfile->phone }}</span>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-8">
                            <h5 class="mb-2">Office Contacts</h5>
                            <div class="mb-0">
                                <i class=" fa fa-envelope"></i>
                                <span>{{ $staffProfile->email }}</span>
                            </div><br>

                            <div class="mb-2">
                                <i class=" fa fa-phone"></i>
                                <span>{{ $staffProfile->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-box">
            <div class="container ">
                <div class="about">
                    <span class="favColor fw-bold darkMode mt-3">About {{ $staffProfile->firstName }}</span>
                    <p>{{ $staffProfile->aboutStaff }}</p>

                    <h4 class="favColor darkMode">Academic Qualifications</h4>
                    <p>
                        @php
                            $descriptionSentences = explode('.', $staffProfile->academicQualification);
                        @endphp

                        @foreach ($descriptionSentences as $sentence)
                            <p>{{ $sentence }}.</p>
                        @endforeach
                    </p>
                </div>

                <div>
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
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('jslinks')
