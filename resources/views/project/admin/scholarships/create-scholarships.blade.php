@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Register New Scholarship
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
                <form action="{{ route('admin.project.scholarship.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="w-full">
                        <!-- Project -->
                        <div class="mb-4">
                            <label for="project_id" class="block text-sm mb-4 font-medium text-gray-700">Select Project
                            </label>
                            <select name="project_id" id="project_id"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            @if ($projects)
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}"
                                        {{ old('project_id') == $project->id ? 'selected' : '' }}>
                                        {{ $project->name }}
                                    </option>
                                @endforeach
                            @endif

                            </select>
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div>
                    </div>
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Scholarship
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="eg. MWECAU 2025 full funded scholarships"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Offerd By -->
                        <div class="mb-4">
                            <label for="offerd_by" class="block text-sm mb-4 font-medium text-gray-700">Offerd By</label>
                            <input type="offerd_by" id="offerd_by" name="offerd_by" value="{{ old('offerd_by') }}"
                                placeholder="Fill in who offers the Scholarship"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('offerd_by')" class="mt-2" />
                        </div>

                        <!-- County -->
                        <div class="mb-4">
                            <label for="country" class="block text-sm mb-4 font-medium text-gray-700">Country</label>
                            <input type="text" id="country" name="country" value="{{ old('country') }}"
                                placeholder="Country"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>

                        <!-- Duration -->
                        <div class="mb-4">
                            <label for="duration" class="block text-sm mb-4 font-medium text-gray-700">Duration</label>
                            <input type="text" id="duration" name="duration" value="{{ old('duration') }}"
                                placeholder="Duration of scholarship"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        <!--Start  Date -->
                        <div class="mb-4">
                            <label for="start_date" class="block text-sm mb-4 font-medium text-gray-700">Start Date</label>
                            <input type="date" id="start_date" value="{{ old('start_date') }}" name="start_date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <!--End  Date -->
                        <div class="mb-4">
                            <label for="end_date" class="block text-sm mb-4 font-medium text-gray-700">End Date</label>
                            <input type="date" id="end_date" value="{{ old('end_date') }}" name="end_date"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                    </div>

                    <div class="w-full">
                        <div class="mb-4">
                            <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Description about
                                the Scholarship </label>
                            <textarea name="description" id="editor" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <!-- PDF file -->
                        <div class="mb-4">
                            <label for="pdf" class="block text-sm mb-4 font-medium text-gray-700">Scholarship
                                attachment<strong class="text-green-600"> (if Applicable)</strong> </label>
                            <input type="file" id="pdf" name="pdf"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('pdf')" class="mt-2" />

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Submit Scholarship
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
