@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $testifier->testifier_initials }} {{ $testifier->testifier_name }}
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.testimonial.testimonials') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="container mx-auto">
                <div
                    class="grid md:grid-cols-1 lg:grid-cols-2 border border-purple-500 rounded-2xl shadow-xl py-7 px-8 gap-9 bg-white">

                    <div class="flex flex-col items-center text-center">
                        @if ($testifier->testifier_profile_picture != null)
                            <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-lg"
                                src="{{ asset('/storage/images/projects/images/testimonials/profile-pictures/' . $testifier->testifier_profile_picture) }}"
                                alt="{{ $testifier->testifier_name }} profile picture">
                        @else
                            <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-lg"
                                src="{{ asset('img/projects/Male_Avatar.jpg') }}"
                                alt="{{ $testifier->testifier_name }} profile picture">
                        @endif
                        <div class="mt-5">
                            <h4 class="text-2xl font-semibold uppercase favFont">{{ $testifier->testifier_initials }}
                                {{ $testifier->testifier_name }}</h4>
                        </div>

                        <div class="mt-9 flex gap-7">
                            <a href="{{ route('admin.project.testimonial.edit-testimonial', $testifier->testifier_name) }}"
                                class="block mx-4 mb-3 px-4 py-2 text-sm text-gray-900 font-semibold bg-emerald-400 hover:bg-emerald-300 border rounded-md">
                                <i class="fa fa-pencil"></i> Edit</a>

                            <form action="{{ route('admin.project.testimonial.destroy-testimonial', $testifier->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                    class="block mx-4 mb-3 px-4 py-2 text-sm text-white font-semibold bg-red-600 hover:bg-red-500 border rounded-md hover:border-red-600">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- General Information Section -->
                    <div class="flex flex-col items-start text-left p-5">
                        <h3 class="text-purple-500 text-xl font-semibold mb-4 favFont">Description</h3>
                        <p class="text-justify">
                            {{ $testifier->testimonial_description }}
                        </p> <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, animi incidunt veritatis ipsa
                            maxime, quo hic natus illo voluptatem neque quisquam odit dolores sed, fugit fuga adipisci?
                            Rerum, eligendi quod?</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
