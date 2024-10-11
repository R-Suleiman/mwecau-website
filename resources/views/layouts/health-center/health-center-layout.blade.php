<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Center</title>

    @include('health-center.partials.health-center-links')
    @vite('resources/css/app.css')
</head>

<body>
    @if ($pageId)
        <div class="container mx-auto flex justify-center">
            <div class="mt-10 w-80 bg-purple-600 rounded-md py-2 px-4 text-center">
                <span class="font-semibold tracking-widest text-2xl text-white">Index Navigation Bar</span>
            </div>
        </div>
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
