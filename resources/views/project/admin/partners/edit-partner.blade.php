@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Edit Partner Details
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    {{-- <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.projects') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div> --}}

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.update-project-partner', $partner->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Partner Name</label>
                        <input type="text" id="name" name="name" value="{{ $partner->name }}"
                            placeholder="University of Kisubi"
                            class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>


                    <!-- Partnet external link -->
                    <div class="mb-4">
                        <label for="link" class="block text-sm mb-4 font-medium text-gray-700">Partner External
                            Link</label>
                        <input type="text" id="link" name="link" value="{{ $partner->link }}"
                            placeholder="University of Kisubi"
                            class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                    </div>

                    <!-- Partnet logo link -->
                    <div class="mb-4">
                        <label for="partner_logo" class="block text-sm mb-4 font-medium text-gray-700">Project partner logo
                            <strong>Change logo</strong></label>
                        <input type="file" id="partner_logo" name="partner_logo" value="{{ old('partner_logo') }}"
                            placeholder="University of Kisubi"
                            class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                        <x-input-error :messages="$errors->get('partner_logo')" class="mt-2" />
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
