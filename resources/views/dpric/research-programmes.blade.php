@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    {{-- <h1 class="uppercase text-2xl md:text-4xl">Directorate of Postgraduate studies, Research, Innovations and
                        Consultancy
                        (DPRIC) </h1> --}}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Research Programmes</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full lg:w-11/12 mx-auto flex flex-col lg:flex-row justify-between">
            <div class="w-full lg:w-1/2 p-8">
                <h2 class="text-default-head text-3xl my-4">Unlock New Frontiers with Our Research Programmes</h2>
                <p class="text-default-text text-lg text-justify my-2">Our Research Programmes are designed to foster groundbreaking discoveries and deep academic inquiry. With access to cutting-edge resources and expert guidance, these programs empower you to explore innovative solutions, contribute to global knowledge, and lead research that shapes tomorrow.</p>
            </div>
            <div class="w-full lg:w-1/2 p-4 flex flex-wrap gap-2">
                <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="" class="w-2/6">
                <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="" class="w-3/6">
                <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" alt="" class="w-3/6">
                <img src="{{ asset('img/campus-life/spirtual4.jpg') }}" alt="" class="w-2/6">
            </div>
        </div>
    </section>
@endsection
