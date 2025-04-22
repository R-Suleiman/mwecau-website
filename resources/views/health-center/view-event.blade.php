@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'null';
    @endphp

    <section class="w-full p-4">
        <h2 class="bg-header text-center text-blue-800 text-2xl my-8">{{ $aboutNewsEvent->title }}</h2>

        <div class="w-full lg:w-10/12 mx-auto flex flex-col lg:flex-row border-box gap-4">
            <div class="w-full lg:w-3/5 text-justify text-gray-600 p-2">
                <p class="mb-4">{!! $aboutNewsEvent->description !!}</p>
            </div>
            <div class="w-full lg:w-2/5 py-4 px-8">
                <div class="flex flex-col items-center w-max mb-4">
                    <h2 class="text-center text-blue-800">Event Details</h2>
                    <div class="mt-3 border border-purple-500 w-3/5"></div>
                </div>

                <div class="w-full mx-auto">
                    <img src="{{ asset('storage/images/health-center/news-events-images/' . ($aboutNewsEvent->image ?? 'default-image.jpg')) }}"
                        alt="event image" class="w-full">
                </div>
                <div class="w-full event-details">
                    <ul class="my-4">
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Date:
                            </span>{{ \Carbon\Carbon::parse($aboutNewsEvent->date)->format('D, M Y') }}</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Time:
                            </span>{{ $aboutNewsEvent->time }}</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Location:
                            </span>{{ $aboutNewsEvent->location }}</< /li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Organizer :
                            </span>{{ $aboutNewsEvent->organizer }}</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Phone:
                            </span>{{ $aboutNewsEvent->contact }}</li>
                        <li class="p-2 text-md even:bg-blue-100"><span class="text-gray-600 font-semibold">Email:
                            </span>{{ $aboutNewsEvent->email }}</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- related events --}}
        @if ($relatedNewsEvent->isNotEmpty())
            <div class="w-10/12 mx-auto my-6">
                <div class="flex flex-col items-center w-max mb-4">
                    <h2 class="uppercase text-2xl text-center text-blue-800">Related Events</h2>
                    <div class="mt-3 border border-purple-500 w-3/5"></div>
                </div>

                <div class="events w-full">
                    @foreach ($relatedNewsEvent as $relatedNewsEvent)
                        <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                            <a href="{{ route('health-center.view-event', 'Treatment') }}">
                                <div class="w-full mb-2 overflow-hidden">
                                    <img src="{{ asset('storage/images/health-center/news-events-images/' . ($aboutNewsEvent->image ?? 'default-image.jpg')) }}"
                                        alt="event image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                </div>
                                <div class="w-full mt-2 p-2 text-justify">
                                    <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                        {{ $relatedNewsEvent->title }}
                                    </h4>
                                    <p>{{ $relatedNewsEvent->description }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection
