@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">{{ $club_name }} Gallery</h2>
            <form action="{{ route('admin.club-gallery.store', ['club_name' => $club_name]) }}" method="POST" enctype="multipart/form-data"
                class="w-full">
                @csrf
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Add Gallery Images</h3>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="images" class="text-default-text text-lg my-2">Image (You can select multiple images): </label>
                    <input type="file" name="images[]" multiple
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('images.*')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Upload to gallery</button>
                </div>
            </form>
        </div>
    </section>
@endsection
