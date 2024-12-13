<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mwenge Catholic University ') }}</title>

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">

    <!--Tailwinds Scripts for production development -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @include('health-center.partials.health-center-links')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100" x-data="{ open: false }">
    <div class="container mx-auto">
        <div class="lg:hidden flex items-center justify-between mt-10 shadow-xl pb-7">
            <h1 class="headerFavFont font-semibold text-gray-900 text-3xl mx-auto">Mwenge Catholic University</h1>

            <div class="ml-10">
                <button @click="open = !open" type="button"
                    class="p-2 text-sm text-gray-500 rounded-lg hover:bg-purple-700 hover:text-white">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full min-h-screen md:flex-row">
        <!-- Sidebar Toggle Button (visible on small to medium screens) -->
        <aside id="sidebar-multi-level-sidebar" x-bind:class="{ 'translate-x-0': open, '-translate-x-full': !open }"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform lg:translate-x-0 lg:block lg:static"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-500 dark:bg-gray-800">
                <img src="{{ asset('img/mwecau.png') }}"
                    class="object-cover rounded-full h-[120px] w-[120px] mb-6 ml-11" alt="University logo">
                <div class="text-white text-xl pb-7 text-center uppercase font-bold"> <span> {{ Auth::user()->name }}</span></div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('health-center.dashboard') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-tachometer-alt text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('health-center.departments') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-clipboard-list text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Our Departments</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('health-center.healthservices') }}"
                            class="flex items-center p-3 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-calendar-alt text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Our Services</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('health-center.doctors') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-graduation-cap text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Doctors</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('health-center.news-events') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-users text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">News/Event</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('health-center.testimonials') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-comment-dots text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Testimonials</span>
                        </a>
                    </li>

                    <li>
                        <a href=""
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-handshake text-indigo-400 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Gallery</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 group">
                            <i class="fas fa-sign-out-alt text-indigo-100 text-xl mr-3"></i>
                            <span class="flex-1 whitespace-nowrap">Sign Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-grow overflow-y-auto h-screen">
            <div class="p-4 lg:ml-4">
                <div class="text-gray-900 uppercase flex items-center justify-center text-center">
                    <h1
                        class="text-4xl uppercase font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400 headerFavFont">
                        Mwenge Catholic University Health Center</h1>
                </div>

                <hr class="my-4 border-t border-purple-500">

                @yield('content')
                <div class="text-center mt-20">
                    Designed and Developed By: <strong>MWECAU-IT Unit</strong>
                </div>
            </div>
        </main>

        @stack('modals')
        @stack('scripts')
    </div>
    @include('partials.ckeditor')
</body>

</html>
