@php
    $faculty_data;
    foreach ($faculties as $faculty) {
        if ($faculty['faculty_name'] == $faculty_name) {
            $faculty_data = $faculty;
        }
    }
    $faculty_departments = $faculty_data['departments'];
@endphp

@extends('layouts.faculty')
@section('content')
    @include('links')

    <div class="container mt-5 mb-4">
        <div class="row">
            <h1 class="fs-2 text-center favColor">{{ $faculty_name }} ({{ $faculty_data['faculty_short_name'] }})</h1>
            <h1 class="fs-4 text-center favColor mt-3 mb-3">List of Programmes</h1>
            @php
                $counter = 1;
                $programme_category;
            @endphp
        <div class="tables">
            <table class="myTable table table-bordered text-sm">
                <thead>
                    <tr class="favbg">
                        <th>S/N</th>
                        <th>Programme ID</th>
                        <th>Program Name</th>
                        <th>Duration</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach ($faculty_departments as $department)

                            @php
                                $programmes = $department['programmes'];
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
                                    <td>
                                        <a href="{{ route('course_details', [$programme_category, $programme['programme_name']]) }}"><button class="btn btn-outline-secondary">view</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach

                </tbody>

            </table>
        </div>
        </div>

    </div>
    @include('jslinks')
@endsection
