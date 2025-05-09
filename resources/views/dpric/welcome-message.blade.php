@extends('layouts.dpric.dpric-layout')

@section('content')

{{-- Welcome Message --}}
<section>
    <div class="flex flex-col my-4 p-4 ">
        <div class="w-fit mx-auto">
            <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $about->title }}</h2>
            <div class="w-4/5 border border-purple-500 mx-auto"></div>
        </div>
    </div>

    <div class="w-full mb-8">
        <div class="w-full md:w-1/3 my-2 mx-auto">
            <div class="w-11/12">
                <div class="w-full overflow-hidden h-72 rounded-full">
                    <img src="{{ asset('/storage/images/dpric/staff/' . $director->photo) }}" alt=""
                        class="w-full h-72 object-cover rounded-full">
                </div>
                <div class="p-2 flex flex-col items-center text-center">
                    <h3 class="text-xl text-gray-800">
                        {{ $director->initial . ' ' . $director->first_name . ' ' . $director->other_name . ' ' . $director->last_name }}
                    </h3>
                    <span class="text-gray-700">{{ $director->position }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-11/12 mx-auto text-default-text text-lg">
        <p class="my-3">{{ $about->description }}</p>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="flex flex-col md:flex-row w-full md:w-11/12 mx-auto p-4 shadow-sm shadow-blue-700 my-8">
    <div class="w-full md:w-1/2 p-4 md:px-8 my-4 ">
        <div class="flex justify-between">
            <h3 class="text-xl lg:text-3xl text-default-head">{{ $mission->title }}</h3>
            <i class="fa fa-bullseye text-xl lg:text-3xl text-default-head"></i>
        </div>
        <p class="text-default-text my-4 text-justify">{{ $mission->description }}</p>
    </div>
    <div class="w-full md:w-1/2 p-4 md:px-8 my-4">
        <div class="flex justify-between">
            <h3 class="text-xl lg:text-3xl text-default-head">{{ $vision->title }}</h3>
            <i class="fa fa-eye text-xl lg:text-3xl text-default-head"></i>
        </div>
        <p class="text-default-text my-4 text-justify">{{ $vision->description }}</p>
    </div>
</section>

{{-- Core Value --}}

@endsection
