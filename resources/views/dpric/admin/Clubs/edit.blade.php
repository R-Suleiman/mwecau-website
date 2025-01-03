@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">Club Management</h2>
            <form action="{{ route('admin.dpric-clubs.update', $club) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Club Details</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="name" class="text-default-text text-lg my-2">Club Name: </label>
                    <input type="text" name="name" value="{{ $club->name }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="description" class="text-default-text text-lg my-2">About Club: </label>
                    <textarea name="description" cols="30" rows="10"
                        class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $club->description }}
                    </textarea>
                    @error('description')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="department" class="text-default-text text-lg my-2">Club Department: </label>
                    <select name="department" value="{{ old('department') }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                        @foreach ($faculties as $faculty)
                            @foreach ($faculty['departments'] as $department)
                                <option value="{{ $department['dept_name'] }}" {{ $club->department == $department['dept_name'] ? 'selected' : '' }} class="text-default-text">
                                    {{ $department['dept_name'] }}</option>
                            @endforeach
                        @endforeach

                    </select>
                    @error('department')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="welcome_message" class="text-default-text text-lg my-2">Welcome Message: </label>
                    <textarea name="welcome_message" cols="30" rows="10"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $club->welcome_message }}
                    </textarea>
                    @error('welcome_message')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="mission" class="text-default-text text-lg my-2">CLub Mission: </label>
                    <textarea name="mission" cols="30" rows="10"
                        class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $club->mission }}
                    </textarea>
                    @error('mission')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="vision" class="text-default-text text-lg my-2">Club Vision: </label>
                    <textarea name="vision" cols="30" rows="10"
                        class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $club->vision }}
                    </textarea>
                    @error('vision')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="found_date" class="text-default-text text-lg my-2">Found Date: </label>
                    <input type="date" name="found_date" value="{{ $club->found_date }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('found_date')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="total_members" class="text-default-text text-lg my-2">Total Members: </label>
                    <input type="text" name="total_members" value="{{ $club->total_members }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('total_members')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="total_projects" class="text-default-text text-lg my-2">Total Projects: </label>
                    <input type="text" name="total_projects" value="{{ $club->total_projects }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('total_projects')
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
                        <img src="{{ asset('/storage/images/dpric/clubs/' . $club->primary_image) }}" alt="" class="w-full rounded-md object-cover h-full">
                    </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Update
                        Club</button>
                </div>
            </form>
        </div>
    </section>
@endsection
