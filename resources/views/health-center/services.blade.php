@extends('layouts.health-center.health-center-layout')
@section('content')
@php
    $pageId = 'null'
@endphp

<div class="">
    <img src="{{ asset('img/site banners/BANNER CHEMISTRY.jpg') }}" alt="banner" class="w-100">
</div>

    {{-- Services --}}
    <section class="w-full px-4 py-20 mb-4 flex flex-col items-center bg-neutral-100">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Hospital Services</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        <div class="my-4 w-fit justify-center flex p-4 flex-wrap flex-col items-center lg:flex-row ">
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>

            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
            <div class="w-full my-4 mx-2 lg:w-1/5 border border-gray-300">
                <a href="">
                    <div class="w-full mb-2 overflow-hidden">
                        <img src="{{ asset('img/campus-life/spirtual1.JPG') }}" alt="service image"
                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    </div>
                    <div class="w-full mt-2 p-2 text-justify">
                        <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">Service Name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis praesentium nostrum</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection
