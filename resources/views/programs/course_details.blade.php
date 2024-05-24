<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | {{ $showCourseDetails->course_title }}</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')

    <div class="">
        <img src="{{ asset('images/coursePhotos/' . $showCourseDetails->course_thumbnail) }}"
            alt="{{ $showCourseDetails->course_thumbnail }}" class="w-100">
    </div>

    <div class="container  mt-3 mb-4">
        <div class="row g-5" style="text-align: justify;">
            <div class="col-lg-4 mb-3">
                <div class="card darkMode mt-5 ">
                    <h5 class="card-header"> {{ $showCourseDetails->course_title }}</h5>
                    <div class="card-body">
                        <div class="card-text">
                            <h5 class="mb-3"> <strong>Level: </strong> {{ $showCourseDetails->course_category }}</h5>

                            <h5 class="mb-3"> <strong>Course code:</strong> {{ $showCourseDetails->course_code }}</h5>
                            <h5 class="mb-3"> <strong>Course duration:</strong>
                                {{ $showCourseDetails->course_duration }}</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <p>
                    <strong class="favColor darkMode fs-4">Description:</strong>
                @php
                    $descriptionSentences = explode('.', $showCourseDetails->course_description);
                @endphp

                @foreach ($descriptionSentences as $sentence)
                    <p>{{ $sentence }}</p>
                @endforeach
                </p>

                <p class="lh-3 "> <strong class="favColor darkMode fs-4">Entry Qualification:</strong> <br>
                    {{ $showCourseDetails->course_entry_qualification }}</p>

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
