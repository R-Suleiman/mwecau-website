@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="uppercase text-2xl md:text-4xl">Directorate of Postgraduate studies, Research, Innovations and
                        Consultancy
                        (DPRIC) </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- welcome --}}
    <section class="w-full mt-8 lg:my-8 flex flex-col lg:flex-row md:p-4">
        <div class="w-full lg:w-7/12 p-4 lg:p-8 order-2 lg:order-1">
            <div class="w-full lg:w-10/12  lg:relative mx-auto">
                <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" class="w-full rounded-3xl" alt="">
                <div class="w-7/12 hidden lg:block absolute -bottom-8 -right-8 rounded-full">
                    <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" class="w-full rounded-full" alt="">
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12 px-8 lg:py-12 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
            <h3 class="text-2xl mb-8 text-default-head">Welcome to the Heart of Innovation at MWECAU!</h3>
            <p class="text-justify text-default-text text-lg">
                Explore new horizons with the Directorate of Postgraduate Studies, Research, Innovations, and Consultancy.
                We’re here to fuel your academic passion, support groundbreaking research, and turn bold ideas into
                impactful realities. Join us in shaping a brighter, more innovative future!
            </p>
        </div>
    </section>

    {{-- About / Mission --}}
    <section class="w-full flex flex-col p-4 lg:py-16 md:flex-row my-4 lg:my-8 ">
        <div class="w-full md:w-7/12 p-4 my-4 md:my-0 flex flex-col justify-between">
            <div class="w-full">
                <div class="flex flex-col mb-4 p-4">
                    <div class="w-fit">
                        <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">About Us</h2>
                        <div class="w-4/5 border border-purple-500"></div>
                    </div>
                </div>
                <p class="text-justify text-default-text text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ut
                    dicta odio itaque quaerat unde eos quod distinctio nobis? Commodi reprehenderit facilis tenetur magnam
                    saepe
                    ad ipsa temporibus perspiciatis voluptate aut.Ea unde officiis iusto aliquid ad. Quasi odit iure nostrum
                    autem. Neque beatae enim nihil iure laudantium tempore culpa consectetur maiores temporibus aut, facere
                    architecto ipsa quia mollitia nesciunt commodi.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="#"><button
                        class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white hover:border-2 hover:border-purple-800">Read
                        More</button></a>
            </div>

        </div>
        <div
            class="w-full relative overflow-hidden md:w-5/12 p-4 my-4 md:my-0 md:p-8 shadow-lg shadow-purple-300 hover:shadow-purple-400 rounded-lg text-white group">
            <div class="my-4">
                <h3 class="text-xl mb-2 text-default-head">Our Mission</h3>
                <p class="text-justify text-default-text text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Eaque doloribus a voluptates tenetur, ipsa harum magnam quo, velit rem enim veritatis quasi excepturi
                    officia quia. Possimus iure laudantium aliquam accusantium.</p>
            </div>
            <div class="my-4">
                <h3 class="text-xl mb-2 text-default-head">Our Vision</h3>
                <p class="text-justify text-default-text text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Eaque doloribus a voluptates tenetur, ipsa harum magnam quo, velit rem enim veritatis quasi excepturi
                    officia quia. Possimus iure laudantium aliquam accusantium.</p>
            </div>
            <div
                class="absolute -top-10 -right-10 h-28 w-28 rounded-full bg-purple-800 transform transition-transform duration-2000 group-hover:-top-8 group-hover:-right-8">
            </div>
        </div>
    </section>

    {{-- News/Events/Announcements/Articles --}}
    <section class="w-full p-2 mb-8">
        <div class="flex flex-col mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">News</h2>
                <div class="w-4/5 border border-purple-500"></div>
            </div>
            <span class="text-default-text my-2 text-lg">Latest News, Announcements, Events, and more</span>
        </div>

        <div class="dpric-news w-full mx-auto">
            <div class="w-full relative img-bg h-96">
                <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                    <div class="w-full lg:w-2/6 bg-transparent">
                    </div>
                    <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                        <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                        <div class="p-2 text-white w-full">
                            <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="">Title of the
                                    News/Announcement/Article</a></h3>
                            <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Blanditiis, a
                                repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                            <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full relative img-bg h-96">
                <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                    <div class="w-full lg:w-2/6 bg-transparent">
                    </div>
                    <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                        <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                        <div class="p-2 text-white w-full">
                            <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="">Title of the
                                    News/Announcement/Article</a></h3>
                            <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Blanditiis, a
                                repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                            <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full relative img-bg h-96">
                <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                    <div class="w-full lg:w-2/6 bg-transparent">
                    </div>
                    <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                        <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                        <div class="p-2 text-white w-full">
                            <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="">Title of the
                                    News/Announcement/Article</a></h3>
                            <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Blanditiis, a
                                repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                            <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- postgrad units --}}
    <section class="w-full p-2 my-4">
        <div class="flex flex-col lg:mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">academics teaching postgraduate
                    Units
                    </h2>
                <div class="w-4/5 mx-auto lg:mx-0 border border-purple-500"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row p-4  shadow-lg shadow-purple-300 rounded-lg">
            <div class="w-full lg:w-1/2 px-2 lg:px-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="w-fit mx-auto my-8"><i class="fas fa-user-graduate text-5xl text-default-head"></i></div>
                <h3 class="text-default-head text-xl lg:text-2xl my-6 text-center">Explore Our Postgraduate Academic Units</h3>
                <p class="my-2 text-default-text text-md lg:text-xl text-justify">Our Academic Teaching Units are dedicated to delivering advanced, world-class education for postgraduate scholars. From specialized courses to expert mentorship, we’re here to equip you with the skills and knowledge to excel in your field. Dive deep into learning that shapes careers and transforms futures!</p>
            </div>
            <div class="dpric-units w-full lg:w-1/2">
                <div class="w-full">
                    <div class="w-full lg:w-10/12 mx-auto flex flex-col">
                        <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" class="w-full rounded-lg" alt="">
                        <div class="p-2">
                            <h4 class="text-default-head text-lg my-2">Name of the Unit</h4>
                            <p class="text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, eaque corporis quod </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full lg:w-10/12 mx-auto flex flex-col">
                        <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" class="w-full rounded-lg" alt="">
                        <div class="p-2">
                            <h4 class="text-default-head text-lg my-2">Name of the Unit</h4>
                            <p class="text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, eaque corporis quod </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
