@extends('layouts.project.project-layout')
@section('content')
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

            {{-- top management team --}}
            <section class="mt-28">
                @if ($topLeaders->isNotEmpty())
                    <div class="container mx-auto">
                        <h1 class="text-4xl mt-5 pb-3 text-blue-500 font-semibold uppercase text-center headerFavFont">
                            Meet Our Top Leaders
                        </h1>

                        <div class="container mx-auto  mt-11 mb-11">
                            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-9">
                                @foreach ($topLeaders->take(3) as $leader)
                                    <div
                                        class="w-full md:w-1/3 bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 rounded-xl">
                                        <div class="lg:flex lg:space-x-5 w-full pt-7">
                                            <!-- Profile Image -->
                                            <div class="flex justify-center items-center px-5 pb-4">
                                                <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $leader->profile_picture) }}"
                                                    alt="Profile Picture"
                                                    class="rounded-full border-2 border-white h-[100px] w-[100px] object-cover">
                                            </div>

                                            <!-- Profile Information -->
                                            <div class="flex-1">
                                                <div class="text-center lg:text-left text-white">
                                                    <h1 class="uppercase font-semibold text-white">
                                                        {{ $leader->initials }} {{ $leader->name }}
                                                    </h1>
                                                    <span class="text-gray-400">{{ $leader->institute }}</span>
                                                    <p class="pt-3 text-white">{!! Str::limit($leader->bio, 70) !!}</p>
                                                </div>

                                                <!-- Social Media Icons -->
                                                {{-- <div class="flex justify-center lg:justify-start space-x-5 text-white mt-6 pb-6">
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
                                                <a href="{{ route('tema-member-profile-description', $leader->name) }}">
                                                    View Profile
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </section>

            <div class="container mx-auto px-6 lg:px-12">
                <h1 class="text-4xl mt-11 pb-6 text-blue-500 font-semibold uppercase text-center headerFavFont">
                    Other team members
                </h1>
                <div class="space-y-6">
                    @foreach ($projectTeamMembers as $teamMember)
                        <div class="flex flex-col lg:flex-row bg-gray-800 text-white rounded-lg shadow p-4">
                            <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                                alt="{{ $teamMember->name }}"
                                class="rounded-lg w-24 h-24 lg:w-32 lg:h-32 object-cover border-4 border-gray-700">
                            <div class="ml-0 lg:ml-6 mt-4 lg:mt-0">
                                <h3 class="text-lg font-semibold">{{ $teamMember->initials }} {{ $teamMember->name }}</h3>
                                <p class="text-sm text-gray-400">{{ $teamMember->institute }}</p>
                                <p class="text-sm text-gray-300 mt-2">
                                    {!! Str::limit($teamMember->bio, 70) !!}
                                </p>
                                <div class="mt-4">
                                    <a href="{{ route('tema-member-profile-description', $teamMember->name) }}"
                                        class="px-4 py-2 bg-green-500 rounded text-sm font-medium hover:bg-green-600">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
@endsection
