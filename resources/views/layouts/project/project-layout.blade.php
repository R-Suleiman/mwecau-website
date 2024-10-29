<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    @vite('resources/css/app.css')
    @include('project.partials.project-links')
</head>

<body>
    {{-- <x-project.project-nav /> --}}

    <main>
        @yield('content')
    </main>

    <x-project.project-footer />

    @include('project.partials.project-jslinks')
</body>

</html>
