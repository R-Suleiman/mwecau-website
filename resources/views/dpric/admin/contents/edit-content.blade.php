@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">Contents Management</h2>
            <form action="{{ route('admin.contents.update-content', ['page_name' => $page_name, 'content_title' => $content->title]) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Content</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Content Title: </label>
                    <input type="text" name="title"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700"
                        value="{{ $content->title }}">
                        @error('title')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Description: </label>
                    <textarea name="description" cols="30" rows="10"
                        class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $content->description }}
                    </textarea>
                    @error('description')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                </div>

                <div class="hidden flex-col w-full md:w-10/12 my-4">
                    <label for="page" class="text-default-text text-lg my-2">page: </label>
                    <input type="text" name="page"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700"
                        value="{{ $content->page }}">
                        @error('page')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="hidden flex-col w-full md:w-10/12 my-4">
                    <label for="section" class="text-default-text text-lg my-2">page: </label>
                    <input type="text" name="section"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700"
                        value="{{ $content->section }}">
                        @error('section')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Update
                        Content</button>
                </div>
            </form>
        </div>
    </section>
@endsection
