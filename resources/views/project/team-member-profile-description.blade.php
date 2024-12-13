@extends('layouts.project.project-layout')
@section('content')
    {{-- project team --}}
    <section class="mt-16">
        <div class="container mx-auto">
            <div>
                <div class="flex flex-wrap justify-center">
                    <!-- Profile Picture and Name -->
                    <div class="flex items-center w-full md:w-1/2 bg-blue-100 p-4 rounded-xl">
                        @if ($teamMember->profile_picture)
                            <img src="{{ asset($storagePath . $teamMember->profile_picture) }}" alt=""
                                class="rounded-full border-2 border-emerald-200 h-[150px] w-[150px] object-cover">
                        @else
                            <img src="{{ asset('img/mwecau.png') }}" alt=""
                                class="rounded-full border-2 border-emerald-200 h-[150px] w-[150px] object-cover">
                        @endif
                        <div>
                            <ul>
                                <li class="pb-3"><strong>Name:</strong> {{ $teamMember->initials }}
                                    {{ $teamMember->name }}
                                </li>
                                <li class="pb-3"><strong>Institute:</strong> {{ $teamMember->institute }}</li>
                                <li class="pb-3"><strong>Position:</strong> {{ $teamMember->position }}</li>
                                <li class="pb-3">
                                    <strong>Date Joined:</strong> {{ $teamMember->created_at->format('Y-M-d') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Bio Description -->
                    <div class="w-full bg-white p-4 mt-4">
                        <p class="text-gray-600 text-justify">
                            {!! $teamMember->bio !!}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
    </section>
@endsection
