@extends('layouts.project.project-layout')

@section('content')

    <section class="w-full  px-4 pt-10 lg:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">vlir / mwecau Researchers</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>


        <div class="my-4 p-4 w-full flex flex-col flex-wrap lg:flex-row">
            @if ($team->isNotEmpty())
                @foreach ($team as $teamMember)
                    <div class="w-full lg:w-1/4 h-max my-4">
                        <div class="w-11/12 mx-auto border border-gray-300 shadow-md shadow-purple-800">
                            <a href="">
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
                                    <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                        {{ $teamMember->initials }} {{ $teamMember->name }}</h4>
                                    <span class="my-4 text-gray-400 text-sm"><i
                                            class="fa fa-calendar"></i>{{ $teamMember->institute }}</span>
                                </div>
                            </a>
                        </div>
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
        </div>
    </section>
@endsection
