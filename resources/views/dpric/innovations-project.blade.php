@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            {{-- <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="text-4xl">Home Automation Project</h1>
                </div>
            </div> --}}
        </div>
    </section>

    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Home Automation Project</h2>
            </div>
        </div>

        <div
            class="w-full md:w-11/12 mx-auto flex flex-col md:flex-row md:h-96 my-8 border border-blue-600 rounded-md overflow-hidden">
            <div class="w-full md:w-4/12 p-4 md:h-96">
                <div class="w-11/12 mx-auto rounded-lg project-desc1">
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Category</label>
                        <span class="text-xl text-default-text">Technology</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Date</label>
                        <span class="text-xl text-default-text">june 2024<span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Duration</label>
                        <span class="text-xl text-default-text">6 months</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Club</label>
                        <span class="text-xl text-default-text">Mwecau ICT Club</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-8/12 md:h-96">
                <img src="{{ asset('img/campus-life/spirtual4.jpg') }}" alt=""
                    class="md:object-cover md:h-96 w-full">
            </div>
        </div>

        {{-- Description --}}
        <div class="w-full px-4 flex flex-col md:flex-row">
            <div class="w-full md:w-8/12 p-4">
                {{-- <h2 class="mb-2 text-4xl text-blue-800 FavFont">{{ $singleProject->name }}</h2> --}}
                <p class="text-justify text-gray-500 text-lg my-4 favFont">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Voluptatibus dignissimos inventore perspiciatis accusamus vero asperiores velit porro
                    tempore iste placeat minima optio, nam cupiditate harum minus sunt, praesentium ex. Quis.
                    Error illo beatae quia iusto earum reiciendis id voluptate, temporibus recusandae in doloremque minus
                    repudiandae pariatur quas commodi quam est illum tempore rem eaque? Quia reprehenderit deleniti
                    distinctio ab rem.
                    Commodi necessitatibus quisquam facere dolorum quam ipsa possimus, quia itaque! Quod corporis distinctio
                    a delectus ut dolor et dolorum accusantium, perspiciatis consectetur sint ipsa quia consequatur nobis
                    aperiam porro necessitatibus!</p>
            </div>

            <div class="w-full md:w-4/12 p-4">
                <h5 class="text-xl mb-4 text-blue-800">Related Projects</h5>
                <ul>
                    <li
                        class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                        <a href="#" class="flex items-center justify-between">
                            <div class="w-fit flex gap-2 items-center"><i class="fa fa-microscope text-purple-500"></i><span
                                    class="ml-8 text-gray-500">Bega Kwa Bega</span> </div><i
                                class="fa fa-arrow-right text-gray-500"></i>
                        </a>
                    </li>
                    <li
                        class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                        <a href="#" class="flex items-center justify-between">
                            <div class="w-fit flex gap-2 items-center"><i class="fa fa-microscope text-purple-500"></i><span
                                    class="ml-8 text-gray-500">Mtu ni Watu</span> </div><i
                                class="fa fa-arrow-right text-gray-500"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- gallery --}}
        <section class="w-full py-8">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">Project's Gallery</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="w-full flex p-4 flex-wrap items-center">
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project1.jpeg') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project3.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
                <div class="w-1/2 my-4 lg:w-1/4">
                    <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                        <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                            class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                        <div class="overlay hidden group-hover:block h-52"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
