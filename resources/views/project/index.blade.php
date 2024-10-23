@extends('layouts.project.project-layout')
@section('content')
    {{-- Homepage projects --}}
    <section>
        <div class="container mx-auto mt-10">
            <div class="lg:px-32 px-16 gap-10 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <h1 class="col-span-full text-center font-semibold text-xl md:text-2xl lg:text-3xl mb-8">Projects under VLIR
                </h1>
                <div class="border border-gray-400 rounded-2xl p-7 shadow-xl shadow-purple-200">
                    <div class="flex justify-center items-center mb-6">
                        <i class="fa fa-cloud text-pink-500 text-2xl font-semibold"></i>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <p class="text-justify">
                            <strong class="uppercase">Bega Kwa Bega Project </strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur pariatur nostrum tenetur
                            minima id expedita doloremque dicta at praesentium repellendus!
                        </p>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <a href="#"
                            class="px-4 py-2 transition ease-in-out duration-150 text-xs uppercase text-white font-semibold bg-purple-600 hover:bg-purple-500 border border-transparent rounded-md">Read
                            More</a>
                    </div>
                </div>

                <div class="border border-gray-400 rounded-2xl p-7 shadow-xl shadow-purple-200">
                    <div class="flex justify-center items-center mb-6">
                        <i class="fa fa-cloud text-pink-500 text-2xl font-semibold"></i>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, expedita possimus! Fuga
                            inventore rerum recusandae!
                        </p>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <a href="#"
                            class="px-4 py-2 transition ease-in-out duration-150 text-xs uppercase text-white font-semibold bg-purple-600 hover:bg-purple-500 border border-transparent rounded-md">Read
                            More</a>
                    </div>
                </div>

                <div class="border border-gray-400 rounded-2xl p-7 shadow-xl shadow-purple-200">
                    <div class="flex justify-center items-center mb-6">
                        <i class="fa fa-cloud text-pink-500 text-2xl font-semibold"></i>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, expedita possimus! Fuga
                            inventore rerum recusandae!
                        </p>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <a href="#"
                            class="px-4 py-2 transition ease-in-out duration-150 text-xs uppercase text-white font-semibold bg-purple-600 hover:bg-purple-500 border border-transparent rounded-md">Read
                            More</a>
                    </div>
                </div>

                <div class="border border-gray-400 rounded-2xl p-7 shadow-xl shadow-purple-200">
                    <div class="flex justify-center items-center mb-6">
                        <i class="fa fa-cloud text-pink-500 text-2xl font-semibold"></i>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, expedita possimus! Fuga
                            inventore rerum recusandae!
                        </p>
                    </div>
                    <div class="flex justify-center items-center mb-6">
                        <a href="#"
                            class="px-4 py-2 transition ease-in-out duration-150 text-xs uppercase text-white font-semibold bg-purple-600 hover:bg-purple-500 border border-transparent rounded-md">Read
                            More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Photo gallery --}}
    <section>
        <div class="container mx-auto mt-16">

        </div>
    </section>

    {{-- VLIR --}}
    <section class="bg-gray-200 pb-6">
        <div class="container mx-auto mt-16 w-full text-center">
            <h1 class="font-semibold tracking-wide pt-20 text-2xl">VLIR in Brief</h1>
            <div class="p-7 mx-auto w-1/2">
                <p class="leading-relaxed text-lg">
                    The VLIR MWECAU partnership programme is a collaboration between the Mwenge Catholic University
                    and the KU-Leuven in Belgium. The programme is divided into two phases, each of six
                    years, with the first phase focusing on capacity building initiatives through PhD & master's
                    training for the institution’s staff, thematic research & training, launching of local master's and
                    PhD programmes, investing in....
                </p>
            </div>
            <div class="mt-4">
                <a href="#"
                    class="text-md font-semibold uppercase px-7 py-3 rounded-md bg-purple-500 text-white border-transparent">Read
                    More</a>
            </div>
        </div>
    </section>
@endsection
