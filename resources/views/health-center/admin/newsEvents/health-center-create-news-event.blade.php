@extends('layouts.health-center.admin.health-center-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('health-center.news-events') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>
    <div class="text-gray-900 uppercase rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
        class="headerFavFont text-2xl bg-clip-text text-transparent bg-gradient-to-r from-gray-700 to-gray-200 font-bold">
            Health center News and Events
        </h1>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('health-center.store-news-event') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- News/Event title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm mb-4 font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                placeholder="New State-of-the-Art Radiology Center Now Open!"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- organizer -->
                        <div class="mb-4">
                            <label for="organizer" class="block text-sm mb-4 font-medium text-gray-700">Organizer</label>
                            <input type="text" id="organizer" name="organizer" value="{{ old('organizer') }}"
                                placeholder="Organizer"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('organizer')" class="mt-2" />
                        </div>

                        <!--  Time -->
                        <div class="mb-4">
                            <label for="time" class="block text-sm mb-4 font-medium text-gray-700">Time</label>
                            <input type="time" id="time" value="{{ old('time') }}" name="time"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <!--  Date -->
                        <div class="mb-4">
                            <label for="date" class="block text-sm mb-4 font-medium text-gray-700">Date</label>
                            <input type="date" id="date" value="{{ old('date') }}" name="date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>

                        <!-- Location -->
                        <div class="mb-4">
                            <label for="location" class="block text-sm mb-4 font-medium text-gray-700">Location</label>
                            <input type="text" id="location" name="location" value="{{ old('location') }}"
                                placeholder="Location"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <!-- contact -->
                        <div class="mb-4">
                            <label for="contact" class="block text-sm mb-4 font-medium text-gray-700">Contact</label>
                            <input type="text" id="contact" name="contact" value="{{ old('contact') }}"
                                placeholder="Contact"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                        </div>
                    </div>

                    <div class="w-full">
                        <!-- email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm mb-4 font-medium text-gray-700">E-Mail</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}"
                                placeholder="E-Mail Address"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">
                                Description </label>
                            <textarea name="description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- image file -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm mb-4 font-medium text-gray-700">
                                Image File <strong>(if Applicable)</strong> </label>
                            <input type="file" id="image" name="image"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Post News/Event
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
