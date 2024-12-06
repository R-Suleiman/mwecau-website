@extends('layouts.project.project-layout')
@section('content')

    {{-- project team --}}
    <section class="mt-28">
        <div class="container mx-auto">
            <h1 class="uppercase text-3xl text-center font-semibold FavFont pb-6 text-purple-700 tracking-wide">
                {!! $teamContents->section_header !!}
            </h1>
            <h3 class="text-center">
                {!! $teamContents->section_sub_header !!}

            </h3>
            <div class="flex flex-col justify-center items-center">
                <div class="p-6 bg-white">
                    <p class="text-justify text-gray-800 leading-relaxed flex-grow favFont">
                        {!! $teamContents->section_description !!}
                    </p>
                </div>
            </div>

            @if ($projectTeamMembers->isNotEmpty())
                <div class="container w-10/12 lg:w-full mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5">
                        @foreach ($projectTeamMembers as $teamMember)
                            <div
                                class="lg:flex space-x-5 w-full pt-7 bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 gradient rounded-xl">
                                <div class="px-5 order-2 sm:order-1 flex justify-center items-center sm:pb-4 pb-4">
                                    @if ($teamMember->profile_picture)
                                        <img src="{{ asset('storage/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                                            alt=""
                                            class="rounded-full border-2 border-emerald-200 h-[150px] w-[150px] object-cover">
                                    @else
                                        <img src="{{ asset('img/mwecau.png') }}" alt=""
                                            class="rounded-full border-2 border-emerald-200 h-[150px] w-[150px] object-cover">
                                    @endif
                                </div>
                                <div class="order-1 sm:order-2 flex-1">
                                    <div class="sm:text-center">
                                        <h1 class="uppercase font-semibold text-white">{{ $teamMember->initials }}
                                            {{ $teamMember->name }}
                                        </h1>
                                        <span class="text-gray-400">{{ $teamMember->institute }}</span>
                                        <p class="pt-3 text-white">
                                            {!! Str::limit($teamMember->bio, 70) !!} </p>
                                    </div>

                                    {{-- Social Media Icons --}}
                                    <div class="flex justify-center items-center space-x-5 text-white mt-6 pb-6">
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-green-500 hover:bg-green-600 transition duration-200">
                                            <i class="fa-brands fa-x-twitter text-2xl"></i>
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-green-500 hover:bg-green-600 transition duration-200">
                                            <i class="fa-brands fa-google-scholar text-3xl"></i>
                                        </a>

                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-green-500 hover:bg-green-600 transition duration-200">
                                            <i class="fa-brands fa-linkedin text-3xl"></i>
                                        </a>
                                    </div>
                                    <button
                                        class="px-4 py-2 mb-7 rounded-lg border border-transparent text-white font-medium bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 shadow-md hover:shadow-lg transition-all duration-300">
                                        <a href="{{ route('tema-member-profile-description', $teamMember->name) }}"> View
                                            Profile</a>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    </div>
    </section>
@endsection
