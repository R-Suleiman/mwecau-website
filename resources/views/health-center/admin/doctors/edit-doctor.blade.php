@extends('layouts.health-center.admin.health-center-admin-layout')
@section('content')
    {{-- //parent div --}}
        <div class="text-end mt-10  mb-9">
        <a href="{{ route('health-center.doctors') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="text-gray-900 uppercase rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $doctor->name }}
        </h1>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('health-center.update-doctor', $doctor->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="w-full">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Doctor
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ $doctor->name }}"
                                placeholder="Service Name"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Department -->
                        <div class="mb-4">
                            <label for="department_id" class="block text-sm mb-4 font-medium text-gray-700">Department
                                Name</label>
                            <select name="department_id" id="department_id"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}"
                                        {{ old('department_id', $doctor->department_id ?? '') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
                        </div>

                        <!-- Carde -->
                        <div class="mb-4">
                            <label for="carde" class="block text-sm mb-4 font-medium text-gray-700">Doctor
                                Carde</label>
                            <input type="text" id="carde" name="carde" value="{{ $doctor->carde }}"
                                placeholder="Doctor Carde"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('carde')" class="mt-2" />
                        </div>

                        <!-- Education Level -->
                        <div class="mb-4">
                            <label for="education_level" class="block text-sm mb-4 font-medium text-gray-700">Education
                                level</label>
                            <input type="text" id="education_level" name="education_level"
                                value="{{ $doctor->education_level }}" placeholder="Doctor Education level"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('education_level')" class="mt-2" />
                        </div>

                        <!-- profile picture file -->
                        <div class="mb-4">
                            <label for="profile_picture" class="block text-sm mb-4 font-medium text-gray-700">Doctor
                                profile picture</label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />

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
