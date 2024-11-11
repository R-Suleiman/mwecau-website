@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <div class="">

        </div>
        <a href="{{ route('admin.project.testimonial.testimonials') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.testimonial.update-testimonial', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Initials -->
                        <div class="mb-4">
                            <label for="testifier_initials" class="block text-sm mb-4 font-medium text-gray-700">Testifier
                                Initials</label>
                            <input type="text" id="testifier_testifier_initials" name="testifier_initials"
                                value="{{ $testimonial->testifier_initials }}" placeholder="eg. Dr"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('testifier_initials')" class="mt-2" />
                        </div>
                        <!-- name -->
                        <div class="mb-4">
                            <label for="testifier_name"
                                class="block text-sm mb-4 font-medium text-gray-700">Fullname</label>
                            <input type="text" id="testifier_name" name="testifier_name"
                                value="{{ $testimonial->testifier_name }}" placeholder="eg. Godfrey Erick"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('testifier_name')" class="mt-2" />
                        </div>

                    </div>

                    {{-- bio --}}
                    <div class="w-full">
                        <div class="mb-4">
                            <label for="testimonial_description" class="block text-sm mb-4 font-medium text-gray-700">
                                Bio </label>
                            <textarea name="testimonial_description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $testimonial->testimonial_description }}</textarea>
                            <x-input-error :messages="$errors->get('testimonial_description')" class="mt-2" />
                        </div>
                        <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">

                            <!-- Occupation -->
                            <div class="mb-4">
                                <label for="testifier_occupation"
                                    class="block text-sm mb-4 font-medium text-gray-700">Occupation</label>
                                <input type="text" id="testifier_occupation" name="testifier_occupation"
                                    value="{{ $testimonial->testifier_occupation }}"
                                    placeholder="Occupation of the testifier"
                                    class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                                <x-input-error :messages="$errors->get('testifier_occupation')" class="mt-2" />
                            </div>
                            <!-- profile picture -->
                            <div class="mb-4">
                                <label for="testifier_profile_picture"
                                    class="block text-sm mb-4 font-medium text-gray-700">Testifier Profile
                                    Picture</label>
                                <input type="file" id="testifier_profile_picture" name="testifier_profile_picture"
                                    class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                                <div class="mt-6">
                                    @if ($testimonial->testifier_profile_picture != null)
                                        <span class="text-green-600 font-semibold">This testifier has a profile
                                            picture</span>
                                    @else
                                        <span class="text-red-600 font-semibold">This testifier has no profile
                                            picture</span>
                                    @endif
                                </div>
                                <x-input-error :messages="$errors->get('testifier_profile_picture')" class="mt-2" />

                            </div>
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
