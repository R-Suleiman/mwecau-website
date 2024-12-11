@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <form action="{{ route('admin.dpric-images.store') }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Add New Image</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="page_name" class="text-default-text text-lg my-2">Image Page: </label>
                    <select name="page_name" value="{{ old('page_name') }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Home" class="text-default-text">Home</option>
                        <option value="admissions" class="text-default-text">admissions</option>
                        <option value="Research Projects" class="text-default-text">Research Projects</option>
                        <option value="Research Opportunities" class="text-default-text">Research Opportunities</option>
                        <option value="Innovations hub" class="text-default-text">Innovations hub</option>
                    </select>
                    @error('page_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="page_section" class="text-default-text text-lg my-2">Page Section: </label>
                    <select name="page_section" value="{{ old('page_section') }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Banner" class="text-default-text">Banner</option>
                        <option value="Welcome section" class="text-default-text">Welcome section</option>
                        <option value="Other" class="text-default-text">Other</option>
                    </select>
                    @error('page_section')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="image_path" class="text-default-text text-lg my-2">Image: </label>
                    <input type="file" name="image_path"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('image_path')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Add
                        Image</button>
                </div>
            </form>
        </div>
    </section>
@endsection
