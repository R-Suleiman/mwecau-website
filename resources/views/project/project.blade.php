@extends('layouts.project.project-layout')

@section('content')
{{-- hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/site banners/BANNER COMPUTER.jpg') }}')">
        <div class="overlay">
            {{-- <div class="center-div">
            <div class="text-white text-center">
                <h1 class="uppercase text-4xl">mtu ni watu</h1>
            </div>
        </div> --}}
        </div>
    </section>

    <div class="flex flex-col">
    {{-- large banner --}}
    <section class="w-full px-4 pt-12 flex flex-col md:flex-row bg-neutral-100 order-3">
        <div class="w-full md:w-8/12 p-4">
            <img src="{{ asset('img/projects/project1.jpg') }}" alt="">
        </div>

        <div class="w-full md:w-4/12 p-4">
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
    </section>

    {{-- description --}}
    <section class="w-full px-4 pt-12 flex flex-col md:flex-row bg-neutral-100 order-1">
        <div class="w-full md:w-8/12 p-4">
            <h2 class="mb-2 text-4xl text-blue-800 ">Bega Kwa Bega</h2>
            <p class="text-justify text-gray-500 text-lg my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos
                obcaecati voluptatum in asperiores nobis ducimus fugiat dignissimos. Hic sapiente aliquid odit obcaecati
                sunt. Asperiores sequi ex modi officia laborum? Nesciunt?Quisquam sunt, facilis fugit perspiciatis
                blanditiis reprehenderit consequuntur quia voluptate rem, quasi labore exercitationem. Numquam eligendi
                eveniet, exercitationem sit, voluptate accusamus sapiente nesciunt recusandae ipsam, officia facere autem
                minima consequuntur.</p>
            <p class="text-justify text-gray-500 text-lg my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos
                obcaecati voluptatum in asperiores nobis ducimus fugiat dignissimos. Hic sapiente aliquid odit obcaecati
                sunt. Asperiores sequi ex modi officia laborum? Nesciunt?Quisquam sunt, facilis fugit perspiciatis
                blanditiis reprehenderit consequuntur quia voluptate rem, quasi labore exercitationem. Numquam eligendi
                eveniet, exercitationem sit, voluptate accusamus sapiente nesciunt recusandae ipsam, officia facere autem
                minima consequuntur.</p>
        </div>

        <div class="w-full md:w-4/12 p-4">
            <div class="w-11/12 mx-auto p-8 rounded-lg project-desc1">
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Category</label>
                    <span class="text-xl">Agriculture</span>
                </div>
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Date</label>
                    <span class="text-xl">07.11.2024</span>
                </div>
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Duration</label>
                    <span class="text-xl">5 Years</span>
                </div>
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Location</label>
                    <span class="text-xl">MWECAU</span>
                </div>
            </div>
        </div>
    </section>

    {{-- gallery --}}
    <section class="w-full bg-neutral-100 py-8 order-2">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">Project's Gallery</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        <div class="w-fit  flex p-4 flex-wrap items-center">
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="gallery photo" class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="gallery photo" class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="gallery photo" class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="gallery photo" class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
