<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Degree programs</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-5 mb-4">
        <div>
            <a class="text-decoration-none" href="{{ route('non-degree.pdf') }}">
                <p class="">Non-degree Courses PDF <i class=" far fa-file-pdf fs-2"
                        aria-hidden="true" style="color: #e0007e"></i></p>
            </a>
        </div>

        <div class="row">
            <h1 class="fs-1 fw-bold text-center link mt-3 mb-4 text-uppercase ">NON-DEGREE Courses</h1>


            @php
                $counter = 1;
            @endphp


            @foreach ($NonDegreeCourses as $NonDegreeCourse)
                @if ($NonDegreeCourse->course_category == 'non-degree')
                    <div class="col-12 col-md-4 col-lg-4 mt-4">
                        <a
                            href="{{ route('course_details', ['id' => $NonDegreeCourse->id, $NonDegreeCourse->course_title]) }}">
                            <div class="card coursesBorder studyingAtMwenge">
                                <div class="card-header fw-bold text-dark">
                                    <h4 class="favColor">{{ $counter++ }} : {{ $NonDegreeCourse->course_title }}
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-text text-dark">
                                        <p class="fw-bold">
                                            {{ $NonDegreeCourse->course_short_description }}
                                        </p>
                                    </div>
                                    <a
                                        href="{{ route('course_details', ['id' => $NonDegreeCourse->id, $NonDegreeCourse->course_title]) }}">
                                        <button class="missionBtn">Program Details <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i> </button></a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach

            @if ($NonDegreeCourses->where('course_category', 'non-degree')->isEmpty())
                <p class="alert alert-warning shadow fw-bold " role="alert">No Non-Degree courses found.</p>
            @endif
        </div>
        <div class="text-end mt-5">
            <h2 class="">Total Non-degree courses: <strong>{{ $totalNonDegreeCourses }}</strong></h2>
        </div>
        {{ $NonDegreeCourses->links() }}
    </div>
    @include('partials.footer')
    @include('jslinks')
</body>

</html>
