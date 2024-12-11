@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $partnerWithUs->title }}</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto my-4 p-4">
            <p class="text-lg text-default-text text-justify my-2">{{ $partnerWithUs->description }}</p>
        </div>
    </section>
@endsection
