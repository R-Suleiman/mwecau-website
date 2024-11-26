@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            New Home Slider item
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
                <form action="{{ route('admin.project.store-home-item') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="section_header" class="block text-sm mb-4 font-medium text-gray-700">Header of the
                                sliding item <strong>(Optional)</strong></label>
                            <input type="text" id="section_header" name="section_header"
                                value="{{ old('section_header') }}" placeholder="Vlir Project workshop"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('section_header')" class="mt-2" />
                        </div>
                        <!-- Project Category -->
                        <div class="mb-4">
                            <label for="section_sub_header" class="block text-sm mb-4 font-medium text-gray-700">Sub item
                                for sliding item <strong>(Optional)</strong></label>
                            <input type="section_sub_header" id="section_sub_header" name="section_sub_header"
                                value="{{ old('section_sub_header') }}"
                                placeholder="litle descirption of less than 3 lines about the image"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('section_sub_header')" class="mt-2" />
                        </div>
                    </div>

                    <div class="w-full">
                        <!-- image file -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm mb-4 font-medium text-gray-700">Sliding
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
                            Submit item
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
