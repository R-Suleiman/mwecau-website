@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $joiningInstruction->title }}</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        {{-- REMOVE h-screen !!!!!!! --}}
<div class="h-screen w-11/12 mx-auto">
    <p class="my-4 text-lg text-default-text text-justify">{{ $joiningInstruction->description }}</p>
</div>
    </section>
@endsection
