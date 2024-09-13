@php
    $all_programmes = [];
    $programme_list = [];
    $counter = 1;
    foreach ($faculties as $faculty) {
        $faculty_departments = $faculty['departments'];
        foreach ($faculty_departments as $department) {
            $department_programmes = $department['programmes'];
            foreach ($department_programmes as $programme) {
                array_push($all_programmes, $programme);
            }
        }
    }
    if ($programme_category === 'undergraduate') {
        $programme_list = array_filter($all_programmes, function ($prog) {
            return $prog['study_level_code'] === 'DEG';
        });
    } elseif ($programme_category === 'post-graduate') {
        $programme_list = array_filter($all_programmes, function ($prog) {
            return $prog['study_level_code'] === 'MAS' || $prog['study_level_code'] === 'PHD';
        });
    } elseif ($programme_category === 'non-degree') {
        $programme_list = array_filter($all_programmes, function ($prog) {
            return $prog['study_level_code'] === 'CET' || $prog['study_level_code'] === 'DIP';
        });
    }
    $programmes_count = count($programme_list);
@endphp

@extends('layouts.faculty')
@section('content')
    <div class="">
        <img src="{{ asset('images/pageImages/' . $courseImage->image) }}" alt="" class="w-100">
    </div>
    <div class="container mt-5 mb-4">
        <div>
            <a class="text-decoration-none" href="{{ route('postgraduate.pdf') }}">
                <button class="btn btn-outline-primary darkMode">{{ $programme_category }} Programs PDF <i
                        class="favColor far fa-file-pdf fs-5" aria-hidden="true"></i></button>
                </p>
            </a>
        </div>
        <div class="row">
            <h1 class="fs-2 text-center favColor mt-3 mb-3">{{ $programme_category }} Programs</h1>
            @php
                $counter = 1;
            @endphp

            <table id="myTable" class="table table-bordered text-sm">
                <thead>
                    <tr class="favbg">
                        <th>S/N</th>
                        <th>Programme ID</th>
                        <th>Programme Name</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($programme_list as $programme)
                        <tr class="darkMode">
                            <td class="fw-bold">{{ $counter++ }}</td>
                            <td>{{ $programme['programme_id'] }}</td>
                            <td>{{ $programme['programme_name'] }}</td>
                            <td>{{ $programme['prog_duration'] }} years</td>
                            <td><a class="text-decoration-none"
                                    href="{{ route('course_details', [$programme_category, $programme['programme_name']]) }}">
                                    View <i class="fas fa-eye"></i> </td></a>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="text-end mt-3 mb-5">
            <h3 class="">Total postgraduate programs: <strong>{{ $programmes_count }}</strong></h3>
        </div>
    @endsection
