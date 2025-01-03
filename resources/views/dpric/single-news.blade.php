@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $news->title }}</h2>
            </div>
        </div>

        <div class="w-full md:w-2/3 mx-auto h-96">
            <img src="{{ $news->image ? '/storage/images/dpric/news/' . $news->image : '../../img/mwecau.png' }}" alt="" class="w-full h-full object-cover">
        </div>

        <div class="my-8 w-full md:w-max mx-auto ">
            <span class="bg-purple-900 text-white py-1 px-8 text-md md:text-lg rounded-lg md:mx-4">{{ $news->category }}</span>
            <span class="my-2 text-default-text text-md">{{ explode(' ', $news->created_at)[0] }}</span>
        </div>

        <div class="w-11/12 mx-auto my-8">
            <p class="my-4 text-lg text-default-text text-justify">{!! $news->description !!}</p>
        </div>
    </section>
@endsection
