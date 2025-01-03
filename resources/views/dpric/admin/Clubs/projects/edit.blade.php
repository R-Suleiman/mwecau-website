@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">{{ $club_name }} Projects</h2>
            <form action="{{ route('admin.projects.update', ['club_name' => $club_name, 'project' => $project]) }}" method="POST" enctype="multipart/form-data"
                class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Project</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="project_title" class="text-default-text text-lg my-2">Project title: </label>
                    <input type="text" name="project_title" value="{{ $project->project_title }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('project_title')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="description" class="text-default-text text-lg my-2">About Project: </label>
                    <textarea name="description" cols="30" rows="10"
                        class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $project->description }}
                    </textarea>
                    @error('description')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="category" class="text-default-text text-lg my-2">Project Category: </label>
                    <select name="category"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="Education" {{ $project->category == 'Education' ? 'selected' : '' }} class="text-default-text">Education</option>
                        <option value="Health and Medicine" {{ $project->category == 'Health and Medicine' ? 'selected' : '' }} class="text-default-text">Health and Medicine</option>
                        <option value="Technology" {{ $project->category == 'Technology' ? 'selected' : '' }} class="text-default-text">Technology</option>
                        <option value="Agriculture" {{ $project->category == 'Agriculture' ? 'selected' : '' }} class="text-default-text">Agriculture</option>
                    </select>
                    @error('category')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="duration" class="text-default-text text-lg my-2">Project Duration: </label>
                    <input type="text" name="duration" value="{{ $project->duration }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('duration')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="primary_image" class="text-default-text text-lg my-2">Primary Image: </label>
                    <input type="file" name="primary_image"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('primary_image')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror

                    <div class="w-full md:w-2/4 mx-auto h-64">
                        <img src="{{ asset('/storage/images/dpric/clubs/projects/' . $project->primary_image) }}" alt="" class="w-full rounded-md object-cover h-full">
                    </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Save Project</button>
                </div>
            </form>
        </div>
    </section>
@endsection
