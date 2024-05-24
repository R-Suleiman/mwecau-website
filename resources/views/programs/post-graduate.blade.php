<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-Graduate programs</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-5 mb-4">
        <div>
            <a class="text-decoration-none" href="{{ route('postgraduate.pdf') }}">
                <button class="btn btn-outline-primary darkMode">Postgraduate Courses PDF <i class="favColor far fa-file-pdf fs-2"
                        aria-hidden="true"></i></button>
                </p>
            </a>
        </div>
        <div class="row">
            <h1 class="fs-1 fw-bold text-center  mt-3 mb-4 text-uppercase ">Post-Graduate Courses</h1>

            @php
                $counter = 1;
            @endphp

            @foreach ($postGraduateCourses as $postGraduateCourse)
                @if ($postGraduateCourse->course_category == 'postgraduate')
                    <div class="col-12 col-md-4 col-lg-4 mt-4">

                        <div class="card coursesBorder programsCards darkMode">
                            <div class="card-header fw-bold">
                                <h5 class=""> {{ $postGraduateCourse->course_title }}
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="fw-bold text-justify">
                                        {{ Str::limit($postGraduateCourse->course_description, 160) }}
                                    </p>
                                    {{-- <p class="fw-bold">
                                            {{ implode(' ', array_slice(explode(' ', $postGraduateCourse->course_description), 0, 30)) }} {{ '. . .' }}
                                        </p> --}}
                                </div>
                                <a
                                    href="{{ route('course_details', ['id' => $postGraduateCourse->id, $postGraduateCourse->course_title]) }}">
                                    <button class="missionBtn">Program Details <i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></button>

                            </div>
                        </div>
                        </a>
                    </div>
                @endif
            @endforeach

            @if ($postGraduateCourses->where('course_category', 'postgraduate')->isEmpty())
                <div class="col-12 mt-4">
                    <p class="alert alert-warning shadow fw-bold " role="alert">No post-graduate courses found.</p>
                </div>
            @endif
        </div>
        <div class="text-end mt-5">
            <h2 class="">Total postgraduate courses: <strong>{{ $totalPostgraduatecourses }}</strong></h2>
        </div>

        {{ $postGraduateCourses->links() }}
    </div>
    @include('partials.footer')
    @include('jslinks')
</body>

</html>
