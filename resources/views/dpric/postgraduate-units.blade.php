@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Postgraduate Units</h2>
            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row flex-wrap">
            @foreach ($units as $unit)
            <div class="w-full md:w-1/3 lg:w-1/4 my-4">
                <div class="lg:w-11/12 mx-auto flex flex-col shadow-sm shadow-blue-500 rounded-md">
                    <div class="w-full h-48 overflow-hidden">
                        <img src="{{ $unit->image ? asset('/storage/images/dpric/units/' . $unit->image) : '../../img/mwecau.png' }}" class="w-full rounded-lg object-cover object-center" alt="">
                    </div>
                    <div class="p-4">
                        <a href="{{ route('dpric.postgraduate-unit', $unit->title) }}">
                            <h4 class="text-default-head hover:text-blue-950 text-lg my-2">{{ $unit->title }}<h4>
                        </a>
                        <p class="text-default-text">{{ Str::words($unit->description, 30, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
