<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DPRIC | ADMIN</title>
    @vite('resources/css/app.css')
    @include('dpric.partials.dpric-links')
</head>

<body>
    <section class="flex lg:relative">
        <aside class="w-full lg:w-2/12 hidden lg:block h-screen overflow-y-auto bg-blue-800 border-r-2 border-blue-300 lg:fixed lg:left-0">
            <div class="w-3/6 flex flex-col mx-auto items-center p-4">
                <img src="{{ asset('img/mwecau.png') }}" alt="" class="w-full rounded-full border-2 border-blue-200">
                <span class="my-2 text-white">DPRIC</span>
            </div>

            {{-- REMEMBER NAV TOGGLE IN SMALL VIEW --}}
            <div class="w-full my-4">
                <ul class="w-full p-2">
                    <li class="w-full p-2 my-2 text-blue-800 bg-blue-100 hover:bg-white rounded-md border-l-4 border-blue-950"><a href="{{ route('dpric.admin.index') }}" class="w-full flex items-center text-lg"><i class="fa fa-house mx-2"></i><span class="font-semibold mx-2">Home</span></a></li>

                    <li class="w-full p-2 my-2 text-blue-800 bg-blue-100 hover:bg-white rounded-md border-l-4 border-blue-950"><a href="{{ route('admin.dpric-news.index') }}" class="w-full flex items-center text-lg"><i class="fa fa-newspaper mx-2"></i><span class="font-semibold mx-2">News</span></a></li>

                    <li class="w-full p-2 my-2 text-blue-800 bg-blue-100 hover:bg-white rounded-md border-l-4 border-blue-950"><a href="{{ route('admin.dpric-units.index') }}" class="w-full flex items-center text-lg"><i class="fa fa-users mx-2"></i><span class="font-semibold mx-2">Units</span></a></li>

                    <li class="w-full p-2 my-2 text-blue-800 bg-blue-100 hover:bg-white rounded-md border-l-4 border-blue-950"><a href="{{ route('admin.dpric-awards.index') }}" class="w-full flex items-center text-lg"><i class="fa fa-trophy mx-2"></i><span class="font-semibold mx-2">Awards & Honors</span></a></li>

                    <li class="w-full p-2 my-2 text-blue-800 bg-blue-100 hover:bg-white rounded-md border-l-4 border-blue-950"><a href="{{ route('admin.dpric-documents.index') }}" class="w-full flex items-center text-lg"><i class="fas fa-folder-open mx-2"></i><span class="font-semibold mx-2">Documents</span></a></li>
                </ul>
            </div>
        </aside>

        <div class="w-full lg:w-10/12 lg:absolute lg:right-0">
            <div class="w-full p-4 m-0 bg-blue-800 h-max flex justify-between">
                <h1 class="oswald text-2xl text-blue-100 text-center mx-4">Directorate of Postgraduate studies, Research, Innovations and Consultancy (DPRIC)</h1>
                <div class="w-24 mx-4 group hidden lg:block">
                    <button class="w-full p-2 rounded-full border-2 border-blue-100 flex justify-between"><i class="fa fa-user text-blue-100 text-xl mx-2"></i> <i class="fa fa-angle-down text-blue-100 text-lg mx-2"></i></button>
                    <ul class="w-max mt-2 bg-white border border-blue-100 hidden group-hover:block">
                        <li class="flex text-blue-800 p-2 items-center cursor-pointer hover:bg-blue-200"><i class="fa fa-sign-out mx-2"></i><span>Logout</span></li>
                    </ul>
                </div>
            </div>

            @session('message')
                <div class="w-full bg-green-700 py-2 px-4 my-4 mx-2 text-lg text-white">
                    {{ session('message') }}
                </div>
            @endsession
            <main>
                @yield('content')
            </main>
        </div>
    </section>

    @include('dpric.partials.dpric-jslink')
</body>

</html>
