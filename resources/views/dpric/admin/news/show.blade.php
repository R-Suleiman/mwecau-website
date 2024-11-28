@extends('layouts.dpric.dpric-admin-layout')

@section('content')

<section class="w-11/12 mx-auto">
    <div class="flex flex-col my-4 p-4 ">
        <div class="w-fit mx-auto">
            <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $news->title }}</h2>
        </div>
    </div>

    <div class="w-full md:w-2/3 mx-auto h-96">
        <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>

    <div class="my-8 w-full md:w-2/3 mx-auto">
        <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">{{ $news->category }}</span>
        <span class="my-2 text-default-text text-md">{{ $news->created_at }}</span>
    </div>

    <div class="w-11/12 mx-auto my-8">
        <p class="my-4 text-lg text-default-text text-justify">
            {{ $news->description }}
        </p>
    </div>

    <div class="w-fit mx-auto my-4">
        <button class="bg-green-700 hover:bg-green-800 text-white py-2 px-8 rounded-md my-2"><a href="{{ route('admin.dpric-news.edit', $news) }}">Edit</a></button>
    </div>
</section>
@endsection
