@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('/storage/images/dpric/general/' . $bannerImg) }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="uppercase text-2xl md:text-4xl">MWECAU INNOVATIONS HUB</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full px-8 py-12 flex flex-col items-center bg-blue-900 text-blue-100">
        <i class="fa fa-brain text-8xl"></i>
        <h2 class="text-3xl my-4">{{ $welcomeMessage->title }}</h2>
        <p class="text-lg my-2 text-center">{{ $welcomeMessage->description }}</p>
    </section>

    {{-- innovations projects --}}
    <section class="w-full">
        <div class="w-full md:w-10/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="w-full md:w-2/3 p-4 my-4 order-2 md:order-1">
                <h3 class="text-3xl my-4 text-default-head">{{ $innovationProjects->title }}</h3>
                <p class="text-lg my-2 text-default-text">{{ $innovationProjects->description }}</p>
            </div>
            <div class="w-full md:w-1/3 p-2 md:p-4 my-0 md:my-4 flex content-center items-center order-1 md:order-2">
                <i class="fas fa-robot mx-auto text-7xl md:text-9xl text-blue-800"></i>
            </div>
        </div>

        @if ($projects->count() > 0)
            <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
                @foreach ($projects as $project)
                    <div class="w-full lg:w-1/3 my-4">
                        <a href="{{ route('dpric.innovations-project', $project->project_title) }}">
                            <div
                                class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                                <div class="relative rounded-br-full h-full bg-cover bg-center bg-no-repeat"
                                    style="background-image: url({{ $project->primary_image ? '/storage/images/dpric/clubs/projects/' . $project->primary_image : '../../img/mwecau.png' }})">
                                    <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                        <span
                                            class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">{{ $project->category }}</span>
                                        <div class="mt-4 flex flex-col text-white">
                                            <h3 class="text-xl my-1">{{ $project->project_title }}</h3>
                                            <span class="mb-1 text-lg">Participants: {{ $project->club->name }}</span>
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
                @endforeach
            </div>
            <div class="w-fit mx-auto mb-4">
                <x-dpric-btn btnLink="/dpric/innovations-hub/projects">
                    More Projects
                </x-dpric-btn>
            </div>
        @else
            <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Projects found!</div>
        @endif
    </section>

    {{-- Clubs --}}
    <section class="w-full">
        <div class="w-full md:w-10/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="w-full md:w-1/3 p-2 md:p-4 my-0 md:my-4 flex content-center items-center">
                <i class="fas fa-users mx-auto text-7xl md:text-9xl text-blue-800"></i>
            </div>
            <div class="w-full md:w-2/3 p-4 my-4">
                <h3 class="text-3xl my-4 text-default-head">{{ $innovationClubs->title }}</h3>
                <p class="text-lg my-2 text-default-text">{{ $innovationClubs->description }}</p>
            </div>
        </div>

        @if ($clubs->count() > 0)
            <div class="w-full md:w-10/12 mx-auto flex flex-wrap flex-col md:flex-row p-4">
                @foreach ($clubs as $club)
                    <div class="w-full md:w-1/2 my-4">
                        <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                            <div class="w-full h-60 overflow-hidden"><a href="{{ route('dpric.innovations-club', $club->name) }}"><img
                                        src="{{ $club->primary_image ? asset('/storage/images/dpric/clubs/' . $club->primary_image) : '../../img/mwecau.png' }}"
                                        alt="" class="w-full object-cover object-center"></a></div>
                            <div class="w-full p-2 text-center">
                                <a href="{{ route('dpric.innovations-club', $club->name) }}">
                                    <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">
                                        {{ $club->name }}</h3>
                                </a>
                                <p class="text-md my-2 text-default-text">{{ Str::words($club->description, 30, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-fit mx-auto mb-4">
                <x-dpric-btn btnLink="/dpric/innovations-hub/clubs">
                    View More Clubs
                </x-dpric-btn>
            </div>
        @else
            <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Club found!</div>
        @endif

    </section>

    {{-- key features --}}
    <section class="w-full flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('/storage/images/dpric/general/' . $otherImg) }}" alt="" class="w-full">
        </div>
        <div class="w-full md:w-1/2 py-4 px-4 md:px-12 text-blue-100 bg-blue-800">
            <p class="my-4 text-xl text-justify">{{ $innovationPrinciple->description }}</p>
            <div class="p-4 my-4">
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Collaborative
                        Workspaces</span></div>
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Technology and
                        Resources</span></div>
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Innovation
                        Challenges</span></div>
            </div>
        </div>
    </section>

    {{-- Partnership --}}
    <section class="w-full">
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Our Partnership</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full md:w-10/12 text-center my-4 mx-auto">
            <div class="justify-between flex items-center p-4 rounded-md partners">
                <div class="w-6/12 md:w-4/12 lg:w-1/5 p-4 rounded-full">
                    <a href="https://susie.turkuamk.fi/" target="_blank"><img src="{{ asset('img/p/susie.png') }}"
                            alt="" class="rounded-md w-full h-40"></a>
                </div>
                <div class="w-6/12 md:w-4/12 lg:w-1/5 p-4 rounded-full">
                    <a href="https://www.oph.fi/en" target="_blank"><img src="{{ asset('img/p/finnish.svg') }}"
                            alt="" class="rounded-md w-full h-40"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
