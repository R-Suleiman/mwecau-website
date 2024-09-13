@php
    $postgraduateProgrammes = [];
    $undergraduateProgrammes = [];
    $nondegreeProgrammes = [];
    foreach ($faculties as $faculty) {
        foreach ($faculty['departments'] as $department) {
            foreach ($department['programmes'] as $programme) {
                if ($programme['study_level_code'] === 'MAS' || $programme['study_level_code'] === 'PHD') {
                    array_push($postgraduateProgrammes, $programme);
                } elseif ($programme['study_level_code'] === 'DEG') {
                    array_push($undergraduateProgrammes, $programme);
                } elseif ($programme['study_level_code'] === 'CET' || $programme['study_level_code'] === 'DIP') {
                    array_push($nondegreeProgrammes, $programme);
                }
            }
        }
    }
@endphp

@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="mt-5 mb-3 mx-4 text-start">
            <h2>{{ 'All registered Programs' }}</h2>
        </div>

        <div class="mb-4 text-center ">
            <div class="category">
                <button class="btn btn-secondary btn-postgraduate darkMode">
                    <i class="fa fa-calendar favColor"></i> PostGraduates
                </button>
                <button class="btn btn-secondary btn-undergraduate darkMode">
                    <i class="fa fa-users favColor"></i> Undergraduates
                </button>
                <button class="btn btn-secondary btn-nonDegree darkMode">
                    <i class="fa fa-graduation-cap favColor"></i> Non-Degrees
                </button>
            </div>
        </div>

        {{-- postgraduate course --}}
        <div class="postgraduate-table my-5">
            @php
                $postgraduatecounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">Post-Graduate programs</h4>
            <table  class="myTable table table-bordered text-sm">
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
                        @foreach ($postgraduateProgrammes as $programme)
                            <tr>
                                <td>{{ $postgraduatecounter++ }}</td>
                                <td>{{ $programme['programme_id'] }}</td>
                                <td>{{ $programme['programme_name'] }}</td>
                                <td>{{ $programme['prog_duration'] }} years</td>
                                <td>
                                    <a
                                        href="{{ route('course_details', ['post-graduate', $programme['programme_name']]) }}"><button
                                            class="btn btn-outline-secondary">view</button></a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>

            </table>
            {{-- <div>
                <a href="{{ route('all.courses.pdf') }}">
                    <p class="favColor darkMode">Download PDF <i class="favColor far fa-file-pdf fs-2"
                            aria-hidden="true"></i></p>
                </a>
            </div> --}}
        </div>

        {{-- undergraduate table --}}
        <div class="undergraduate-table my-5">
            @php
                $undergraduatecounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">{{ 'Undergraduate programs' }}</h4>
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
                        @foreach ($undergraduateProgrammes as $programme)
                            <tr>
                                <td>{{ $undergraduatecounter++ }}</td>
                                <td>{{ $programme['programme_id'] }}</td>
                                <td>{{ $programme['programme_name'] }}</td>
                                <td>{{ $programme['prog_duration'] }} years</td>
                                <td>
                                    <a
                                        href="{{ route('course_details', ['post-graduate', $programme['programme_name']]) }}"><button
                                            class="btn btn-outline-secondary">view</button></a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>

            </table>
        </div>

        {{-- NonDegree table --}}
        <div class="nonDegree-table my-5">
            @php
                $nonDegereeCounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">{{ 'Non Degree programs' }}</h4>
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
                        @foreach ($nondegreeProgrammes as $programme)
                            <tr>
                                <td>{{ $nonDegereeCounter++ }}</td>
                                <td>{{ $programme['programme_id'] }}</td>
                                <td>{{ $programme['programme_name'] }}</td>
                                <td>{{ $programme['prog_duration'] }} years</td>
                                <td>
                                    <a
                                        href="{{ route('course_details', ['post-graduate', $programme['programme_name']]) }}"><button
                                            class="btn btn-outline-secondary">view</button></a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <script>
        const eventsBtn = document.querySelector('.btn-postgraduate')
        const staffBtn = document.querySelector('.btn-undergraduate')
        const progBtn = document.querySelector('.btn-nonDegree')

        const eventsTable = document.querySelector('.postgraduate-table')
        const staffTable = document.querySelector('.undergraduate-table')
        const progTable = document.querySelector('.nonDegree-table')


        // Initially hide the staff and prog tables
        staffTable.style.display = 'none';
        progTable.style.display = 'none';

        eventsBtn.addEventListener('click', () => {
            eventsTable.style.display = 'block'
            staffTable.style.display = 'none'
            progTable.style.display = 'none'
        })

        staffBtn.addEventListener('click', () => {
            eventsTable.style.display = 'none'
            staffTable.style.display = 'block'
            progTable.style.display = 'none'
        })

        progBtn.addEventListener('click', () => {
            eventsTable.style.display = 'none'
            staffTable.style.display = 'none'
            progTable.style.display = 'block'
        })
    </script>
@endsection
