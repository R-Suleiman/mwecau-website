@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $teamMember->name }} Profile
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.team.index') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center">
        @if ($teamMember->profile_picture != null)
            <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-2xl shadow-purple-400"
                src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                alt="{{ $teamMember->name }} profile picture">
        @else
            <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-2xl"
                src="{{ asset('img/projects/Male_Avatar.jpg') }}" alt="{{ $teamMember->name }} profile picture">
        @endif
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.team.update', $teamMember->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <!-- Project -->
                    <div class="mb-4">
                        <label for="role" class="block text-sm mb-4 font-medium text-gray-700">
                            Is the member a top leader?
                        </label>
                        <select name="role" id="role"
                            class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">
                            <option value="{{ $teamMember->role }}">{{ $teamMember->role }}</option>
                            <option value="top">Top Leader</option>
                            <option value="member">Member</option>
                        </select>
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">
                        <!-- Initials -->
                        <div class="mb-4">
                            <label for="initials" class="block text-sm mb-4 font-medium text-gray-700">Initials</label>
                            <input type="text" id="initials" name="initials" value="{{ $teamMember->initials }}"
                                placeholder="eg. Dr"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('initials')" class="mt-2" />
                        </div>
                        <!-- name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm mb-4 font-medium text-gray-700">Fullname</label>
                            <input type="name" id="name" name="name" value="{{ $teamMember->name }}"
                                placeholder="Project Category"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Institute -->
                        <div class="mb-4">
                            <label for="institute" class="block text-sm mb-4 font-medium text-gray-700">Institute</label>
                            <input type="text" id="institute" name="institute" value="{{ $teamMember->institute }}"
                                placeholder="Institute of the tean Member"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('institute')" class="mt-2" />
                        </div>

                        <!-- Position -->
                        <div class="mb-4">
                            <label for="position" class="block text-sm mb-4 font-medium text-gray-700">Position</label>
                            <input type="text" id="position" name="position" value="{{ $teamMember->position }}"
                                placeholder="Institute of the tean Member"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('position')" class="mt-2" />
                        </div>

                    </div>

                    {{-- bio --}}
                    <div class="w-full">
                        <label for="description" class="block text-sm mb-4 font-medium text-gray-700">Bio</label>
                        <div class="flex items-center justify-center">
                            <div class="mb-4 max-w-[1300px] flex flex-col items-center justify-center">
                                <textarea name="bio" id="editor" cols="30" rows="10"
                                    class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ $teamMember->bio }}</textarea>
                                <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                            </div>
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
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
