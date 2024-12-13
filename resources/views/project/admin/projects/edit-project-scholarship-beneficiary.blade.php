@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            <span class="text-gray-400">scholarship beneficiary</span> {{ $beneficiary->beneficiary_name }}
        </h1>
    </div>

    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.scholarship.scholarships') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form
                    action="{{ route('admin.project.scholarship.update-project-scholarship-beneficiary', $beneficiary->id) }}"
                    method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="project_id" value="{{ $beneficiary->project_id }}">
                    <input type="hidden" name="scholarship_id" value="{{ $beneficiary->scholarship_id }}"></input>

                    <div class="w-full">
                        <!-- Beneficiary Name -->
                        <div class="mb-4">
                            <label for="beneficiary_name" class="block text-sm mb-4 font-medium text-gray-700">Beneficiary
                                Name</label>
                            <input type="text" id="beneficiary_name" name="beneficiary_name"
                                value="{{ $beneficiary->beneficiary_name }}" placeholder="Godfrey Erick"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('beneficiary_name')" class="mt-2" />
                        </div>

                        <!-- Beneficiary research title Category -->
                        <div class="mb-4">
                            <label for="beneficiary_research_title"
                                class="block text-sm mb-4 font-medium text-gray-700">Beneficiary Research title</label>
                            <input type="text" id="beneficiary_research_title" name="beneficiary_research_title"
                                value="{{ $beneficiary->beneficiary_research_title }}"
                                placeholder="Advancements in Renewable Energy Solutions for Sustainable Development"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('beneficiary_research_title')" class="mt-2" />
                        </div>

                        {{-- Beneficiary research title description --}}
                        <div class="mb-4">
                            <label for="beneficiary_research_title"
                                class="block text-sm mb-4 font-medium text-gray-700">Project Description
                                <strong>(Optional)</strong> </label>
                            <textarea name="beneficiary_research_title" id="editor" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $beneficiary->beneficiary_research_title }}</textarea>
                            <x-input-error :messages="$errors->get('beneficiary_research_title')" class="mt-2" />
                        </div>

                        <!-- Beneficiary Profile Photo-->
                        <div class="mb-4">
                            <label for="beneficiary_photo" class="block text-sm mb-4 font-medium text-gray-700">Beneficiary
                                Profile Photo <strong>(Optional)</strong> </label>
                            <input type="file" id="beneficiary_photo" name="beneficiary_photo"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('beneficiary_photo')" class="mt-2" />
                        </div>


                        <!-- Submit Button -->
                        <div class="mt-6 max-w-[180px]">
                            <button type="submit"
                                class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </div>
                </form>
            </div>
        </div>

    </div>
    </div>
@endsection
