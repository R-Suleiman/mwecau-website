<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DPRIC</title>

    {{-- tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @include('dpric.partials.dpric-links')
</head>

<body>
    <x-dpric.dpric-nav />

    <main>
        @yield('content')
    </main>

    <x-dpric.dpric-footer />

    @include('dpric.partials.dpric-jslink')
</body>

</html>
