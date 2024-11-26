@extends('layouts.project.project-layout')

@section('content')
    @if ($conferences->isEmpty())
        <section class="w-full  px-4 pt-10 md:py-10 my-4 flex flex-col items-center">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">Conferences</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

        </section>
    @endif

    <div class="container mx-auto">
        @if ($conferences->isNotEmpty())
            <!-- Page Header -->
            <section class="container mx-auto px-6 py-12 lg:py-20 text-center">
                <h2 class="text-4xl font-bold text-blue-600 headerFavFont">Upcoming Conferences</h2>
                <p class="mt-4 text-lg text-gray-600 italic">Explore our curated list of top conferences happening worldwide. Find
                    the best events to enhance your knowledge and connect with industry leaders.</p>
            </section>

            <!-- Conference Listing -->
            <section class="container mx-auto px-6 py-8 lg:py-16">
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Conference Card -->
                    @foreach ($conferences as $conference)
                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200">
                            <h3 class="text-xl font-semibold text-indigo-600">{{ $conference->name }}</h3>
                            <p class="text-gray-600 mt-2">{{ $conference->location }}</p>
                            <p class="text-gray-500 mt-1">
                                {{ \Carbon\Carbon::parse($conference->date)->isoFormat('dddd, MMMM od YYYY') }}</p>
                            <div class="mt-4">
                                <p class="text-gray-600">{!! Str::limit($conference->description, 100) !!}</p>
                            </div>
                            <div class="mt-6 text-center">
                                <a href="{{ route('about-conference', $conference->name) }}"
                                    class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-purple-700 transition duration-200">Learn
                                    More</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        @else
            <div
                class="w-full p-4 flex flex-col items-center justify-center text-center bg-indigo-50 rounded-xl border border-dashed border-indigo-200">
                <h2 class="text-2xl font-bold text-indigo-700 mb-2">Upcoming Conferences</h2>
                <p class="text-gray-600 text-sm">We’re working to bring you insightful conferences. Please check back soon
                    for
                    updates on upcoming events.</p>
                <i class="fas fa-calendar-alt text-indigo-400 text-5xl mt-4"></i>
            </div>
        @endif

    </div>
@endsection
