@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            New Project Publication
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="ml-5 mt-10  mb-9">
        <a href="{{ route('admin.project.publication.index') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">

            {{-- admin messages --}}
            <x-project-admin-messages />

            <div class="w-full">
                <form action="{{ route('admin.project.publication.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="w-full">
                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm mb-4 font-medium text-gray-700">Title of the
                                Publication</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                placeholder="eg. MWECAU 2025 full funded scholarships"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <!-- author By -->
                        <div class="mb-4">
                            <label for="author" class="block text-sm mb-4 font-medium text-gray-700">Author</label>
                            <input type="text" id="author" name="author" value="{{ old('author') }}"
                                placeholder="Fill in who offers the Scholarship"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('author')" class="mt-2" />
                        </div>

                        {{-- about the publication --}}
                        <div class="mb-4">
                            <label for="about_publication" class="block text-sm mb-4 font-medium text-gray-700">Write
                                shortly about the publication </label>
                            <textarea name="about_publication" id="editor" cols="30" rows="10"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out">{{ old('about_publication') }}</textarea>
                            <x-input-error :messages="$errors->get('about_publication')" class="mt-2" />
                        </div>

                        <!-- Year -->
                        <div class="mb-4">
                            <label for="year" class="block text-sm mb-4 font-medium text-gray-700">Year of
                                Publication</label>
                            <input type="text" id="year" name="year" value="{{ old('year') }}"
                                placeholder="eg. MWECAU 2025 full funded scholarships"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>

                        <!-- document1 -->
                        {{-- <div class="mb-4">
                            <label for="document1" class="block text-sm mb-4 font-medium text-gray-700">Publication Document
                                1<strong class="text-green-600"> (Optional)</strong> </label>
                            <input type="file" id="document1" name="document1"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('document1')" class="mt-2" />
                        </div> --}}

                        <!-- link -->
                        <div class="mb-4">
                            <label for="link" class="block text-sm mb-4 font-medium text-gray-700">Publication
                                Link</label>
                            <input type="text" id="link" name="link"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out" value="{{ old('link') }}" />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-6 max-w-[180px]">
                        <button type="submit"
                            class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                            Submit Publication
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
