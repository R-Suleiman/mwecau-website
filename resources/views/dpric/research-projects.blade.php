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

    {{-- intro --}}
    <section class="w-full lg:w-11/12 mx-auto flex flex-col lg:flex-row md:p-4 my-8 justify-between">
        <div class="w-full lg:w-1/2 p-8 shadow-md shadow-default-head rounded-md">
            <h3 class="text-default-head text-3xl my-4">Engage with Transformative Research Projects</h3>
            <p class="text-default-text text-lg text-justify my-2">Our Research Projects tackle pressing global challenges
                through rigorous inquiry and creative problem-solving. Led by dedicated researchers and supported by
                state-of-the-art resources, these projects aim to generate impactful solutions and advance knowledge in
                meaningful ways. Be part of research that drives change!</p>
        </div>
        <div class="w-full lg:w-1/2 p-4">
            <div class="flex flex-wrap gap-2 mx-auto">
                <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="" class="w-2/6">
                <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="" class="w-3/6">
                <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" alt="" class="w-3/6">
                <img src="{{ asset('img/campus-life/spirtual4.jpg') }}" alt="" class="w-2/6">
            </div>
        </div>
        {{-- <div class="w-full lg:w-1/2 p-4 relative hidden lg:block">
            <i
                class="fa fa-microscope absolute right-56 bottom-16 text-8xl bg-default-head text-white p-2 rounded-lg rotate-10"></i>
            <i class="fa fa-filter absolute right-8 bottom-8 text-7xl bg-default-head text-white p-2 rounded-lg"></i>
            <i class="fa fa-flask absolute left-44 top-20 text-7xl  text-default-head p-2 rounded-lg"></i>
            <i
                class="fa fa-seedling absolute left-20 bottom-5 text-4xl  text-default-head p-2 rounded-lg rotate-15"></i>
            <i class="fa fa-mortar-pestle absolute right-10 top-5 text-7xl text-default-head p-2 rounded-lg"></i>
            <i
                class="fa fa-temperature-high absolute left-10 top-5 text-6xl bg-default-head text-white p-2 rounded-lg rotate-10"></i>
        </div> --}}
    </section>

    {{-- research list --}}
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Our Research Projects/Programmes</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
            <div class="w-full lg:w-1/3 my-4">
                <a href="#">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="px-6 py-4 flex flex-col rounded-br-full h-full bg-white">
                            <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Technology</span>
                            <div class="mt-4 flex flex-col">
                                <h3 class="text-xl text-default-head my-1">Title of the Project</h3>
                                <span class="text-default-text mb-1 text-lg">Duration: 5 years</span>
                                <span class="text-default-text mb-1 text-lg">Location: MWECAU</span>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-microscope text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="#">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="px-6 py-4 flex flex-col rounded-br-full h-full bg-white">
                            <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Health</span>
                            <div class="mt-4 flex flex-col">
                                <h3 class="text-xl text-default-head my-1">Title of the Project</h3>
                                <span class="text-default-text mb-1 text-lg">Duration: 5 years</span>
                                <span class="text-default-text mb-1 text-lg">Location: MWECAU</span>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-microscope text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="#">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="px-6 py-4 flex flex-col rounded-br-full h-full bg-white">
                            <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Agriculture</span>
                            <div class="mt-4 flex flex-col">
                                <h3 class="text-xl text-default-head my-1">Title of the Project</h3>
                                <span class="text-default-text mb-1 text-lg">Duration: 5 years</span>
                                <span class="text-default-text mb-1 text-lg">Location: MWECAU</span>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-microscope text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
