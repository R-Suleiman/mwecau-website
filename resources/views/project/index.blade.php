@extends('layouts.project.project-layout')
@section('content')
    {{-- Navbar --}}
    {{-- <nav class="bg-purple-600 border-gray-200 py-2.5 dark:bg-purple-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center space-x-2">
                <img src="{{ asset('img/mwecau.png') }}" class="h-16" alt="Mwecau Logo" />
                <img src="{{ asset('img/project/logo.svg') }}" class="h-10" alt="Ku Leuven Logo" />
            </a>

            <di class="lg:hidden flex items-center justify-center">
                <h1 class="headerFavFont text-white text-2xl"> Mwenge catholic University</h1>
            </di>
            <div class="flex items-center lg:order-2">
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Our
                            Projects</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Our
                            Reseachers</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Living
                            Lab</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <section class="">
        <div class="w-full relative overflow-hidden">
            <img class="w-full object-cover object-center h-auto" src="{{ asset('img/health-center/header.jpg') }}"
                alt="">

            <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-40">
                <div class="text-center">
                    <h1 class="text-4xl lg:text-8xl font-bold">Mwenge Catholic University</h1>
                    <h3 class="text-2xl">PROJECTS</h3>
                </div>
            </div>
        </div>
    </section>


    {{-- Homepage projects --}}
    <section>
        <div class="container mx-auto mt-10">
            <div class="lg:px-28 px-16 gap-5 w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <h1
                    class="col-span-full text-center font-semibold text-xl uppercase md:text-2xl lg:text-3xl mb-8 headerFavFont">
                    Projects under VLIR
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
            <h1 class="text-center text-3xl font-extrabold headerFavFont uppercase">Photo Gallery</h1>
            <div class="flex justify-end items-center py-4 md:py-8 flex-wrap">
                <button type="button"
                    class="text-gray-700 hover:text-gray-100  hover:bg-gradient-to-r from-purple-600 to-purple-400 border shadow-xl hover:border-transparent bg-white focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3"><i
                        class="fa-solid fa-list-check"></i> All categories</button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                    1</button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                    2</button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Project
                    3</button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-xl" src="{{ asset('img/project/Dr.Minja.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-xl"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- VLIR --}}
    <section class="bg-gray-100 pb-16">
        <div class="container mx-auto mt-16 w-full text-center">
            <h1 class="font-semibold tracking-wide pt-20 text-2xl">VLIR in Brief</h1>
            <div class="p-7 mx-auto lg:w-1/2">
                <p class="text-justify leading-relaxed text-lg">
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

    {{-- project team --}}
    <section class="mt-28">
        <div class="container mx-auto">
            <h1 class="text-4xl font-semibold uppercase text-center headerFavFont">Our Team Drives Excellence</h1>
            <div class="w-9/12 mx-auto mt-10">
                <div class="pb-7 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                    <div class="p-4 border content-center text-center border-purple-600 rounded-xl flex flex-col h-full">
                        <h1 class="uppercase text-3xl font-semibold FavFont pb-6">Our Team Drives Excellence</h1>
                        <p class="text-justify leading-relaxed flex-grow">
                            At Mwenge Catholic University, we are dedicated to advancing research projects that create
                            lasting impact.

                            Joining our team means collaborating with talented professionals, addressing complex challenges,
                            and cultivating innovative solutions. Throughout this journey, you’ll forge meaningful
                            connections, thrive in a dynamic work environment, and embrace exciting opportunities for
                            personal and professional growth.
                        </p>
                    </div>

                    <div
                        class="grid grid-cols-1 bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 gradient rounded-xl">
                        <div class="p-4 border border-b-purple-600 xl divide-y-2 divide-purple-500">
                            <div class="lg:flex space-x-5 w-full pt-7">
                                <div class="px-5 order-2 sm:order-1 flex justify-center items-center sm:pb-4 pb-4">
                                    <img src="{{ asset('img/project/Dr.Minja.png') }}" alt=""
                                        class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover">
                                </div>
                                <div class="order-1 sm:order-2 flex-1">
                                    <div class="sm:text-center">

                                        <h1 class="uppercase font-semibold text-white">Dr. Gileard Sifuel Minja</h1>
                                        <span class="text-gray-400">Mwenge Catholic Unviversity</span>
                                        <p class="pt-3 text-white">
                                            Department of Agriculture, Earth and Environmental Sciences (DAES)

                                        </p>
                                    </div>

                                    {{-- Social Media Icons --}}
                                    <div class="flex justify-center items-center space-x-5 text-white mt-6 pb-6">
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-x-twitter text-2xl"></i>
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-google-scholar text-3xl"></i>
                                        </a>

                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-linkedin text-3xl"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="lg:flex space-x-5 w-full pt-7">
                                <div class="px-5 order-2 sm:order-1 flex justify-center items-center sm:pb-4 pb-4">
                                    <img src="{{ asset('img/project/Dr.Minja.png') }}" alt=""
                                        class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover">
                                </div>
                                <div class="order-1 sm:order-2 flex-1">
                                    <div class="sm:text-center">

                                        <h1 class="uppercase font-semibold text-white">Dr. Gileard Sifuel Minja</h1>
                                        <span class="text-gray-400">Mwenge Catholic Unviversity</span>
                                        <p class="pt-3 text-white">
                                            Department of Agriculture, Earth and Environmental Sciences (DAES)

                                        </p>
                                    </div>

                                    {{-- Social Media Icons --}}
                                    <div class="flex justify-center items-center space-x-5 text-white mt-6 pb-6">
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-x-twitter text-2xl"></i>
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-google-scholar text-3xl"></i>
                                        </a>

                                        <a href="#"
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-500 hover:bg-purple-600 transition duration-200">
                                            <i class="fa-brands fa-linkedin text-3xl"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- //Testimonial --}}
    <section class=" mt-16">
        <div class="max-w-6xl mx-auto w-full">
            <div class="max-w-2xl mx-auto w-full text-center">
                <h1 class="text-gray-800 text-3xl font-extrabold headerFavFont">What our happy client say</h1>
                <p class="text-gray-800 text-sn leading-relaxed mt-6 favFont">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquam iure eaque cumque repellat
                    consectetur id esse, nam, aperiam atque nesciunt tempore, laborum sint sapiente ad temporibus molestias
                    labore placeat!
                </p>
            </div>
            {{-- //cards --}}
            <div class="mt-6 font-[sans-serif]">
                <div class="max-w-6xl max-auto">
                    <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center mt-16">
                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-sm leading-relaxed">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>

                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-sm leading-relaxed">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>

                        <div class="relative rounded-xl border-2 max-w-[350px] min-h-[320px] h-auto shadow-xl p-7">
                            <div
                                class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                    viewBox="0 0 475.082 475.081">
                                    <path
                                        d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="flex items-center">
                                <img src="{{ asset('img/project/Dr.Minja.png') }}"
                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent" alt="">
                                <div class="ml-4">
                                    <h4 class="font-semibold">Dr. Gileard Sifuel Minja</h4>
                                    <div class="flex space-x-3 mt-2">
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-sharp fa-solid fa-star text-yellow-500"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-sm leading-relaxed">
                                    The service was amazing. I never had to wait that long for my food. The staff was
                                    friendly and attentive, and the delivery was impressively prompt. Elit occaecat officia
                                    et laboris Lorem minim. Officia do aliqua adipisicing ullamco in
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
