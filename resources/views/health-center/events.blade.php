@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'null';
    @endphp

    <div class="">
        @if ($newsEvents->isNotEmpty() && $newsEvents->first()->image)
            <img src="{{ asset('storage/images/health-center/news-events-images/' . $newsEvents->first()->image) }}"
                alt="banner" class="w-full object-center object-cover h-96">
        @else
            <img src="{{ asset('img/site banners/BANNER COMPUTER.jpg') }}" alt="banner" class="w-100">
        @endif
    </div>

    {{-- Events --}}
    <section class="w-full px-4 py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center justify-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Health Center Events</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($newsEvents->isNotEmpty())
            <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($newsEvents as $newsEvent)
                    <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300 rounded-md">
                        <a href="{{ route('health-center.view-event', $newsEvent->title) }}">
                            <div class="w-full mb-2 overflow-hidden">
                                @if ($newsEvent->image)
                                    <img src="{{ asset('storage/images/health-center/news-events-images/' . $newsEvent->image) }}"
                                        alt="Image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @else
                                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="Image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @endif
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $newsEvent->title }}</h4> <span class="my-4 text-gray-400 text-sm"><i
                                        class="fa fa-calendar"></i>
                                    {{ $newsEvent->date }}</< /span>

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
