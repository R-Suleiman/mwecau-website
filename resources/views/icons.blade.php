<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>icons</title>


    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    @include('links')

    <style>
        a {
            margin: 0 10px;
            border-radius: 50%;
            box-sizing: border-box;
            background: #fff;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: 1s;
            background: rgba(0, 0, 0, 0);
            color: var(--color);
            font-size: 2.5em;
            -webkit-box-reflect: below 1px linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
        }

        a:hover {
            background: var(--color);
            color: #050801;
            box-shadow: 0 0 5px var(--color),
                0 0 25px var(--color),
                0 0 50px var(--color),
                0 0 20px var(--color);
        }
    </style>
</head>

<body style="background: black; color:whitesmoke">
    <div class="coding">
        <a href="" style="--color: #0072b1">
            <i class="fab fa-linkedin" aria-hidden="true"></i>
        </a>

        <a href="" style="--color: #E1306C">
            <i class="fab fa-tiktok" aria-hidden="true"></i>
        </a>

        <a href="" style="--color: #FF0050">
            <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>

        <a href="" style="--color: #426983">
            <i class="fab fa-facebook" aria-hidden="true"></i>
        </a>
    </div>
    <div class="container">
        <h1>University Documents</h1>
        <h4>Click here to download list of all programme offered </h4> <a href="{{ route('pdf.generate') }}">click
            here</a>
    </div>


    <button type="submit" class="btn btn-danger" data-confirm-delete="true" id="deletebtn">Delete
        <i class="fa fa-trash actions-icon delete"></i>
    </button>

    <!-- JavaScript to trigger SweetAlert confirmation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var deleteBtn = document.getElementById('deletebtn');

            deleteBtn.addEventListener('click', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#513f83",
                    cancelButtonColor: "#e0007e",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user confirms, perform delete action
                        // Example: window.location.href = "/delete";
                    }
                });
            });
        });
    </script>
</body>

</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Mwenge Catholic University' }}</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    @include('links')
</head>

<body>


    <main class="py-0">
        {{-- lkjhbv --}}
        @yield('content')
        @include('sweetalert::alert')
    </main>


</body>

</html>
