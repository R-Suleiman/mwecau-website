<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Projects</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('links')
</head>

<body style="background-color: whitesmoke">
    @include('partials.navbar')
    <!-- main content -->
    <div class="container-fluid main-events">
        <div class="row events-cont">
            @php
                $counter =1;
            @endphp
            @if (count($research) > 0)
                @foreach ($research as $research)
                    <div class="my-3 col-12 col-lg-10 col-md-9 event-content">
                        <a href="" class="link">
                            <h3>{{ $counter++ }} : {{ $research->header }}</h3>
                        </a>
                        <p>
                            {{ $research->description }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3">
                        <a href="{{ route('research.project.details', $research->header) }}"><button
                                class="btn search-btn event-btn">view more</button></a>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

    <!-- main content end -->
    @include('partials.footer')
    @include('jslinks')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
