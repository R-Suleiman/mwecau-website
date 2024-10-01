<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni</title>

    @include('alumni.partials.alumin-links')
</head>

<body>
    <x-alumni.alumni-nav />

    <main>
        @yield('content')
    </main>

    <x-alumni.alumni-footer />

    @include('alumni.partials.alumni-jslink')
</body>

</html>
