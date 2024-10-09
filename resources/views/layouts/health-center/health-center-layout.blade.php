<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Center</title>
    @vite('resources/css/app.css')
    @include('health-center.partials.health-center-links')
</head>

<body>
    @if ($pageId && $pageId === 'home')
    <x-health-center.health-center-index-nav />
    @else
    <x-health-center.health-center-nav />
    @endif

    <main>
        @yield('content')
    </main>

    <x-health-center.health-center-footer />

    @include('health-center.partials.health-center-jslink')
</body>

</html>
