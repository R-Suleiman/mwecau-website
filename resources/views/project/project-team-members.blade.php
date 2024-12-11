@extends('layouts.project.project-layout')
@section('content')

    {{-- project team --}}
    {{-- project team --}}
    <section class="mt-28">
        <div class="container mx-auto">
            <h1 class="text-4xl pb-6 text-blue-500 font-semibold uppercase text-center headerFavFont">
                {!! $teamContents->section_header !!}
            </h1>
            <div
                class="p-6 border-t-2 border-blue-900 rounded-xl shadow-lg bg-white flex flex-col h-full hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <h1 class="uppercase text-xl italic font-semibold FavFont pb-6 text-gray-700 tracking-wide">
                    {!! $teamContents->section_sub_header !!}
                </h1>
                <p class="text-justify text-gray-700 leading-relaxed flex-grow">
                    {!! $teamContents->section_description !!}
                </p>
            </div>

            <div class="container mx-auto  mt-11">
                <div class="grid grid-cols-3 justify-center gap-3">
                    @if ($projectTeamMembers->count() > 0)
                        @foreach ($projectTeamMembers as $teamMember)
                            <div class="bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 rounded-xl">
                                <div class="lg:flex lg:space-x-5 w-full pt-7">
                                    <!-- Profile Image -->
                                    <div class="flex justify-center items-center px-5 pb-4">
                                        <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                                            alt="Profile Picture"
                                            class="rounded-full border-2 border-white h-[100px] w-[100px] object-cover">
                                    </div>

                                    <!-- Personal Details -->
                                    <div class="flex-1">
                                        <div class="text-center lg:text-left text-white">
                                            <h1 class="uppercase font-semibold text-white">
                                                {{ $teamMember->initials }} {{ $teamMember->name }}
                                            </h1>
                                            <span class="text-gray-400">{{ $teamMember->institute }}</span>
                                            <p class="pt-3 text-white">{!! Str::limit($teamMember->bio, 100) !!}</p>
                                        </div>

                                        {{-- <!-- Social Media Icons -->
                                        <div class="flex justify-center lg:justify-start space-x-5 text-white mt-6 pb-6">
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
                                        </div> --}}
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="flex justify-center items-center pb-6">
                                    <button
                                        class="px-4 py-2 text-xs rounded-lg text-white font-semibold bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 shadow-md hover:shadow-lg transition-all duration-300">
                                        <a href="{{ route('tema-member-profile-description', $teamMember->name) }}">
                                            View Profile
                                        </a>
                                    </button>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
