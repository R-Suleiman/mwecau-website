<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mwecau | Course list</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        @php
            $counter = 1;
        @endphp
        <div class="mt-5 mb-3 mx-4 text-start">
            <h2>{{ 'All registered courses' }}</h2>
        </div>

        <div class="mb-4 text-center">
            {{-- <button id="postgraduateBtn" class="btn-events btn border border-secondary darkMode">
                <i class="fa fa-graduation-cap favColor fs-3 "></i> Post-graduate
            </button>
            <button class="btn-staff btn  border border-secondary darkMode">
                <i class="fa fa-graduation-cap favColor fs-3 "></i> Undergraduate
            </button>
            <button class="btn-prog btn border border-secondary darkMode">
                <i class="fa fa-graduation-cap favColor fs-3"></i> Non-degree
            </button> --}}

            <div class="category">
                <button class="btn btn-events">
                    <i class="fa fa-calendar favColor"></i> Events
                </button>
                <button class="btn btn-staff">
                    <i class="fa fa-users favColor"></i> Staff
                </button>
                <button class="btn btn-prog">
                    <i class="fa fa-graduation-cap favColor"></i> Programmes
                </button>
            </div>
        </div>

        {{-- postgraduate course --}}
        <div class="category-content events-table">
            <h1>POST GRADUATE COURSE</h1>
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> <strong> {{ $counter++ }} : </strong> <a
                                    href="{{ route('course_details', $course->id) }}"class="text-decoration-none text-dark ">{{ $course->course_title }}</a>
                            </td>
                            <td><a href="{{ route('course_details', $course->id) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{ route('all.courses.pdf') }}">
                    <p class="favColor darkMode">Download PDF <i class="favColor far fa-file-pdf fs-2"
                            aria-hidden="true"></i></p>
                </a>

            </div>
            @if ($courses->isEmpty())
                <p class="alert alert-warning fw-bold " role="alert">Currently No Course registered</p>
            @endif
        </div>

        {{-- undergraduate table --}}
        <div class="category-content staff-table">
            <h1>UNDERGRADUATE COURSES</h1>
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> <strong> {{ $counter++ }} : </strong> <a
                                    href="{{ route('course_details', $course->id) }}"class="text-decoration-none text-dark ">{{ $course->course_title }}</a>
                            </td>
                            <td><a href="{{ route('course_details', $course->id) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i> </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{ route('all.courses.pdf') }}">
                    <p class="favColor darkMode">Download PDF <i class="favColor far fa-file-pdf fs-2"
                            aria-hidden="true"></i></p>
                </a>

            </div>
            @if ($courses->isEmpty())
                <p class="alert alert-warning fw-bold " role="alert">Currently No Course registered</p>
            @endif
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    @include('jslinks')
    @include('partials.footer')
</body>

</html>
