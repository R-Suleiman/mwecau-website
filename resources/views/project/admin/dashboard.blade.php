@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class=" text-gray-900 uppercase flex items-center justify-center text-center py-4 px-7 mt-7">
        <h1
            class="text-4xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400 headerFavFont">
            RESEARCH & CONSULTANCY PANEL</h1>
    </div>
    <x-project-admin-messages />
    <div class="p-4 rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-4">
            <div
                class="relative p-6 rounded-lg bg-gradient-to-r from-gray-900 via-gray-800 to-purple-900 shadow-lg text-center text-white">
                <span class="text-3xl font-bold favFont uppercase headerFavFont">Projects</span>
                <div class="mt-2 text-sm font-medium text-white flex items-center justify-center space-x-1">
                    <span class="favFont lg:text-8xl text-yellow-400">{{ $totalprojects }}</span>
                    <i class="fas fa-folder-open text-2xl mr-2"></i>
                </div>
                <div class="flex items-center justify-center mt-7">
                    <a href="{{ route('admin.project.projects') }}"
                        class="py-2 px-4 text-xs uppercase font-semibold tracking-wider bg-white text-gray-900 border border-white rounded-md ">View
                        Details</a>
                </div>
            </div>

            <div
                class="relative p-6 rounded-lg bg-gradient-to-r from-gray-900 via-gray-800 to-purple-900 shadow-lg text-center text-white">
                <!-- Card Title -->
                <span class="text-3xl font-bold favFont uppercase headerFavFont">Scholarships</span>

                <!-- Statistic and Icon -->
                <div class="mt-4 text-sm font-medium flex items-center justify-center space-x-2">
                    <span class="favFont lg:text-8xl text-yellow-400">{{ $totalScholarships }}</span>
                    <i class="fas fa-graduation-cap text-2xl mr-2"></i>

                </div>

                <!-- Button Link -->
                <div class="flex items-center justify-center mt-6">
                    <a href="{{ route('admin.project.scholarship.scholarships') }}"
                        class="py-2 px-5 text-sm uppercase font-semibold tracking-wide bg-white text-purple-800 hover:bg-gray-200 transition-colors border border-transparent rounded-md">
                        View Details
                    </a>
                </div>
            </div>

            <div
                class="relative p-6 rounded-lg bg-gradient-to-r from-gray-900 via-gray-800 to-purple-900 shadow-lg text-center text-white">
                <span class="text-3xl font-bold favFont uppercase headerFavFont">Researchers</span>
                <div class="mt-2 text-sm font-medium text-green-100 flex items-center justify-center space-x-1">
                    <span class="favFont lg:text-8xl text-yellow-400">{{ $totalprojects }}</span>
                    <i class="fas fa-microscope text-2xl mr-2"></i>
                </div>
                <div class="flex items-center justify-center mt-7">
                    <a href="#"
                        class="py-2 px-4 text-xs uppercase font-semibold tracking-wider bg-white text-gray-900 border border-white rounded-md ">View
                        Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <!-- Header Section -->
        <header class="bg-gray-700 text-white py-8 px-4 text-center rounded-xl">
            <h1 class="text-3xl font-bold headerFavFont">Manage Pages Sections</h1>
            <p class="text-lg mt-2">Organize and customize your website's key sections, including testimonials, gallery,
                events, and more!</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @if ($websiteContents->isNotEmpty())
                @foreach ($websiteContents as $content)
                    <div class="rounded-xl border border-purple-500 hover:shadow-2xl overflow-hidden relative">
                        {{-- <img src="{{ asset('img/campus-life/parking.JPG') }}" class="object-cover w-full h-[300px]"
                            alt="Campus Life Image"> --}}
                        <img src="{{ $content->image ? asset('storage/images/projects/images/sliding-images/' . $content->image) : asset('img/campus-life/parking.JPG') }}"
                            alt="Profile Picture" class="h-full w-full object-cover rounded-xl border-2 border-white">

                        <div
                            class="absolute inset-0 text-white bg-black bg-opacity-60 flex justify-center items-center flex-col gap-4">
                            <h1 class="text-4xl headerFavFont">{{ $content->section_header }}</h1>
                            <a href="{{ route('admin.project.edit-page-section', [$content->id, $content->section_header]) }}"
                                class="bg-purple-600 text-white px-12 py-2 rounded-lg shadow-lg hover:bg-purple-700 transition">
                                Edit
                            </a>
                            @if ($content->page_section == 'home_slider')
                                <form action="{{route('admin.project.delete-home-slider', $content->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to remove this slider?')"
                                        class="bg-red-600 text-white px-12 py-2 rounded-lg shadow-lg hover:bg-red-500 transition">
                                        Remove
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
