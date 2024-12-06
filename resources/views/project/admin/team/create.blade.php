@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Team Member
        </h1>
        {{-- <h4 class="text-center mt-5 font-semibold tracking-widest">{{ $project->name }} Project</h4> --}}
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.projects') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.team.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    {{-- <input type="hidden" name="project_id" value="{{ $project->id }}"> --}}

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Initials -->
                        <div class="mb-4">
                            <label for="initials" class="block text-sm mb-4 font-medium text-gray-700">Initials</label>
                            <input type="text" id="initials" name="initials" value="{{ old('initials') }}"
                                placeholder="eg. Dr"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('initials')" class="mt-2" />
                        </div>
                        <!-- name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Fullname</label>
                            <input type="name" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Fullname"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        {{-- <!-- Project -->
                        <div class="mb-4">
                            <label for="department_id" class="block text-sm mb-4 font-medium text-gray-700">Project
                                Name</label>
                            <select name="department_id" id="department_id"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">
                                @foreach ($project as $project)
                                    <option value="{{ $project->id }}"
                                        {{ old('project_id') == $project->id ? 'selected' : '' }}>
                                        {{ $project->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div> --}}

                        <!-- Institute -->
                        <div class="mb-4">
                            <label for="institute" class="block text-sm mb-4 font-medium text-gray-700">Institute</label>
                            <input type="text" id="institute" name="institute" value="{{ old('institute') }}"
                                placeholder="Institute of the tean Member"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('institute')" class="mt-2" />
                        </div>

                        <!-- Position -->
                        <div class="mb-4">
                            <label for="position" class="block text-sm mb-4 font-medium text-gray-700">Position</label>
                            <input type="text" id="position" name="position" value="{{ old('position') }}"
                                placeholder="Institute of the tean Member"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('position')" class="mt-2" />
                        </div>
                    </div>

                    {{-- bio --}}
                    <div class="w-full">
                        <div class="mb-4">
                            <label for="bio" class="block text-sm mb-4 font-medium text-gray-700">
                                Bio </label>
                            <textarea name="bio" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('bio') }}</textarea>
                            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                        </div>

                        <!-- profile picture -->
                        <div class="mb-4">
                            <label for="profile_picture" class="block text-sm mb-4 font-medium text-gray-700">Profile
                                Picture</label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Add Member </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
