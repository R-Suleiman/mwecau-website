@php
    $programme_details;
    foreach ($faculties as $faculty) {
        $faculty_departments = $faculty['departments'];
        foreach ($faculty_departments as $department) {
            $department_programmes = $department['programmes'];
            foreach ($department_programmes as $programe) {
                if ($programe['programme_name'] === $programme_name) {
                    $programme_details = $programe;
                }
            }
        }
    }

@endphp

@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="">
                <img src="{{ asset('images/pageImages/' . $courseImage->image) }}" alt="" class="w-100">
            </div>

            <div class="container  mt-2 mb-4">
                <div class="row g-5" style="text-align: justify;">
                    <div class="col-lg-4 mb-3">
                        <div class="card mt-5 ">
                            <h5 class="card-header favColor">{{ $programme_details['programme_name'] }}</h5>
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="mb-3"> <strong>Programme ID:</strong> {{ $programme_details['programme_id'] }}
                                    </h5>
                                    <h5 class="mb-3"> <strong>Programme code name:</strong>
                                        {{ $programme_details['programme_code_name'] }}</h5>
                                    <h5 class="mb-3"> <strong>Programme duration:
                                        </strong>{{ $programme_details['prog_duration'] }} years</h5>
                                    <h5 class="mb-3"> <strong>Programme max duration:
                                        </strong>{{ $programme_details['prog_max_duration'] }} years</h5>
                                    <h5 class="mb-3"> <strong>Level: </strong>{{ $programme_details['study_level_descr'] }}
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4>About {{ $programme_details['programme_name'] }}</h4>

                        <strong>Entry Qualificattions: </strong> <br>
                        @foreach ($programme_details['entry_qualifications'] as $qualification)
                        @php
                              // Cleaning the HTML content
                              $cleanedDescription = html_entity_decode($qualification['entry_qualification_descr']);
                        @endphp
                        <p class="my-4" style="border-top: 2px solid blue">
                        <label class="mb-3"> <strong>Admission criteria:</strong>
                            {{ $qualification['admission_criteria'] }}</label> <br>
                        <label class="mb-3"> <strong>Minimum points:</strong>
                            {{ $qualification['minimum_points'] }}</label> <br>
                            <label> <strong>Entry Qualificaton description:</strong>
                                {!! $cleanedDescription !!}</label>
                        </p>
                        @endforeach

                    <a href="https://uas.mwecau.ac.tz" target="_blank">
                        <button class="admissionBtn btn-lg">Click here to apply now</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
