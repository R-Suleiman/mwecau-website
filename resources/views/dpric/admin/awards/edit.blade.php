@extends('layouts.dpric.dpric-admin-layout')

@section('content')

    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <form action="{{ route('admin.dpric-awards.update', $award) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
            <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Award</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Award Name: </label>
                    <input type="text" name="title" value="{{ $award->title }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('title')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Date Awarded: </label>
                    <input type="date" name="date" value="{{ $award->date }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('date')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Description: </label>
                    <textarea name="description" cols="30" rows="10" class="editor border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        {{ $award->description }}
                    </textarea>
                    @error('description')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Image: </label>
                    <input type="file" name="image" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('image')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror

                <div class="w-full md:w-2/4 mx-auto h-64">
                    <img src="{{ $award->image ? asset('/storage/images/dpric/awards/' . $award->image) : '../../img/mwecau.png' }}" alt="" class="w-full rounded-md object-cover h-full">
                </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file" class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Update Award</button>
                </div>
            </form>
        </div>
    </section>
@endsection
