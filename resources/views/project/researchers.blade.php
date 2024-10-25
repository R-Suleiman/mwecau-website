@extends('layouts.project.project-layout')

@section('content')

<section class="w-full  px-4 pt-10 lg:py-10 my-4 flex flex-col items-center">
    <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
        <h2 class="uppercase text-2xl text-center text-blue-800">vlir / mwecau Researchers</h2>
        <div class="mt-3 border border-purple-500 w-3/5"></div>
    </div>


    <div class="my-4 p-4 w-full flex flex-col items-center lg:flex-row lg:space-x-8">
        <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300 shadow-md shadow-purple-800">
            <a href="">
                <div class="relative w-full mb-2 overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                    <div
                        class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                        <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                        <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                        <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                        <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="w-full mt-2 p-2 text-justify">
                    <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> Full Name</h4>
                    <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i> Profession</span>
                </div>
            </a>
        </div>

    </div>
</section>

@endsection
