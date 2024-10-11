@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp

    <section class="bg--700">
        <div class="bg-gray-100">
            <div class="container mx-auto mt-12 pt-14 pb-11">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg--500 p-4">
                        <div class="md:mt-48">
                            <h3 class="text-gray-500 mb-11 font-semibold uppercase opacity-85">about us</h3>
                            <h1 class="favFont lg:text-6xl tracking-wider font-extralight text-wrap">Why We are the Best
                                <span class="text-purple-600">Dispensary?</span>
                            </h1>
                        </div>
                        <div class="lg:mt-10 text-gray-600">
                            World-class rehabilitation solutions and individualized recovery plans, from acute care to
                            ongoing
                            outpatient treatment and beyond.
                        </div>
                    </div>
                    <div class="bg--500 p-4 text-white">
                        <img src="{{ asset('img/health-center/about-1.webp') }}" alt=""
                            class="object-cover rounded-3xl">
                    </div>
                </div>
            </div>
        </div>


        <div class="w-9/12 mx-auto mt-11">
            <div class=" mt-11">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg--500 p-4 order-last md:order-first">
                        <div class="bg--500 p-0 text-white">
                            <img src="{{ asset('img/health-center/about-2.webp') }}" alt=""
                                class="object-cover rounded-3xl">
                        </div>
                    </div>
                    <div class="bg--500 p-4">
                        <div class="md:mt-48">
                            {{-- <h3 class="text-gray-500 mb-11 font-semibold uppercase opacity-85 text-wrap">Welcome to Renew Medical</h3> --}}
                            <h1 class="favFont text-6xl mb-8 font-extralight text-wrap">Welcome to Renew Medical</h1>
                        </div>
                        <div class="lg:mt-10 text-gray-600 md:order-1  flex items-center justify-center">
                            <p class="text-justify">
                                Welcome to Our Dispensary, where your health and well-being are our top priority. Our team
                                of experienced
                                physicians, nurses, and healthcare professionals is dedicated to delivering personalized
                                medical services
                                tailored to meet your unique needs.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full mt-11 h-height">
                <div class="w-full flex gap-2 mx-auto h-height">
                    <div class="w-1/2 order-last md:order-first h-full">
                        <div class="story w-full pt-20 h-full">
                            <div class="w-full">
                                <h3 class="favFont text-5xl mt-18 font-extralight tracking-wide mb-10 uppercase">Our Story
                                </h3>
                                <p class="text-gray-600 text-lg">
                                    Welcome to Our Dispensary, where your health and well-being are our top priority. Our
                                    team
                                    of experienced
                                    physicians, nurses, and healthcare professionals is dedicated to delivering personalized
                                    medical services
                                    tailored to meet your unique needs.
                                </p>
                            </div>
                            <div class="w-full flex p-4 gap-3 mt-24">
                                <img src="{{ asset('img/health-center/about-3.webp') }}" alt=""
                                    class="object-cover rounded-3xl w-1/2">
                                <img src="{{ asset('img/health-center/about-4.webp') }}" alt=""
                                    class="object-cover rounded-3xl w-1/2">
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 p-4 md:order-1">
                        <img src="{{ asset('img/health-center/about-5.webp') }}" alt="" class="rounded-3xl w-full">

                    </div>
                </div>
            </div>

            <div class="mt-28">
                <div class="text-center">
                    <h5 class="favFont mb-10 col-span-full text-gray-400 uppercase">Meet our team</h5>
                    <h1 class="favFont mb-20 text-purple-800 font-light text-6xl">Our Professional Team</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg">
                        <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                            <img class="w-full h-full object-cover" src="{{ asset('img/health-center/about-3.webp') }}"
                                alt="profile-picture" />
                        </div>
                        <div class="p-6">
                            <h4 class="mb-1 text-xl font-semibold text-slate-800">
                                Natalie Paisley
                            </h4>
                            <p class="text-sm font-semibold text-slate-500">
                                Staff Physiatrist
                            </p>

                        </div>
                        <div class="p-6 pt-2 gap-x-72 flex">
                            <button class="text-gray-800 hover:text-pink-700 font-semibold">
                                Read More
                            </button>
                            <i
                                class="fa fa-arrow-right text-white transition-all ease-in rounded-3xl bg-emerald-400 hover:bg-pink-600 px-3 py-2"></i>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg ">
                        <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                            <img class="w-full h-full object-cover" src="{{ asset('img/health-center/about-4.webp') }}"
                                alt="profile-picture" />
                        </div>
                        <div class="p-6">
                            <h4 class="mb-1 text-xl font-semibold text-slate-800">
                                Natalie Paisley
                            </h4>
                            <p class="text-sm font-semibold text-slate-500">
                                Staff Physiatrist
                            </p>

                        </div>
                        <div class="p-6 pt-2  gap-x-72 flex">
                            <button class="text-gray-800 hover:text-pink-700 font-semibold">
                                Read More
                            </button>
                            <i
                                class="fa fa-arrow-right text-white transition-all ease-in rounded-3xl bg-emerald-400 hover:bg-pink-600 px-3 py-2"></i>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg ">
                        <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                            <img class="w-full h-full object-cover" src="{{ asset('img/health-center/about-5.webp') }}"
                                alt="profile-picture" />
                        </div>
                        <div class="p-6">
                            <h4 class="mb-1 text-xl font-semibold text-slate-800">
                                Natalie Paisley
                            </h4>
                            <p class="text-sm font-semibold text-slate-500">
                                Staff Physiatrist
                            </p>

                        </div>
                        <div class="p-6 pt-2  gap-x-72 flex">
                            <button class="text-gray-800 hover:text-pink-700 font-semibold">
                                Read More
                            </button>
                            <i
                                class="fa fa-arrow-right text-white transition-all ease-in rounded-3xl bg-emerald-400 hover:bg-pink-600 px-3 py-2"></i>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center items-center p-6 pt-12">
                    <button
                        class="min-w-56 font-semibold rounded-xl bg-white py-4 px- px-9 border-2 border-gray-600 text-gray-900 hover:border-transparent text-center hover:text-white translate-x-10  transition  ease-in shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-emerald-300"
                        type="button">
                        View All Doctors
                    </button>
                </div>
            </div>

        </div>

        {{-- //slider --}}
        <div class="bg-gray-100 mt-28">
            <div class="text-center">
                <h3 class="favFont mb-10 uppercase pt-20 text-gray-400">Area Of Speciality</h3>
                <span class="favFont text-4xl text-wrap">We can help you with the following <br>
                    conditions:</span>
            </div>

            <div class="mt-11 w-full">
                <div class="center w-full flex gap-5">
                    <div class="w-full mx-4">
                        <div class="w-full relative mx-2 h-[550px] rounded-3xl overflow-hidden group">
                            <img src="{{ asset('img/health-center/about-3.webp') }}" alt="Image 1"
                                class="object-cover h-full w-full">
                            <i class="fa-regular fa-brain text-red-700 text-3xl"></i>

                            <!-- Social Media Icons on Hover -->
                            <div
                                class="absolute inset-0 flex justify-center items-center space-x-4 bg-gradient-to-t from-pink-400 to-transparent bg-opacity-90 opa opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#"><i
                                        class="fab fa-facebook-f text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-twitter text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-instagram text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class=" w-full mx-4">
                        <div class="relative w-full mx-2 h-[550px] rounded-3xl overflow-hidden group">
                            <img src="{{ asset('img/health-center/about-3.webp') }}" alt="Image 2"
                                class="object-cover w-full h-full">
                            <!-- Social Media Icons on Hover -->
                            <div
                                class="absolute inset-0 flex justify-center items-center space-x-4 bg-gradient-to-t from-purple-500 to-transparent bg-opacity-90 opa opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#"><i
                                        class="fab fa-facebook-f text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-twitter text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-instagram text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mx-4">
                        <div class="relative w-full mx-2 h-[550px] rounded-3xl overflow-hidden group">
                            <img src="{{ asset('img/health-center/about-3.webp') }}" alt="Image 3"
                                class="object-cover w-full h-full">
                            <!-- Social Media Icons on Hover -->
                            <div
                                class="absolute inset-0 flex justify-center items-center space-x-4 bg-gradient-to-t from-pink-400 to-transparent bg-opacity-90 opa opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#"><i
                                        class="fab fa-facebook-f text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-twitter text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-instagram text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mx-4">
                        <div class="relative w-full mx-2 h-[550px] rounded-3xl overflow-hidden group">
                            <img src="{{ asset('img/health-center/about-3.webp') }}" alt="Image 3"
                                class="object-cover w-full h-full">
                            <!-- Social Media Icons on Hover -->
                            <div
                                class="absolute inset-0 rounded-xl flex justify-center items-center space-x-4 bg-gradient-to-t from-purple-500 to-transparent bg-opacity-90 opa opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="#"><i
                                        class="fab fa-facebook-f text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-twitter text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                <a href="#"><i
                                        class="fab fa-instagram text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="mt-36 m-11">
            <div class="favFont text-center">
                <h1 class="text-6xl font-extralight">What Our Patients Say</h1>
                <p class="text-md mt-6">Our patients are our greatest asset. We are proud of the trust they have placed</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16 px-4">
                <div
                    class="rounded-3xl text-white shadow-xl shadow-green-100 border lg:h-[430px] border-gray-300 p-7 pb-16 max-w-sm mx-auto">
                    <!-- Star Rating -->
                    <div class="flex justify-center items-center space-x-2 py-4">
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                    </div>
                    <!-- Testimonial Text -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptatem voluptates! Ipsa et
                            perspiciatis iure itaque eum iste, inventore, at porro eaque quo eligendi repellat fugiat quos.
                        </p>
                    </div>
                    <!-- User Information -->
                    <div class="flex justify-center items-center mt-6 space-x-3">
                        <img src="{{ asset('img/health-center/testimonials-5.webp') }}" alt="Julius T."
                            class="h-10 w-10 rounded-full">
                        <strong>Jane L. </strong>
                    </div>
                </div>

                <div
                    class="rounded-3xl shadow-xl shadow-emerald-100 border h-96 border-emerald-300 p-7 pb-16 max-w-sm mx-auto">
                    <!-- Star Rating -->
                    <div class="flex justify-center items-center space-x-2 py-4">
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                    </div>
                    <!-- Testimonial Text -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptatem voluptates! Ipsa et
                            perspiciatis iure itaque eum iste, inventore, at porro eaque quo eligendi repellat fugiat quos.
                        </p>
                    </div>
                    <!-- User Information -->
                    <div class="flex justify-center items-center mt-6 space-x-3">
                        <img src="{{ asset('img/health-center/testimonials-3.webp') }}" alt="Julius T."
                            class="h-10 w-10 rounded-full">
                        <strong>Julius T.</strong>
                    </div>
                </div>

                <div class="rounded-3xl shadow-xl border border-gray-300 p-7 pb-16 max-w-sm mx-auto">
                    <!-- Star Rating -->
                    <div class="flex justify-center items-center space-x-2 py-4">
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                    </div>
                    <!-- Testimonial Text -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptatem voluptates! Ipsa et
                            perspiciatis iure itaque eum iste, inventore, at porro eaque quo eligendi repellat fugiat quos.
                        </p>
                    </div>
                    <!-- User Information -->
                    <div class="flex justify-center items-center mt-6 space-x-3">
                        <img src="{{ asset('img/health-center/testimonials-1.webp') }}" alt="Julius T."
                            class="h-10 w-10 rounded-full">
                        <strong>Jane L. </strong>
                    </div>
                </div>

                <div class="rounded-3xl shadow-xl shadow-emerald-100 border border-emerald-300 p-7 pb-16 max-w-sm mx-auto">
                    <!-- Star Rating -->
                    <div class="flex justify-center items-center space-x-2 py-4">
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                        <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                    </div>
                    <!-- Testimonial Text -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptatem voluptates! Ipsa et
                            perspiciatis iure itaque eum iste, inventore, at porro eaque quo eligendi repellat fugiat quos.
                        </p>
                    </div>
                    <!-- User Information -->
                    <div class="flex justify-center items-center mt-6 space-x-3">
                        <img src="{{ asset('img/health-center/testimonials-4.webp') }}" alt="Julius T."
                            class="h-10 w-10 rounded-full">
                        <strong>Julius T.</strong>
                    </div>
                </div>
            </div>

        </div>

        <button data-dialog-target="sign-in-modal"
            class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
            type="button">
            Open Modal Form
        </button>
        <div data-dialog-backdrop="sign-in-modal" data-dialog-backdrop-close="true"
            class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
            <div data-dialog="sign-in-modal"
                class="relative mx-auto w-full max-w-[24rem] rounded-lg overflow-hidden shadow-sm">
                <div class="relative flex flex-col bg-white">
                    <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                        <h3 class="text-2xl">
                            Sign In
                        </h3>
                    </div>
                    <div class="flex flex-col gap-4 p-6">
                        <div class="w-full max-w-sm min-w-[200px]">
                            <label class="block mb-2 text-sm text-slate-600">
                                Email
                            </label>
                            <input type="email"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Your Email" />
                        </div>

                        <div class="w-full max-w-sm min-w-[200px]">
                            <label class="block mb-2 text-sm text-slate-600">
                                Password
                            </label>
                            <input type="password"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Your Password" />
                        </div>

                        <div class="inline-flex items-center mt-2">
                            <label class="flex items-center cursor-pointer relative" htmlFor="check-2">
                                <input type="checkbox"
                                    class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-slate-800 checked:border-slate-800"
                                    id="check-2" />
                                <span
                                    class="absolute text-white opacity-0 pointer-events-none peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </label>
                            <label class="cursor-pointer ml-2 text-slate-600 text-sm" htmlFor="check-2">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <button
                            class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            Sign In
                        </button>
                        <p class="flex justify-center mt-6 text-sm text-slate-600">
                            Don&apos;t have an account?
                            <a href="#signup" class="ml-1 text-sm font-semibold text-slate-700 underline">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="flex justify-center items-center h-screen">
            <div class="favFont w-1/1 m-3 rounded-3xl border border-gray-300 px-20 pb-32">
                <div>
                    <h1 class="uppercase mt-10 text-center tracking-widest text-gray-400">Schedule your visit online</h1>
                    <p class="text-center mt-10 tracking-wide text-4xl text-wrap">
                        Take the next step and schedule an <br> appointment today
                    </p>
                </div>
            </div>
        </div> --}}
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

    </section>
@endsection
