@php
    $programme_details;
    foreach ($faculties as $faculty) {
        $faculty_departments = $faculty['departments'];
        foreach ($faculty_departments as $department) {
            $department_programmes = $department['programmes'];
            foreach ($department_programmes as $programe) {
                if($programe['programme_name'] === $programme_name) {
                    $programme_details = $programe;
                }
            }
        }
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | {{ $programme_name }}</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')

    <div class="">
        <img src="{{ asset('images/pageImages/' . $courseImage->image) }}"
            alt="" class="w-100">
    </div>

    <div class="container  mt-3 mb-4">
        <div class="row g-5" style="text-align: justify;">
            <div class="col-lg-4 mb-3">
                <div class="card darkMode mt-5 ">
                    <h5 class="card-header">{{ $programme_details['programme_name'] }}</h5>
                    <div class="card-body">
                        <div class="card-text">
                            <h5 class="mb-3"> <strong>Programme ID:</strong> {{ $programme_details['programme_id'] }}</h5>
                            <h5 class="mb-3"> <strong>Programme code name:</strong> {{ $programme_details['programme_code_name'] }}</h5>
                            <h5 class="mb-3"> <strong>Programme  duration: </strong>{{ $programme_details['prog_duration'] }} years</h5>
                            <h5 class="mb-3"> <strong>Programme max duration: </strong>{{ $programme_details['prog_max_duration'] }} years</h5>
                            <h5 class="mb-3"> <strong>Level: </strong>{{ $programme_details['study_level_descr'] }} </h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                {{-- <p>
                    <strong class="favColor darkMode fs-4">Description:</strong>
                @php
                    $descriptionSentences = explode('.', $showCourseDetails->course_description);
                @endphp

                @foreach ($descriptionSentences as $sentence)
                    <p>{{ $sentence }}</p>
                @endforeach
                </p>

                <p class="lh-3 "> <strong class="favColor darkMode fs-4">Entry Qualification:</strong> <br>
                    {{ $showCourseDetails->course_entry_qualification }}</p> --}}

                {{-- <p style="text-align:justify">{{ $showCourseDetails->course_description }}</p> --}}
                <a href="https://uas.mwecau.ac.tz" target="_blank">
                    <button class="admissionBtn btn-lg">Click here to apply now</button>
                </a>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('jslinks')
</body>

</html>