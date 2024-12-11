@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">Contents for {{ $page_name }} page</h2>

            <div class="w-full">
                <div class="w-full my-4 border-b border-gray-300">
                    <h3 class="text-xl text-blue-800">{{ $pageSingleContent->title }}</h3>
                    <p class="my-4 text-lg text-default-text text-justify">{{ $pageSingleContent->description }}</p>
                    <div class="w-fit mx-auto my-4 flex">
                        <button class="bg-green-700 hover:bg-green-800 text-white py-1 px-6 rounded-md my-2 mx-4"><a
                                href="{{ route('admin.contents.edit-content', ['page_name' => $page_name, 'content_title' => $pageSingleContent->title]) }}">Edit</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
