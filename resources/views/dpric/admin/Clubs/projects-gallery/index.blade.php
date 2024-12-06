@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full py-8">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-between items-center">
                <h2 class="oswald my-4 text-3xl text-blue-800">{{ $project_name }} Photo Gallery</h2>
                <a href="{{ route('admin.project-gallery.create', ['club_name' => $club_name, 'project_name' => $project_name]) }}"><button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add Images
                        </button></a>
            </div>
        </div>

        @if ($gallery->count() > 0)
            <div class="w-full flex p-4 flex-wrap items-center">
                @foreach ($gallery as $image)
                    <div class="w-1/2 my-4 lg:w-1/4">
                        <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                            <img src="{{ asset('/storage/images/dpric/clubs/projects-gallery/' . $image->image) }}" alt="gallery photo"
                                class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                            <div class="overlay hidden group-hover:block h-52"></div>
                        </div>

                        <div class="mt-2 w-fit mx-auto mb-2 flex">
                            <form action="{{ route('admin.project-gallery.destroy', ['project_gallery' => $image, 'club_name' => $club_name, 'project_name' => $project_name]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="py-1 px-2 text-white bg-orange-700 hover:bg-orange-900 mx-2 rounded-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
        <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Images found!</div>
        @endif

    </section>
@endsection
