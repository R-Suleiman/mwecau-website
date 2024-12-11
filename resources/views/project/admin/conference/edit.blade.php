@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $conference->name }}
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.conference.index') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.conference.update', $conference->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Conference
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ $conference->name }}"
                                placeholder="eg. the Fifth MWECAU international Conference"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Project Category -->
                        <div class="mb-4">
                            <label for="location" class="block text-sm mb-4 font-medium text-gray-700">Location</label>
                            <input type="location" id="location" name="location" value="{{ $conference->location }}"
                                placeholder="Will be held at"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <!-- Duration -->
                        <div class="mb-4">
                            <label for="host" class="block text-sm mb-4 font-medium text-gray-700">host</label>
                            <input type="text" id="host" name="host" value="{{ $conference->host }}"
                                placeholder="Conference host"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        <!--  Date -->
                        <div class="mb-4">
                            <label for="date" class="block text-sm mb-4 font-medium text-gray-700">Date</label>
                            <input type="date" id="date" value="{{ $conference->date }}" name="date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">About the
                                Conference</label>
                            <textarea name="description" id="editor" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $conference->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <!-- PDF file -->
                        <div class="mb-4">
                            <label for="pdf" class="block text-sm mb-4 font-medium text-gray-700">Conference
                                PDF<strong>(if Applicable)</strong> </label>
                            <input type="file" id="pdf" name="pdf"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('pdf')" class="mt-2" />
                            <div class="mt-4">
                                @if ($conference->pdf != null)
                                    <a target="_blank" href="{{ route('conference-attachment-preview', $conference->pdf) }}"
                                        class="text-green-600 font-semibold"> <i class="fas fa-eye"></i>
                                        <span>Attachment is Available</span>
                                    </a>
                                @else
                                    <span class="text-green-500">No Attachment is available</span>
                                @endif
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Save Chnages
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
