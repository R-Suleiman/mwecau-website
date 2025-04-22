@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full px-4 pt-10 lg:py-10 my-4 flex flex-col">
        <div class="flex flex-col w-max mb-4 mx-auto my-8">
            <h1 class="text-3xl font-bold text-blue-800">Publications</h1>
            <p class="text-gray-600 mt-2">Explore our latest publications and updates.</p>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        {{-- project publications --}}
        <div class="w-11/12 mx-auto px-4 mt-8">
            <!-- Publication Cards -->
            <div class="w-full flex flex-col md:flex-row justify-center items-center gap-6">
                <!-- Card Item -->
                @if ($publications && $publications->isNotEmpty())
                    @foreach ($publications as $publication)
                        <div
                            class="w-full md:w-1/3 bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="p-4">
                                <h2 class="text-md text-gray-800"><span class="font-semibold">Title:</span>
                                    {{ $publication->title }}</h2>
                                <h4 class="text-sm text-gray-800 pt-4 italic"><span class="font-semibold">Authors:</span>
                                    {{ $publication->author }}</h4>
                                <p class="text-gray-600 mt-2">{!! $publication->about_publication !!}</p>
                                <div class="flex items-center justify-between mt-4">
                                    <span
                                        class="text-gray-500 text-sm">{{ $publication->created_at->diffForHumans() }}</span>
                                    <a href="{{ $publication->link }}"
                                        @if ($publication->link) target="__blank" @endif
                                        class="py-2 px-4 bg-blue-600 border border-transparent  text-white text-sm rounded-lg font-semibold">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

        <!-- Pagination -->
        {{-- <div class="flex justify-center mt-8">
            <nav class="flex items-center gap-2">
                <button
                    class="px-3 py-1 border rounded-lg text-blue-800 hover:bg-blue-800 hover:text-white">Previous</button>
                <button class="px-3 py-1 border rounded-lg text-blue-800 hover:bg-blue-800 hover:text-white">1</button>
                <button class="px-3 py-1 border rounded-lg text-blue-800 hover:bg-blue-800 hover:text-white">2</button>
                <button class="px-3 py-1 border rounded-lg text-blue-800 hover:bg-blue-800 hover:text-white">Next</button>
            </nav>
        </div> --}}
    </section>
@endsection
