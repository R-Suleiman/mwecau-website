@extends('layouts.health-center.admin.health-center-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="ml-10 mt-10  mb-9">
        <a href="{{ route('health-center.healthservices') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div>

        <img src="{{ asset('storage/images/health-center/services-images/' . $service->thumbnail) }}" alt=""
            class="h-96 w-full object-cover">
    </div>

    <div class="text-gray-900 uppercase rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $service->name }}
        </h1>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('health-center.update-service', $service->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="w-full">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Service
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ $service->name }}"
                                placeholder="Erick Franklin"
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
                                        {{ old('department_id', $service->department_id ?? '') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
                        </div>

                        {{-- service description --}}
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Project
                                Description </label>
                            <textarea name="description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $service->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- thumbnail file -->
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm mb-4 font-medium text-gray-700">Department thumbnail
                                image</label>
                            <input type="file" id="thumbnail" name="thumbnail"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />

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
