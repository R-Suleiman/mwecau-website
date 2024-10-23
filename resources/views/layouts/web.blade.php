<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEO::generate() !!}
    {!! OpenGraph::generate() !!}

    @include('links')
</head>

<body style="overflow-x: none;">

    {{-- navbar component --}}
    <x-navbar />

    {{-- main section --}}
    <main>
        @yield('content')
    </main>

    {{-- footer component --}}
    <x-footer />

    @include('jslinks')
    <script>
        const date = new Date()
        const year = date.getFullYear()
        document.getElementById('live-year').textContent = year
    </script>
    <script>
        document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                const nextEl = this.nextElementSibling;
                const isVisible = nextEl.style.display === 'block';
                document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(submenu) {
                    submenu.style.display = 'none';
                });
                nextEl.style.display = isVisible ? 'none' : 'block';
            });
        });
    </script>
</body>

</html>
