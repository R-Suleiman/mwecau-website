@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $unit->title }}</h2>
            </div>
        </div>

        <div class="w-11/12 mx-auto my-8">
            <p class="my-4 text-lg text-default-text text-justify">{{ $unit->description }}</p>
        </div>
    </section>
@endsection
