@extends('layouts.project.project-layout')
@section('content')
    {{-- Navbar --}}
    <section class="">
        <div class="w-full relative overflow-hidden">
            <img class="w-full object-cover object-center h-96 lg:h-[37rem]" src="{{ asset('img/projects/cocoa.jpg') }}"
                alt="">

            <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-40">
                <div class="text-center">
                    <h1 class="text-4xl lg:text-8xl font-bold headerFavFont">Mwenge Catholic University</h1>
                    <h3 class="text-3xl">PROJECTS</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Project rearengement number sort on interface --}}

    {{-- Homepage projects --}}
    @if ($projects->isNotEmpty())
        <section>
            <div class="container mx-auto mt-10">
                @if ($projects->count() == 1)
                    <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1">
                        @foreach ($projects as $project)
                            <!-- Loop through projects -->
                            <div
                                class="border border-gray-300 rounded-3xl p-8 shadow-lg transition-transform transform hover:scale-105 duration-200 ease-in-out hover:shadow-2xl hover:shadow-purple-300 bg-white">
                                <div class="flex justify-center items-center mb-6">
                                    <div
                                        class="h-[80px] w-[80px] rounded-full bg-purple-100 flex items-center justify-center shadow-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-[40px] w-[40px] text-purple-600">
                                            <rect x="2" y="3" width="20" height="18" rx="2" ry="2"
                                                fill="currentColor" />
                                            <path d="M4 5h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 10h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 15h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 20h16v2H4z" fill="#D1D5DB" />
                                            <circle cx="5" cy="11" r="1.5" fill="#FF5722" />
                                            <circle cx="5" cy="16" r="1.5" fill="#FF5722" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-center text-xl font-bold text-purple-700 mb-4">{!! Str::limit($project->name, 15) !!}
                                </h3>
                                <div class="mb-6 px-4 text-gray-600 favFont text-lg leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::limit($project->description, 50) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="{{ route('single-project', $project->name) }}"
                                        class="px-5 py-2 transition ease-in-out duration-200 text-xs uppercase font-semibold bg-purple-600 text-white rounded-full hover:bg-purple-500 focus:ring-4 focus:ring-purple-200">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif ($projects->count() == 2)
                    <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        @foreach ($projects as $project)
                            <!-- Loop through projects -->
                            <div
                                class="border border-gray-300 rounded-3xl p-8 shadow-lg transition-transform transform hover:scale-105 duration-200 ease-in-out hover:shadow-2xl hover:shadow-purple-300 bg-white">
                                <div class="flex justify-center items-center mb-6">
                                    <div
                                        class="h-[80px] w-[80px] rounded-full bg-purple-100 flex items-center justify-center shadow-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-[40px] w-[40px] text-purple-600">
                                            <rect x="2" y="3" width="20" height="18" rx="2" ry="2"
                                                fill="currentColor" />
                                            <path d="M4 5h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 10h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 15h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 20h16v2H4z" fill="#D1D5DB" />
                                            <circle cx="5" cy="11" r="1.5" fill="#FF5722" />
                                            <circle cx="5" cy="16" r="1.5" fill="#FF5722" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-center text-xl font-bold text-purple-700 mb-4">{!! Str::limit($project->name, 15) !!}
                                </h3>
                                <div class="mb-6 px-4 text-gray-600 text-sm leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::limit($project->description, 50) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="{{ route('single-project', $project->name) }}"
                                        class="px-5 py-2 transition ease-in-out duration-200 text-xs uppercase font-semibold bg-purple-600 text-white rounded-full hover:bg-purple-500 focus:ring-4 focus:ring-purple-200">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif ($projects->count() == 3)
                    <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($projects as $project)
                            <!-- Loop through projects -->
                            <div
                                class="border border-gray-300 rounded-3xl p-8 shadow-lg transition-transform transform hover:scale-105 duration-200 ease-in-out hover:shadow-2xl hover:shadow-purple-300 bg-white">
                                <div class="flex justify-center items-center mb-6">
                                    <div
                                        class="h-[80px] w-[80px] rounded-full bg-purple-100 flex items-center justify-center shadow-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-[40px] w-[40px] text-purple-600">
                                            <rect x="2" y="3" width="20" height="18" rx="2" ry="2"
                                                fill="currentColor" />
                                            <path d="M4 5h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 10h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 15h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 20h16v2H4z" fill="#D1D5DB" />
                                            <circle cx="5" cy="11" r="1.5" fill="#FF5722" />
                                            <circle cx="5" cy="16" r="1.5" fill="#FF5722" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-center text-xl font-bold text-purple-700 mb-4">{!! Str::limit($project->name, 15) !!}
                                </h3>
                                <div class="mb-6 px-4 text-gray-600 text-sm leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::limit($project->description, 50) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="{{ route('single-project', $project->name) }}"
                                        class="px-5 py-2 transition ease-in-out duration-200 text-xs uppercase font-semibold bg-purple-600 text-white rounded-full hover:bg-purple-500 focus:ring-4 focus:ring-purple-200">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @foreach ($projects->take(4) as $project)
                            <!-- Loop through projects -->
                            <div
                                class="border border-gray-300 rounded-3xl p-8 shadow-lg transition-transform transform hover:scale-105 duration-200 ease-in-out hover:shadow-xl hover:shadow-purple-300 bg-white">
                                <div class="flex justify-center items-center mb-6">
                                    <div
                                        class="h-[80px] w-[80px] rounded-full bg-purple-100 flex items-center justify-center shadow-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-[40px] w-[40px] text-purple-600">
                                            <rect x="2" y="3" width="20" height="18" rx="2"
                                                ry="2" fill="currentColor" />
                                            <path d="M4 5h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 10h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 15h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 20h16v2H4z" fill="#D1D5DB" />
                                            <circle cx="5" cy="11" r="1.5" fill="#FF5722" />
                                            <circle cx="5" cy="16" r="1.5" fill="#FF5722" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-center text-xl font-bold text-purple-700 mb-4">{!! Str::limit($project->name, 15) !!}
                                </h3>
                                <div class="mb-6 px-4 text-gray-600 text-sm leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::limit($project->description, 50) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="{{ route('single-project', $project->name) }}"
                                        class="px-5 py-2 transition ease-in-out duration-200 text-xs uppercase font-semibold bg-purple-600 text-white rounded-full hover:bg-purple-500 focus:ring-4 focus:ring-purple-200">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                {{-- <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <h1
                        class="col-span-full text-center font-semibold text-xl uppercase md:text-2xl lg:text-3xl mb-8 headerFavFont">
                        Projects under VLIR
                    </h1>
                        <!-- Check if projects are not empty -->
                        @foreach ($projects->take(3) as $project)
                            <!-- Loop through projects -->
                            <div
                                class="border border-gray-300 rounded-3xl p-8 shadow-lg transition-transform transform hover:scale-105 duration-200 ease-in-out hover:shadow-2xl hover:shadow-purple-300 bg-white">
                                <div class="flex justify-center items-center mb-6">
                                    <div
                                        class="h-[80px] w-[80px] rounded-full bg-purple-100 flex items-center justify-center shadow-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-[40px] w-[40px] text-purple-600">
                                            <rect x="2" y="3" width="20" height="18" rx="2" ry="2"
                                                fill="currentColor" />
                                            <path d="M4 5h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 10h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 15h16v2H4z" fill="#D1D5DB" />
                                            <path d="M4 20h16v2H4z" fill="#D1D5DB" />
                                            <circle cx="5" cy="11" r="1.5" fill="#FF5722" />
                                            <circle cx="5" cy="16" r="1.5" fill="#FF5722" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-center text-xl font-bold text-purple-700 mb-4">{!! Str::limit($project->name, 15) !!}
                                </h3>
                                <div class="mb-6 px-4 text-gray-600 text-sm leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::limit($project->description, 50) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="{{ route('single-project', $project->name) }}"
                                        class="px-5 py-2 transition ease-in-out duration-200 text-xs uppercase font-semibold bg-purple-600 text-white rounded-full hover:bg-purple-500 focus:ring-4 focus:ring-purple-200">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                </div> --}}
            </div>
        </section>
    @endif

    {{-- Photo gallery --}}
    <section>
        <div class="container mx-auto mt-16">
            <h1 class="text-center text-3xl font-extrabold headerFavFont uppercase">Photo Gallery</h1>

            <!-- Filter Buttons -->
            <div class="flex justify-end items-center py-4 md:py-8 flex-wrap">
                <button type="button" onclick="filterImages('all')"
                    class="text-gray-200 hover:text-gray-100 hover:bg-gradient-to-r from-purple-600 to-purple-400 border shadow-xl hover:border-transparent bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">
                    <i class="fa-solid fa-list-check"></i> All categories
                </button>
                @foreach ($projects as $project)
                    <button type="button" onclick="filterImages('project{{ $project->id }}')"
                        class="text-gray-800 text-sm uppercase font-semibold px-6 py-3 border border-gray-900 bg-white hover:bg-gray-900 hover:text-white shadow-md hover:shadow-lg focus:ring-2 focus:outline-none focus:ring-gray-400 rounded-full transition-all duration-200 ease-in-out me-3 mb-3">
                        {!! Str::limit($project->name, 20) !!}
                    </button>
                @endforeach
            </div>

            <!-- Image Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($projects as $project)
                    @foreach ($project->gallery as $image)
                        <div class="project-image project{{ $project->id }}">
                            <img class="h-auto max-w-full rounded-xl transition-transform duration-500 scale-100 hover:scale-105"
                                src="{{ asset('images/projects/images/' . $image->image) }}" alt="">
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        {{-- <div class="container mx-auto mt-16">
        <h1 class="text-center text-3xl font-extrabold headerFavFont uppercase">Photo Gallery</h1>
        <div class="flex justify-end items-center py-4 md:py-8 flex-wrap">
            <button type="button"
                class="text-gray-700 hover:text-gray-100  hover:bg-gradient-to-r from-purple-600 to-purple-400 border shadow-xl hover:border-transparent bg-white focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3"><i
                    class="fa-solid fa-list-check"></i> All categories</button>
            <button type="button"
                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                1</button>
            <button type="button"
                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                2</button>
            <button type="button"
                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                3</button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm6.jpeg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm1.webp') }}" alt="">

            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm4.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm5.webp') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm3.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm1.webp') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm2.png') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/projects/farm1.webp') }}" alt="">
            </div>
        </div>
    </div> --}}
    </section>

    {{-- VLIR --}}
    <section class="bg-gray-100 pb-16">
        <div class="container mx-auto mt-16 w-full text-center">
            <h1 class="font-semibold tracking-wide pt-20 text-2xl">VLIR in Brief</h1>
            <div class="p-7 mx-auto lg:w-1/2">
                <p class="text-justify favFont leading-relaxed text-lg">
                    The VLIR MWECAU partnership programme is a collaboration between the Mwenge Catholic University
                    and the KU-Leuven in Belgium. The programme is divided into two phases, each of six
                    years, with the first phase focusing on capacity building initiatives through PhD & master's
                    training for the institution’s staff, thematic research & training, launching of local master's and
                    PhD programmes, investing in....
                </p>
            </div>
            <div class="mt-4">
                <a href="#"
                    class="text-md font-semibold uppercase px-7 py-3 rounded-md bg-purple-500 text-white border-transparent">Read
                    More</a>
            </div>
        </div>
    </section>

    {{-- conferences --}}
    @if ($conferences->isNotEmpty())
        <section class="bg-purple-100 pb-16">
            <div class="w-10/12 lg:container mx-auto pt-9">
                <h1 class="md:text-start lg:text-center headerFavFont font-semibold text-3xl pb-10 uppercase">Conferences
                </h1>
                @if ($conferences->count() == 1)
                    <div class="flex items-center justify-center">
                        <div class="grid grid:cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4">
                            @foreach ($conferences as $conference)
                                <div
                                    class="border border-emerald-500 rounded-3xl p-6 shadow-lg bg-gray-50 hover:shadow-xl transition-shadow duration-300">
                                    <h1
                                        class="text-center font-bold text-2xl text-purple-700 tracking-tight leading-tight mb-4">
                                        {!! Str::ucfirst($conference->name) !!}
                                    </h1>
                                    <div class="text-gray-700 text-base leading-relaxed">
                                        <p class="text-justify">
                                            {!! Str::ucfirst($conference->description) !!}
                                        </p>
                                    </div>
                                    <div class="flex justify-center mt-8">
                                        <a href="{{ route('about-conference', $conference->name) }}"
                                            class="px-5 py-3 bg-emerald-500 text-white uppercase font-medium rounded-full border border-emerald-500 hover:bg-transparent hover:text-emerald-500 hover:border-emerald-500 transition-colors duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-emerald-300">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @elseif ($conferences->count() == 2)
                    <div class="grid grid:cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                        @foreach ($conferences as $conference)
                            <div
                                class="border border-purple-300 rounded-3xl p-6 shadow-lg bg-gray-50 hover:shadow-xl transition-shadow duration-300">
                                <h1
                                    class="text-center font-bold text-2xl text-purple-700 tracking-tight leading-tight mb-4">
                                    {!! Str::ucfirst($conference->name) !!}
                                </h1>
                                <div class="text-gray-700 text-base leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::ucfirst($conference->description) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center mt-8">
                                    <a href="{{ route('about-conference', $conference->name) }}"
                                        class="px-5 py-3 bg-emerald-500 text-white uppercase font-medium rounded-full border border-emerald-500 hover:bg-transparent hover:text-emerald-500 hover:border-emerald-500 transition-colors duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-emerald-300">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif ($conferences->count() == 3)
                    <div class="grid grid:cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($conferences as $conference)
                            <div
                                class="border border-emerald-500 rounded-3xl p-6 shadow-lg bg-gray-50 hover:shadow-xl transition-shadow duration-300">
                                <h1
                                    class="text-center font-bold text-2xl text-purple-700 tracking-tight leading-tight mb-4">
                                    {!! Str::ucfirst($conference->name) !!}
                                </h1>
                                <div class="text-gray-700 text-base leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::ucfirst($conference->description) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center mt-8">
                                    <a href="{{ route('about-conference', $conference->name) }}"
                                        class="px-5 py-3 bg-emerald-500 text-white uppercase font-medium rounded-full border border-emerald-500 hover:bg-transparent hover:text-emerald-500 hover:border-emerald-500 transition-colors duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-emerald-300">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="grid grid:cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($conferences as $conference)
                            <div
                                class="border border-emerald-500 rounded-3xl p-6 shadow-lg bg-gray-50 hover:shadow-xl transition-shadow duration-300">
                                <h1
                                    class="text-center font-bold text-2xl text-purple-700 tracking-tight leading-tight mb-4">
                                    {!! Str::ucfirst($conference->name) !!}
                                </h1>
                                <div class="text-gray-700 text-base leading-relaxed">
                                    <p class="text-justify">
                                        {!! Str::ucfirst($conference->description) !!}
                                    </p>
                                </div>
                                <div class="flex justify-center mt-8">
                                    <a href="{{ route('about-conference', $conference->name) }}"
                                        class="px-5 py-3 bg-emerald-500 text-white uppercase font-medium rounded-full border border-emerald-500 hover:bg-transparent hover:text-emerald-500 hover:border-emerald-500 transition-colors duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-emerald-300">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="text-end mt-8">
                    <a href="{{ route('project-conferences') }}"
                        class="px-6 py-3 border border-transparent rounded-xl bg-gradient-to-r from-emerald-700 to-emerald-600 text-white font-semibold hover:bg-gradient-to-l hover:from-purple-500 hover:to-purple-400 transition-all duration-500 ease-in-out shadow-lg hover:shadow-xl transform hover:scale-105">
                        View All
                    </a>
                </div>

            </div>
        </section>
    @endif

    {{-- project team --}}
    <section class="mt-28">
        <div class="container mx-auto">
            <h1 class="text-4xl font-semibold uppercase text-center headerFavFont">Our Team Drives Excellence</h1>
            <div class="w-9/12 mx-auto mt-10">
                <div class="pb-7 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-10">
                    <div
                        class="p-6 border border-purple-600 rounded-xl shadow-lg bg-white flex flex-col h-full hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                        <h1 class="uppercase text-3xl font-semibold FavFont pb-6 text-purple-700 tracking-wide">
                            Our Team Drives Excellence
                        </h1>
                        <p class="text-justify text-gray-700 leading-relaxed flex-grow">
                            At Mwenge Catholic University, we are dedicated to advancing research projects that create
                            lasting impact.

                            Joining our team means collaborating with talented professionals, addressing complex challenges,
                            and cultivating innovative solutions. Throughout this journey, you’ll forge meaningful
                            connections, thrive in a dynamic work environment, and embrace exciting opportunities for
                            personal and professional growth.
                        </p>
                    </div>


                    <div
                        class="grid grid-cols-1 bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 gradient rounded-xl">
                        <div class="p-4 border border-b-purple-600 xl divide-y-2 divide-purple-500">
                            <div class="lg:flex space-x-5 w-full pt-7">
                                <div class="px-5 order-2 sm:order-1 flex justify-center items-center sm:pb-4 pb-4">
                                    <img src="{{ asset('img/project/Dr.Minja.png') }}" alt=""
                                        class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover">
                                </div>
                                <div class="order-1 sm:order-2 flex-1">
                                    <div class="sm:text-center">

                                        <h1 class="uppercase font-semibold text-white">Dr. Gileard Sifuel Minja</h1>
                                        <span class="text-gray-400">Mwenge Catholic Unviversity</span>
                                        <p class="pt-3 text-white">
                                            Department of Agriculture, Earth and Environmental Sciences (DAES)

                                        </p>
                                    </div>

                                    {{-- Social Media Icons --}}
                                    <div class="flex justify-center items-center space-x-5 text-white mt-6 pb-6">
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-x-twitter text-2xl"></i>
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-google-scholar text-3xl"></i>
                                        </a>

                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-linkedin text-3xl"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="lg:flex space-x-5 w-full pt-7">
                                <div class="px-5 order-2 sm:order-1 flex justify-center items-center sm:pb-4 pb-4">
                                    <img src="{{ asset('img/project/Dr.Minja.png') }}" alt=""
                                        class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover">
                                </div>
                                <div class="order-1 sm:order-2 flex-1">
                                    <div class="sm:text-center">

                                        <h1 class="uppercase font-semibold text-white">Dr. Gileard Sifuel Minja</h1>
                                        <span class="text-gray-400">Mwenge Catholic Unviversity</span>
                                        <p class="pt-3 text-white">
                                            Department of Agriculture, Earth and Environmental Sciences (DAES)

                                        </p>
                                    </div>

                                    {{-- Social Media Icons --}}
                                    <div class="flex justify-center items-center space-x-5 text-white mt-6 pb-6">
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-x-twitter text-2xl"></i>
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-google-scholar text-3xl"></i>
                                        </a>

                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-linkedin text-3xl"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- //Testimonial --}}
    <section class=" mt-16">
        <div class="max-w-6xl mx-auto w-full">
            <div class="max-w-2xl mx-auto w-full text-center">
                <h1 class="text-gray-800 text-3xl font-extrabold headerFavFont">What our happy client say</h1>
                <p class="text-gray-800 text-lg leading-relaxed mt-6 favFont">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquam iure eaque cumque repellat
                    consectetur id esse, nam, aperiam atque nesciunt tempore, laborum sint sapiente ad temporibus molestias
                    labore placeat!
                </p>
            </div>
            {{-- //cards --}}
            <div class="mt-6 font-[sans-serif]">
                <div class="max-w-6xl max-auto">
                    <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center mt-16">
                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-md text-justify leading-relaxed favFont">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>

                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <p class="text-md text-justify leading-relaxed favFont">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>

                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                        <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-md text-justify leading-relaxed favFont">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function filterImages(project) {
            const allImages = document.querySelectorAll('.project-image');
            allImages.forEach(image => {
                image.style.display = (project === 'all' || image.classList.contains(project)) ? 'block' : 'none';
            });
        }
    </script>
    </div>
</section>

@endsection
