@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">Contents for {{ $page_name }} page</h2>

            <div class="w-full">
                @foreach ($pageContents as $content)
                <div class="w-full my-4 border-b border-gray-300">
                    <h3 class="text-xl text-blue-800">{{ $content->title }}</h3>
                    <p class="my-4 text-lg text-default-text text-justify">{{ Str::words($content->description, 40, '...') }}</p>
                    <div class="w-fit mx-auto my-4 flex">
                        <button class="bg-green-700 hover:bg-green-800 text-white py-1 px-6 rounded-md my-2 mx-4"><a
                                href="{{ route('admin.contents.get-content', ['page_name' => $page_name, 'content_title' => $content->title]) }}">VIew</a></button>
                        <button class="bg-orange-700 hover:bg-orange-800 text-white py-1 px-6 rounded-md my-2 mx-4"><a
                                href="{{ route('admin.contents.edit-content', ['page_name' => $page_name, 'content_title' => $content->title]) }}">Edit</a></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
