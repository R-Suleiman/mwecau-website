@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">News Management</h2>
            <form action="{{ route('admin.dpric-news.update', $news) }}" method="POST" class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit News</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">News Title: </label>
                    <input type="text" name="title"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700"
                        value="{{ $news->title }}">
                        @error('title')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">News Category: </label>
                    <select name="category" value="{{ $news->category }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Technology" {{ $news->category == 'Technology' ? 'selected' : '' }} class="text-default-text">Technology</option>
                        <option value="Sports" {{ $news->category == 'Sports' ? 'selected' : '' }} class="text-default-text">Sports</option>
                    </select>
                    @error('category')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Description: </label>
                    <textarea name="description" cols="30" rows="10"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $news->description }}
                    </textarea>
                    @error('description')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Image: </label>
                    <input type="file" name="image"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        @error('image')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Update
                        News</button>
                </div>
            </form>
        </div>
    </section>
@endsection
