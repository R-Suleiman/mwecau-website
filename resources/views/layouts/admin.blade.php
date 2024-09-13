<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Mwenge Catholic University' }}</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    @include('links')
</head>

<body>
    <div class="id">
        <div class="sidebar">
            <div class="nav-toggle hide-nav">
                <i class="fa fa-times"></i>
            </div>
            <div class="side-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="../../img/mwecau.png" alt="mwecau logo" />
                </a>

                <span>MWECAU</span>
                <p><i>"Lux Mundi" - </i>Light of the world</p>
            </div>
            <ul class="nav-list">
                <a href="{{ route('admin.dashboard') }}">
                    <li class="nav-item">
                        <i class="fa fa-home nav-icons"></i>
                        <span class="nav-words">Home</span>
                    </li>
                </a>
                <a href="{{ route('admin.about') }}">
                    <li class="nav-item">
                        <i class="fa fa-home nav-icons"></i>
                        <span class="nav-words">About Page</span>
                    </li>
                </a>
                <a href="{{ route('admin.research.list') }}">
                    <li class="nav-item">
                        <i class="fa fa-university nav-icons"></i>
                        <span class="nav-words">Manage Research</span>
                    </li>
                </a>
                {{-- <a href="{{ route('admin.list-of-staff') }}">
                    <li class="nav-item">
                        <i class="fa fa-users nav-icons"></i>
                        <span class="nav-words">Staff</span>
                    </li>
                </a> --}}
                <a href="{{ route('admin.events.list') }}">
                    <li class="nav-item">
                        <i class="fa fa-calendar nav-icons"></i>
                        <span class="nav-words">Events</span>
                    </li>
                </a>

                <a href="{{ route('admin.post.announcement') }}">
                    <li class="nav-item">
                        <i class="fa fa-calendar nav-icons"></i>
                        <span class="nav-words">Post Announcement</span>
                    </li>
                </a>

                <a href="{{ route('admin.all.site.images') }}">
                    <li class="nav-item">
                        <i class="fa fa-calendar nav-icons"></i>
                        <span class="nav-words">Manage Site images</span>
                    </li>
                </a>

                <a href="{{ route('admin.statistics') }}">
                    <li class="nav-item">
                        <i class="fa fa-calendar nav-icons"></i>
                        <span class="nav-words">Uni statistics</span>
                    </li>
                </a>
                <a href="{{ route('site.images') }}">
                    <li class="nav-item">
                        <i class="fa fa-key nav-icons"></i>
                        <span class="nav-words">Change Password</span>
                    </li>
                </a>

                <li class="nav-item">
                    <div class="" aria-labelledby="">
                        <a class="text-decoration-none text-light " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt nav-icons"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    {{-- <i class="fa fa-sign-out-alt nav-icons"></i>
                        <span class="nav-words">Logout</span> --}}
                </li>

            </ul>
        </div>
    </div>

    <div class="header">
        <div class="nav-toggle show-nav">
            <i class="fa fa-bars"></i>
        </div>
        <h2>MWENGE CATHOLIC UNIVERSITY | DASHBOARD</h2>

        <h5 class="text-warning"> Welcome, <strong class="text-light">Mr. {{ Auth::user()->name }}</strong></h5>
    </div>

    <main class="py-0">
        @yield('content')
        @include('sweetalert::alert')
    </main>

    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <!-- JavaScript to trigger SweetAlert confirmation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.deletebtn');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: "Are you sure you want to delete?",
                        text: "You won't be able to revert this action!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#513f83",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // deletebtn.closest('form').submit();

                            Swal.fire({
                                cle
                                title: "Deleted!",
                                text: "Successfully deleted.",
                                icon: "success"
                            });
                        }
                    });
                });
            });
        });
    </script>

    @include('jslinks')
    @include('partials.ckeditor')
</body>

</html>
