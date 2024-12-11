@extends('layouts.health-center.admin.health-center-admin-layout')
@section('content')
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('health-center.testimonials') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('health-center.update-testimonial', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="w-full">
                        <!-- email -->
                        <div class="mb-4">
                            <label for="testifier_name" class="block text-sm mb-4 font-medium text-gray-700">Testifier
                                Name</label>
                            <input type="text" id="testifier_name" name="testifier_name"
                                value="{{ $testimonial->testifier_name }}" placeholder="eg. John Temu"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('testifier_name')" class="mt-2" />
                        </div>

                        {{-- description about the testimonial --}}
                        <div class="mb-4">
                            <label for="testimonial_description" class="block text-sm mb-4 font-medium text-gray-700">
                                Description </label>
                            <textarea name="testimonial_description" id="" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $testimonial->testimonial_description }}</textarea>
                            <x-input-error :messages="$errors->get('testimonial_description')" class="mt-2" />
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
