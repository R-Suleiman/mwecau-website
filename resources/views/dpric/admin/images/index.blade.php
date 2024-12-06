@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <div class="w-11/12 mx-auto flex flex-col md:flex-row justify-between items-center">
        <h2 class="oswald my-4 text-3xl text-blue-800">Department's Page Images</h2>
        <a href="{{ route('admin.dpric-images.create') }}"><button
                class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add
                Image</button></a>
    </div>
    <p class="text-red-700">note: Render images by titles section!!!</p>

    @if ($images->count() > 0)
        <div class="w-full flex p-4 flex-wrap items-center">
            @foreach ($images as $image)
                <div class="w-1/2 my-4 lg:w-1/4 shadow-sm shadow-orange-400 p-2">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('/storage/images/dpric/general/' . $image->image_path) }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                    </div>
                    <div class="mt-2 w-fit mx-auto">
                        <button class="py-1 px-2 text-white bg-green-700 hover:bg-green-900 mx-2 rounded-sm"><a
                                href="{{ route('admin.dpric-images.edit', $image) }}">Edit</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="my-4 p-4 w-full flex flex-col flex-wrap md:flex-row md:space-x-8">
            <div class="w-10/12 p-2 my-4 mx-auto border-l-4 border-blue-800 text-default-text bg-blue-100 text-lg">No Images
                Found</div>
        </div>
    @endif

@endsection
