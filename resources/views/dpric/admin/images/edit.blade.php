@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <form action="{{ route('admin.dpric-images.update', $image) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Image</h3>
                <div class="flex-col w-full md:w-10/12 my-4 hidden">
                    <label for="page_name" class="text-default-text text-lg my-2">Image Page: </label>
                    <select name="page_name" value="{{ $image->page_name }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Home" {{ $image->page_name == 'Home' ? 'selected' : '' }} class="text-default-text">Home</option>
                        <option value="admissions" {{ $image->page_name == 'admissions' ? 'selected' : '' }} class="text-default-text">admissions</option>
                        <option value="Research Projects" {{ $image->page_name == 'Research Projects' ? 'selected' : '' }} class="text-default-text">Research Projects</option>
                        <option value="Research Opportunities" {{ $image->page_name == 'Research Opportunities' ? 'selected' : '' }} class="text-default-text">Research Opportunities</option>
                        <option value="Innovations hub" {{ $image->page_name == 'Innovations hub' ? 'selected' : '' }} class="text-default-text">Innovations hub</option>
                    </select>
                    @error('page_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex-col w-full md:w-10/12 my-4 hidden">
                    <label for="page_section" class="text-default-text text-lg my-2">Page Section: </label>
                    <select name="page_section" value="{{ $image->page_section }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Banner" {{ $image->page_section == 'Banner' ? 'selected' : '' }} class="text-default-text">Banner</option>
                        <option value="Welcome section" {{ $image->page_section == 'Welcome section' ? 'selected' : '' }} class="text-default-text">Welcome section</option>
                        <option value="Other" {{ $image->page_section == 'Other' ? 'selected' : '' }} class="text-default-text">Other</option>
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

                    <div class="w-full md:w-2/4 mx-auto h-64">
                        <img src="{{ asset('/storage/images/dpric/general/' . $image->image_path) }}" alt="" class="w-full rounded-md object-cover h-full">
                    </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">save</button>
                </div>
            </form>
        </div>
    </section>
@endsection
