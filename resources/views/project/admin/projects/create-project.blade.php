@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Registering New Project
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <div class="">

        </div>
        <a href="{{ route('admin.project.projects') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Project Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Erick Franklin"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Project Category -->
                        <div class="mb-4">
                            <label for="category" class="block text-sm mb-4 font-medium text-gray-700">Category</label>
                            <input type="category" id="category" name="category" value="{{ old('category') }}"
                                placeholder="Project Category"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <!-- Duration -->
                        <div class="mb-4">
                            <label for="duration" class="block text-sm mb-4 font-medium text-gray-700">duration</label>
                            <input type="text" id="duration" name="duration" value="{{ old('duration') }}"
                                placeholder="Project duration"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
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
                                placeholder="Project location"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <!-- PDF file -->
                        <div class="mb-4">
                            <label for="pdf" class="block text-sm mb-4 font-medium text-gray-700">Project
                                PDFn<strong>(if Applicable)</strong> </label>
                            <input type="file" id="pdf" name="pdf"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('pdf')" class="mt-2" />

                        </div>

                    </div>

                    {{-- project description --}}
                    <div class="w-full">
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Project
                                Description </label>
                            <textarea name="description" id="editor" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        {{-- project objectives --}}
                        <div class="mb-4">
                            <label for="project_objectives" class="block text-sm mb-4 font-medium text-gray-700">Project
                                Objectives </label>
                            <textarea name="project_objectives" id="editor1" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('project_objectives') }}</textarea>
                            <x-input-error :messages="$errors->get('project_objectives')" class="mt-2" />
                        </div>
                        {{-- project outputs --}}
                        <div class="mb-4">
                            <label for="project_outputs" class="block text-sm mb-4 font-medium text-gray-700">Project
                                Outputs </label>
                            <textarea name="project_outputs" id="editor2" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('project_outputs') }}</textarea>
                            <x-input-error :messages="$errors->get('project_outputs')" class="mt-2" />
                        </div>
                        <!-- thumbnail file -->
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm mb-4 font-medium text-gray-700">Project thumbnail
                                Image</label>
                            <input type="file" id="thumbnail" name="thumbnail"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Submit Project
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
