@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full  px-4 pt-10 md:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">Conferences</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

    </section>
    <div class="container mx-auto">
        @if ($conferences->isNotEmpty())
            Conferences are available
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
