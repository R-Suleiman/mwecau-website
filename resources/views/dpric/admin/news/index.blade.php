@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-between items-center">
                <h2 class="oswald my-4 text-3xl text-blue-800">News Management</h2>
                <a href="{{ route('admin.dpric-news.create') }}"><button class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add News</button></a>
            </div>
            <div class="w-full">
                @foreach ($allNews as $news )
                <div class="flex w-full my-2 p-2 rounded-md border border-blue-200 h-32">
                    <div class="w-2/12 hidden md:block h-full"><a href="#"><img src="{{ $news->image ? asset('/images/dpric/news/' . $news->image) : '../../img/mwecau.png' }}" alt=""
                            class="w-full rounded-md object-cover h-full"></a>
                    </div>
                    <div class="w-10/12 md:w-9/12 px-2">
                        <h3 class="text-xl text-default-text mb-2 hover:text-blue-700"><a href="{{ route('admin.dpric-news.show', $news) }}">{{ $news->title }}</a></h3>
                        <span class="bg-blue-200 text-gray-900 p-1 my-2 rounded-md">{{ $news->category }}</span>
                    </div>
                    <div class="w-2/12 md:w-1/12 flex flex-col">
                        <button class="bg-green-700 hover:bg-green-800 text-white p-1 rounded-md my-2"><a href="{{ route('admin.dpric-news.edit', $news) }}">Edit</a></button>
                        <button class="bg-orange-700 hover:bg-orange-800 text-white p-1 rounded-md my-2">Delete</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
