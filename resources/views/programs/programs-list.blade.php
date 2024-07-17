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
        <div class="postgraduate-table">
            @php
                $postgraduatecounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">Post-Graduate programs</h4>
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        @if ($course->course_category == 'postgraduate')
                            <tr>
                                <td> <strong> {{ $postgraduatecounter++ }} : </strong>
                                    <a href="{{ route('course_details', $course->id) }}"
                                        class="text-decoration-none text-dark">
                                        {{ $course->course_title }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('course_details', $course->id) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endif
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
        <div class="undergraduate-table">
            @php
                $undergraduatecounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">{{ 'Undergraduate programs' }}</h4>
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        @if ($course->course_category == 'undergraduate')
                            <tr>
                                <td> <strong> {{ $undergraduatecounter++ }} : </strong> <a
                                        href="{{ route('course_details', $course->id) }}"class="text-decoration-none text-dark ">{{ $course->course_title }}</a>
                                </td>
                                <td><a href="{{ route('course_details', $course->id) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i> </a>

                                </td>
                            </tr>
                        @endif
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

        {{-- NonDegree table --}}
        <div class="nonDegree-table">
            @php
                $nonDegereeCounter = 1;
            @endphp
            <h4 class="mb-4 mt-4">{{ 'Non Degree programs' }}</h4>
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        @if ($course->course_category == 'non-degree')
                            <tr>
                                <td> <strong> {{ $nonDegereeCounter++ }} : </strong> <a
                                        href="{{ route('course_details', $course->id) }}"class="text-decoration-none text-dark ">{{ $course->course_title }}</a>
                                </td>
                                <td><a href="{{ route('course_details', $course->id) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i> </a>

                                </td>
                            </tr>
                        @endif
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

    @include('jslinks')
    @include('partials.footer')
</body>

</html>
