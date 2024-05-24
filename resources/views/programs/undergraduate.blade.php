<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undergraduate programs</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="">
        <img class="w-100" src="../../img/tourism.jpeg" alt="Student-bannner1">
    </div>
    <div class="container mt-5 mb-4">
        <div>
            <a class="text-decoration-none" href="{{ route('undergraduate.pdf') }}">
                <button class="btn btn-outline-primary darkMode">Undergraduate Courses PDF <i class=" far fa-file-pdf fs-2"
                        aria-hidden="true"></i></button>
                {{-- <p class=""></p> --}}
            </a>
        </div>
        <div class="row">
            @php
                $counter = 1;
            @endphp
            @foreach ($underGraduateCourses as $underGraduateCourse)
                @if ($underGraduateCourse->course_category == 'undergraduate')
                    <div class="col-12 col-md-4 col-lg-4 mt-4">
                            <div class="card coursesBorder programsCards darkMode">
                                <div class="card-header fw-bold">
                                    <h4>{{ $counter++ }} : {{ $underGraduateCourse->course_title }}
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <p class="fw-bold text-justify">
                                            {{ Str::limit($underGraduateCourse->course_description, 160) }}
                                        </p>

                                    </div>

                                       <a href="{{ route('course_details', ['id' => $underGraduateCourse->id, $underGraduateCourse->course_title]) }}">
                                        <button class="missionBtn">Program Details <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i> </button></a>
                                </div>
                            </div>
                    </div>
                @endif
            @endforeach

            @if ($underGraduateCourses->where('course_category', 'undergraduate')->isEmpty())
                <p class="alert alert-warning shadow fw-bold " role="alert">No undergraduate courses found.</p>
            @endif
            <div class=" mt-5">
                <h4 class="">Total undergraduate courses: <strong>{{ $totalUnderGraduateCourses }}</strong></h4>
            </div>
            {{ $underGraduateCourses->links() }}
        </div>
    </div>
    @include('partials.footer')
    @include('jslinks')
</body>

</html>


