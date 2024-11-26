@extends('layouts.project.admin.project-admin-layout')
@section('content')
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.index') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.update-page-section', $content->id) }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!--section header Name -->
                        <div class="mb-4">
                            <label for="section_header" class="block text-sm mb-4 font-medium text-gray-700">Section
                                header</label>
                            <input type="text" id="section_header" name="section_header"
                                value="{{ $content->section_header }}"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('section_header')" class="mt-2" />
                        </div>
                        <!--section sub header -->
                        <div class="mb-4">
                            <label for="section_sub_header" class="block text-sm mb-4 font-medium text-gray-700">Section Sub
                                header</label>
                            <input type="text" id="section_sub_header" name="section_sub_header"
                                value="{{ $content->section_sub_header }}"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('section_sub_header')" class="mt-2" />
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Section
                                Description </label>
                            <textarea name="section_description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $content->section_description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <!-- image file -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm mb-4 font-medium text-gray-700">section Image <strong
                                    class="text-red-600">(Only applies to slider section)</strong>
                                Image</label>
                            <input type="file" id="image" name="image"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
