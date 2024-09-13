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

    // Cleaning the HTML content
    function cleanHtml($html)
    {
        $apiResponse = $html;
        $data = html_entity_decode($apiResponse);
        return $data;
    }
    $cleanedDescription = cleanHtml($programme_details['entry_qualification_descr']);

@endphp

@extends('layouts.faculty')
@section('content')
    <div class="">
        <img src="{{ asset('images/pageImages/' . $courseImage->image) }}" alt="" class="w-100">
    </div>

    <div class="container  mt-3 mb-4">
        <div class="row g-5" style="text-align: justify;">
            <div class="col-lg-4 mb-3">
                <div class="card darkMode mt-5 ">
                    <h5 class="card-header">{{ $programme_details['programme_name'] }}</h5>
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
                <p class="d-flex flex-column my-2">
                    <label class="mb-3"> <strong>Admission criteria:</strong>
                        {{ $programme_details['admission_criteria'] }}</label>
                    <label class="mb-3"> <strong>Minimum points:</strong>
                        {{ $programme_details['minimum_points'] }}</label>
                </p>
                <p>
                    <strong>Entry Qualificattions: </strong>
                    {!! $cleanedDescription !!}
                </p>

                <a href="https://uas.mwecau.ac.tz" target="_blank">
                    <button class="admissionBtn btn-lg">Click here to apply now</button>
                </a>
            </div>
        </div>
    </div>
@endsection
