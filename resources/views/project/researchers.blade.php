@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full px-4 pt-10 lg:py-10 my-4 flex flex-col">
        <div class="flex flex-col w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-blue-800">vlirous / mwecau Project Members</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        {{-- top project reseachers --}}
        @if ($projects->isNotEmpty())
            @foreach ($projects as $project)
                <p>
                    <span class="text-blue-800">
                        <h2 class="uppercase text-xl text-center ml-0 text-blue-800 font-semibold mt-10">{{ $project->name }}
                          <span class="text-gray-700">Promoters</span></h2>
                    </span>
                </p>
                <div class="my-4 p-4 w-full flex flex-col flex-wrap lg:flex-row justify-center">
                    @if ($project->projectTeam && $project->projectTeam->isNotEmpty())
                        @php
                            $topLeaders = $project->projectTeam->filter(fn($member) => $member->role === 'top');
                        @endphp
                        @if ($topLeaders->isNotEmpty())
                            @foreach ($topLeaders as $topLeader)
                                <!-- Display top leader information here -->
                                <div class="w-full lg:w-1/4 h-max my-4">
                                    <div class="w-11/12 mx-auto border border-gray-300 shadow-md shadow-purple-800">
                                        <a href="{{ route('tema-member-profile-description', $topLeader->name) }}">
                                            <div class="relative w-full mb-2 overflow-hidden group">
                                                <div class="w-full h-72 overflow-hidden">
                                                    @if ($topLeader->profile_picture)
                                                        <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $topLeader->profile_picture) }}"
                                                            alt="service image"
                                                            class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                                    @else
                                                        <img src="{{ asset('img/projects/Male_Avatar.jpg') }}"
                                                            alt="service image"
                                                            class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                                    @endif
                                                </div>
                                                <div
                                                    class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                                    <a href="https://scholar.google.com/" class="text-white mx-2"><i
                                                            class="fa-brands fa-google-scholar"></i> Google Scholar</a>
                                                </div>
                                            </div>

                                            <div class="w-full mt-2 p-2 text-justify">
                                                <a href="{{ route('tema-member-profile-description', $topLeader->name) }}">
                                                    <h4
                                                        class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                                        {{ $topLeader->initials }} {{ $topLeader->name }}</h4>
                                                </a>
                                                <span class="my-4 text-gray-700 text-sm"><i
                                                        class="fa fa-university"></i>{{ $topLeader->institute }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="bg-blue-800 bg-opacity-80 rounded-2xl border-transparent py-5">
                                <span class="text-white p-6">Top leaders for this project are coming soon!</span>
                            </div>
                        @endif
                    @endif
                </div>
            @endforeach
        @endif

        {{-- other researchers --}}
        @if ($projects->isNotEmpty())
            <div class="flex flex-col justify-center items-center mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800 mt-10">Valuable Researchers</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>
            @foreach ($projects as $project)
                <p>
                    <span class="text-blue-800">
                        <h2 class="uppercase text-xl text-start ml-0 text-blue-800 font-semibold mt-10">{{ $project->name }}
                            Researchers</h2>
                    </span>
                </p>
                <div class="my-4 p-4 w-full flex flex-col flex-wrap lg:flex-row justify-center">
                    @foreach ($project->projectTeam as $teamMember)
                        <div class="w-full lg:w-1/4 h-max my-4">
                            <div class="w-11/12 mx-auto border border-gray-300 shadow-md shadow-purple-800">
                                <a href="{{ route('tema-member-profile-description', $teamMember->name) }}">
                                    <div class="relative w-full mb-2 overflow-hidden group">
                                        <div class="w-full h-72 overflow-hidden">
                                            @if ($teamMember->profile_picture)
                                                <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                                                    alt="service image"
                                                    class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                            @else
                                                <img src="{{ asset('img/projects/Male_Avatar.jpg') }}" alt="service image"
                                                    class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                            @endif
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                            <a href="https://scholar.google.com/" class="text-white mx-2"><i
                                                    class="fa-brands fa-google-scholar"></i> Google Scholar</a>
                                        </div>
                                    </div>

                                    <div class="w-full mt-2 p-2 text-justify">
                                        <a href="{{ route('tema-member-profile-description', $teamMember->name) }}">
                                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                                {{ $teamMember->initials }} {{ $teamMember->name }}</h4>
                                        </a>
                                        <span class="my-4 text-gray-700 text-sm"><i
                                                class="fa fa-university"></i>{{ $teamMember->institute }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <div class="container mx-auto">
                <div
                    class="w-full p-4 flex flex-col items-center justify-center text-center bg-blue-50 rounded-xl border border-dashed border-blue-200">
                    <h2 class="text-2xl font-bold text-blue-700 mb-2">Meet Our Researchers Soon!</h2>
                    <p class="text-gray-600 text-sm">Our research team is constantly growing. Check back soon to learn
                        more about the experts driving our projects forward.</p>
                    <i class="fas fa-user-graduate text-blue-400 text-5xl mt-4"></i>
                </div>

            </div>
        @endif

        {{-- other members/ not under any project --}}
        @if ($otherMembers->isNotEmpty())
            <div class="flex flex-col justify-center items-center mb-4">
                <h2 class="uppercase text-2xl text-blue-800 mt-10">Our Other Members</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            </p>
            <div class="my-4 p-4 w-full flex flex-col flex-wrap lg:flex-row justify-center">
                @foreach ($otherMembers as $member)
                    <div class="w-full lg:w-1/4 h-max my-4">
                        <div class="w-11/12 mx-auto border border-gray-300 shadow-md shadow-purple-800">
                            <a href="{{ route('tema-member-profile-description', $member->name) }}">
                                <div class="relative w-full mb-2 overflow-hidden group">
                                    <div class="w-full h-72 overflow-hidden">
                                        @if ($member->profile_picture)
                                            <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $member->profile_picture) }}"
                                                alt="service image"
                                                class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                        @else
                                            <img src="{{ asset('img/projects/Male_Avatar.jpg') }}" alt="service image"
                                                class="w-full h-72 object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                                        @endif
                                    </div>
                                    <div
                                        class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                        <a href="https://scholar.google.com/" class="text-white mx-2"><i
                                                class="fa-brands fa-google-scholar"></i> Google Scholar</a>
                                    </div>
                                </div>

                                <div class="w-full mt-2 p-2 text-justify">
                                    <a href="{{ route('tema-member-profile-description', $member->name) }}">
                                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                            {{ $member->initials }} {{ $member->name }}</h4>
                                    </a>
                                    <span class="my-4 text-gray-700 text-sm"><i
                                            class="fa fa-university"></i>{{ $member->institute }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        @endif
    </section>
@endsection
