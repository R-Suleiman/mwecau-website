@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Postgraduate Student Forms</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        {{-- REMOVE h-screen !!!!!!! --}}
        <div class="w-full md:w-10/12 mx-auto my-4 h-screen">
            <div><a href="#" class="text-lg text-default-head hover:underline"><i class="fa fa-download"></i> <span class="ml-2">This is a form name</span></a></div>
            <div><a href="#" class="text-lg text-default-head hover:underline"><i class="fa fa-download"></i> <span class="ml-2">This is a form name</span></a></div>
            <div><a href="#" class="text-lg text-default-head hover:underline"><i class="fa fa-download"></i> <span class="ml-2">This is a form name</span></a></div>
        </div>
    </section>
@endsection
