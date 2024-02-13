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
        <div class="row">
            <h1 class="fs-1 fw-bold text-center link mt-3 mb-4 text-uppercase ">Non-Degree Courses</h1>

            @php
            $counter = 1;
            @endphp

            @foreach ($NonDegreeCourses as $NonDegreeCourse)
            @if ($NonDegreeCourse->course_category == "Non-Degree")
            <div class="col-12 col-md-4 col-lg-4 mt-4">
                <a href="#">
                    <div class="card coursesBorder">
                        <div class="card-header fw-bold text-dark">
                            <h4 class="favColor">{{ $counter++ }} : {{ $NonDegreeCourse->course_title }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-dark">
                                <p class="fw-bold">
                                    {{ $NonDegreeCourse->course_short_description }}
                                </p>
                            </div>
                            <a href="{{ route('course_details', ['id' => $NonDegreeCourse->id, $NonDegreeCourse->course_title]) }}"> <button class="learnBtn">Program Details <i class="fa fa-arrow-right" aria-hidden="true"></i> </button></a>

                        </div>
                    </div>
                </a>
            </div>
            @endif

            @endforeach
        </div>
    </div>
    @include('partials.footer')
    @include('jslinks')
</body>

</html>