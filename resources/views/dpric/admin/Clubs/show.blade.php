@extends('layouts.dpric.dpric-admin-layout')

@section('content')

    {{-- hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="text-4xl">{{ $club->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        {{-- Welcome Message --}}
        <div class="w-full md:w-10/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="w-full md:w-2/3 p-4 my-4 order-2 md:order-1">
                <h3 class="text-3xl my-4 text-default-head">Welcome Message from the Club Chairperson</h3>
                <p class="text-lg my-2 text-default-text text-justify">{{ $club->welcome_message }}</p>
            </div>
            <div class="w-full md:w-1/3 my-0 md:my-4 order-1 md:order-2 border border-blue-800 rounded-md h-min">
                <div class="relative w-full mb-2 overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    <div
                        class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                        <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                        <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                        <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                        <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="w-full mt-2 p-2 text-center flex flex-col">
                    <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">John Doe</h4>
                    <span class="text-default-text text-md">Club's Chairperson</span>
                    {{-- <span class="text-default-text text-md">Student</span> --}}
                </div>
            </div>
        </div>

        {{-- About --}}
        <div class="w-full md:w-11/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="flex flex-col w-full md:w-1/2 mx-auto px-4 py-2 shadow-sm shadow-blue-700 my-8 order-2 md:order-1">
                <div class="w-full px-4 md:px-8 my-2 ">
                    <div class="flex justify-between">
                        <h3 class="text-xl lg:text-3xl text-default-head">Our Mission</h3>
                        <i class="fa fa-bullseye text-xl lg:text-3xl text-default-head"></i>
                    </div>
                    <p class="text-default-text my-4 text-justify">{{ $club->mission }}</p>
                </div>
                <div class="w-full px-4 md:px-8 my-2">
                    <div class="flex justify-between">
                        <h3 class="text-xl lg:text-3xl text-default-head">Our Vision</h3>
                        <i class="fa fa-eye text-xl lg:text-3xl text-default-head"></i>
                    </div>
                    <p class="text-default-text my-4 text-justify">{{ $club->vision }}</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 p-4 md:my-4 order-1 md:order-2">
                <h3 class="text-3xl md:my-4 text-default-head">About ICT Club</h3>
                <p class="text-lg my-2 text-default-text text-justify">{{ $club->description }}</p>
            </div>
        </div>

        {{-- summary --}}
        <div
            class="w-full md:w-11/12 mx-auto flex flex-col md:flex-row md:h-96 my-8 border border-blue-600 rounded-md overflow-hidden">
            <div class="w-full md:w-4/12 p-4 md:h-96">
                <div class="w-11/12 mx-auto rounded-lg project-desc1">
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Club's Department</label>
                        <span class="text-xl text-default-text">{{ $club->department }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Founded</label>
                        <span class="text-xl text-default-text">{{ $club->found_date }}<span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Active Members</label>
                        <span class="text-xl text-default-text">{{ $club->total_members }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Projects</label>
                        <span class="text-xl text-default-text">{{ $club->total_projects }}</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-8/12 md:h-96">
                <img src="{{ asset('img/campus-life/spirtual4.jpg') }}" alt=""
                    class="md:object-cover md:h-96 w-full">
            </div>
        </div>

        {{-- What we do --}}
        <div class="w-full mx-auto flex flex-col md:flex-row p-4 bg-blue-900 my-8">
            <div class="w-full md:w-1/2 p-2 md:p-4 my-0 md:my-4 flex flex-col content-center items-center">
                <i class="fas fa-tasks mx-auto text-5xl md:text-9xl text-blue-100"></i>
                <h3 class="text-4xl my-4 text-blue-100">What we do</h3>
            </div>
            <div class="w-full md:w-1/2 p-4 my-4 text-blue-100">

                @if ($clubActivities->count() > 0)
                    @foreach ($clubActivities as $activity)
                        <div class="my-2"><i class="fa fa-check text-lg"></i> <span
                                class="ml-2 text-2xl">{{ $activity->activity_name }}</span></div>
                    @endforeach
                    <div class="mt-auto">
                        <button class="p-2 bg-purple-600 border-2 border-white text-white my-4"><a href="{{ route('admin.activities.index', ['club_name' => $club->name]) }}">Manage Activities</a></button>
                    </div>
                @else
                            <div class="my-4">
                                <p class="text-xl">No Activies Found!</p>
                                <button class="p-2 bg-purple-600 border-2 border-white text-white my-4"><a href="{{ route('admin.activities.create', ['club_name' => $club->name]) }}">Add Activities</a></button>
                            </div>
                @endif

            </div>
        </div>

        {{-- Projects --}}
        <div class="w-full p-4">
            <h3 class="text-3xl my-4 text-default-head text-center">Explore Our Projects</h3>
            <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
                <div class="w-full lg:w-1/3 my-4">
                    <a href="{{ route('dpric.innovations-project') }}">
                        <div
                            class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                            <div class="img-bg relative rounded-br-full h-full">
                                <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                    <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Technology</span>
                                    <div class="mt-4 flex flex-col text-white">
                                        <h3 class="text-xl my-1">Title of the Project</h3>
                                        <span class="mb-1 text-lg">Participants: MWECAU ICT CLub</span>
                                        <span class="mb-1 text-lg">Location: MWECAU</span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 right-0 m-6 w-fit">
                                <i class="fa fa-lightbulb text-4xl text-white"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 my-4">
                    <a href="{{ route('dpric.innovations-project') }}">
                        <div
                            class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                            <div class="img-bg relative rounded-br-full h-full">
                                <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                    <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Environment</span>
                                    <div class="mt-4 flex flex-col text-white">
                                        <h3 class="text-xl my-1">Title of the Project</h3>
                                        <span class="mb-1 text-lg">Participants: MWECAU PCCB CLub</span>
                                        <span class="mb-1 text-lg">Location: MWECAU</span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 right-0 m-6 w-fit">
                                <i class="fa fa-lightbulb text-4xl text-white"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 my-4">
                    <a href="{{ route('dpric.innovations-project') }}">
                        <div
                            class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                            <div class="img-bg relative rounded-br-full h-full">
                                <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                    <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Agricluture</span>
                                    <div class="mt-4 flex flex-col text-white">
                                        <h3 class="text-xl my-1">Title of the Project</h3>
                                        <span class="mb-1 text-lg">Participants: MWECAU Agriculture CLub</span>
                                        <span class="mb-1 text-lg">Location: MWECAU</span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 right-0 m-6 w-fit">
                                <i class="fa fa-lightbulb text-4xl text-white"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-fit mx-auto mb-4">
                <x-dpric-btn btnLink="/dpric/innovations-hub/clubs/single-club/projects">
                    All Projects
                </x-dpric-btn>
            </div>
        </div>

        {{-- Leaders --}}
        <div class="w-full p-4">
            <h3 class="text-3xl my-4 text-default-head text-center">ICT Club's Leadership</h3>
            <div class="w-full flex flex-col md:flex-row">
                <div class="p-4 w-full md:w-1/4">
                    <div class="w-full my-0 md:my-4 order-1 md:order-2 border border-blue-800 rounded-md">
                        <div class="relative w-full mb-2 overflow-hidden group">
                            <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            <div
                                class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="w-full mt-2 p-2 text-center flex flex-col">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">John Doe</h4>
                            <span class="text-default-text text-md">Club Supervisor</span>
                            {{-- <span class="text-default-text text-md">Assistant Lecturer</span> --}}
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/4">
                    <div class="w-full my-0 md:my-4 order-1 md:order-2 border border-blue-800 rounded-md">
                        <div class="relative w-full mb-2 overflow-hidden group">
                            <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            <div
                                class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="w-full mt-2 p-2 text-center flex flex-col">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">John Doe</h4>
                            <span class="text-default-text text-md">Club Chairperson</span>
                            {{-- <span class="text-default-text text-md">Student</span> --}}
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/4">
                    <div class="w-full my-0 md:my-4 order-1 md:order-2 border border-blue-800 rounded-md">
                        <div class="relative w-full mb-2 overflow-hidden group">
                            <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            <div
                                class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="w-full mt-2 p-2 text-center flex flex-col">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">John Doe</h4>
                            <span class="text-default-text text-md">Club Vice Chairperson</span>
                            {{-- <span class="text-default-text text-md">Student</span> --}}
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/4">
                    <div class="w-full my-0 md:my-4 order-1 md:order-2 border border-blue-800 rounded-md">
                        <div class="relative w-full mb-2 overflow-hidden group">
                            <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                                class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            <div
                                class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="w-full mt-2 p-2 text-center flex flex-col">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">John Doe</h4>
                            <span class="text-default-text text-md">Club Secretary</span>
                            {{-- <span class="text-default-text text-md">Student</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- gallery --}}
        <section class="w-full py-8">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">More on our Club</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="w-full flex p-4 flex-wrap items-center">
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project1.jpeg') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project3.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
