@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'null';
    @endphp

    <div class="">
        <img src="{{ asset('img/site banners/BANNER COMPUTER.jpg') }}" alt="banner" class="w-100">
    </div>

    {{-- Events --}}
    <section class="w-full px-4 py-20 mb-4 flex flex-col items-center bg-neutral-100">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Hospital Events</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($newsEvents->isNotEmpty())
            <div class="my-4 w-fit justify-center flex p-4 flex-wrap flex-col items-center lg:flex-row ">
                @foreach ($newsEvents as $newsEvent)
                    <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                        <a href="{{ route('health-center.view-event', $newsEvent->title) }}">
                            <div class="w-full mb-2 overflow-hidden">
                                <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $newsEvent->title }}</h4>
                                <p>{!! $newsEvent->description !!}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
