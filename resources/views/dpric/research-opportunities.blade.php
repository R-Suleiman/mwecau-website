@extends('layouts.dpric.dpric-layout')

@section('content')
<section>
    <div class="w-full md:w-11/12 mx-auto my-4 p-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            <div class="w-full md:w-11/12 mx-auto">
                <img src="{{ asset('img/students3.jpg') }}" alt="">
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-default-head text-3xl my-4">{{ $welcomeMessage->title }}</h2>
            <p class="text-lg text-default-text text-justify my-2">{{ $welcomeMessage->description }}</p>
        </div>
    </div>

    <div class="flex flex-col my-4 p-4 ">
        <div class="w-fit mx-auto">
            <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $opportunitiesContent->title }}</h2>
            <div class="w-4/5 border border-purple-500 mx-auto"></div>
        </div>
    </div>
    <div class="w-11/12 mx-auto my-4x">
        <p class="text-lg text-default-text text-justify my-2">{{ $opportunitiesContent->description }}</p>
    </div>
</section>

@endsection
