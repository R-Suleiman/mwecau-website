<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <!--Tailwinds Scripts for production development-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('project.partials.project-links')
</head>

<body class="favFont">
    <x-project.project-nav />

    <main>
        @yield('content')
    </main>

    <x-project.project-footer />

    @include('project.partials.project-jslinks')
</body>

</html>
