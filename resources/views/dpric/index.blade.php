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
                <x-dpric-btn btnLink='/dpric/welcome-message'>Read More</x-dpric-btn>
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
                <h3 class="text-default-head text-xl lg:text-2xl my-6 text-center">Explore Our Postgraduate Academic Units
                </h3>
                <p class="my-2 text-default-text text-md lg:text-xl text-justify">Our Academic Teaching Units are dedicated
                    to delivering advanced, world-class education for postgraduate scholars. From specialized courses to
                    expert mentorship, we’re here to equip you with the skills and knowledge to excel in your field. Dive
                    deep into learning that shapes careers and transforms futures!</p>
            </div>
            <div class="dpric-units w-full lg:w-1/2">
                <div class="w-full">
                    <div class="w-full lg:w-10/12 mx-auto flex flex-col">
                        <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" class="w-full rounded-lg" alt="">
                        <div class="p-2">
                            <h4 class="text-default-head text-lg my-2">Name of the Unit</h4>
                            <p class="text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat,
                                eaque corporis quod </p>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full lg:w-10/12 mx-auto flex flex-col">
                        <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" class="w-full rounded-lg" alt="">
                        <div class="p-2">
                            <h4 class="text-default-head text-lg my-2">Name of the Unit</h4>
                            <p class="text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat,
                                eaque corporis quod </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Postgrad Programmes --}}
    <section class="w-full p-2 my-4">
        <div class="flex flex-col lg:mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Postgraduate Programmes</h2>
                <div class="w-4/5 mx-auto lg:mx-0 border border-purple-500"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto p-2 flex flex-col md:flex-row gap-4">
            <a href="#"
                class="w-full md:w-1/3 p-8 my-4 md:my-0 shadow-md shadow-purple-400 scale-100 transform transition-transform duration-500 hover:scale-105">
                {{-- <div class="w-full h-24 bg-purple-600 rounded-full absolute -top-14"></div> --}}
                <div class="w-full flex flex-col items-center">
                    <i class="fa fa-graduation-cap text-5xl my-8 text-default-head"></i>
                    <div class="w-full">
                        <h4 class="text-center text-default-text text-xl">Doctor of Philosophy in Education</h4>
                    </div>
                </div>
            </a>

            <a href="#"
                class="w-full md:w-1/3 p-8 my-4 md:my-0 shadow-md shadow-purple-400 scale-100 transform transition-transform duration-500 hover:scale-105">
                <div class="w-full flex flex-col items-center">
                    <i class="fa fa-graduation-cap text-5xl my-8 text-default-head"></i>
                    <div class="w-full p-3">
                        <h4 class="text-center text-default-text text-xl">Doctor of Philosophy in Education</h4>
                    </div>
                </div>
            </a>

            <a href="#"
                class="w-full md:w-1/3 p-8 my-4 md:my-0 shadow-md shadow-purple-400 scale-100 transform transition-transform duration-500 hover:scale-105">
                <div class="w-full flex flex-col items-center">
                    <i class="fa fa-graduation-cap text-5xl my-8 text-default-head"></i>
                    <div class="w-full">
                        <h4 class="text-center text-default-text text-xl">Doctor of Philosophy in Education</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-fit mx-auto my-8">
            <x-dpric-btn btnLink='#'>More Programmes</x-dpric-btn>
        </div>
    </section>

    {{-- Research Projects --}}
    <section class="w-full flex flex-col md:flex-row mt-8 bg-neutral-100">
        <div class="w-full lg:w-1/2 p-8">
            <div class="w-fit mx-auto my-8"><i class="fas fa-microscope text-5xl text-default-head"></i></div>
            <h3 class="text-default-head text-xl lg:text-2xl my-6 text-center">Discover Our Research Projects</h3>
            <p class="my-2 text-default-text text-md lg:text-xl text-justify">Our Research Projects drive innovation and
                uncover new knowledge across diverse fields. Led by passionate scholars and fueled by curiosity, these
                projects tackle real-world challenges and contribute to sustainable solutions. Join us in pioneering
                research that makes a difference!
            </p>
        </div>
        <div class="w-full lg:w-1/2 py-8 px-12 bg-purple-900 flex flex-col justify-between">
            <div class="w-full">
                <div class="text-white text-2xl my-2"><a href=""><i class="fa fa-check"></i> <span
                            class="ml-2">Bega Kwa Bega (BKB)</span></a>
                </div>
                <div class="text-white text-2xl my-2"><a href=""><i class="fa fa-check"></i> <span
                            class="ml-2">Mtu Ni Watu</span></a>
                </div>
            </div>

            <div class="w-fit mx-auto mt-6">
                <a href="#"><button
                        class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white border-2 border-white hover:border-purple-800">
                        Explore More
                    </button></a>
            </div>
        </div>
    </section>

    {{-- Innovation Hub --}}
    <section class="relative w-full h-96 bg-center bg-cover bg-fixed"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="w-11/12 mx-auto text-white text-center">
                    <h3 class="uppercase text-2xl md:text-4xl">Welcome to the Innovations Hub</h3>
                    <p class="mt-4 text-xl leading-8">
                        The Innovations Hub is where bold ideas meet real-world impact. Here, creativity and cutting-edge
                        technology converge to develop solutions that shape the future. Whether you’re an inventor,
                        entrepreneur, or visionary, our hub is the place to bring ideas to life and drive meaningful change!
                    </p>
                    <div class="w-fit mx-auto mt-6">
                        <a href="#"><button
                                class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white border-2 border-white hover:border-purple-800">
                                Explore More
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Awards --}}
    <section class="w-full bg-purple-900 text-white p-4">
        <div class="w-full md:w-11/12 mx-auto p-4 text-center">
            <div class="w-full my-4">
                <h3 class="uppercase text-xl md:text-3xl">Celebrating Excellence with Research Awards</h3>
                <p class="mt-6 text-xl leading-8">
                    Our Research Awards honor outstanding contributions that push the boundaries of knowledge and make a
                    lasting impact. These awards recognize innovation, dedication, and achievements in research that inspire
                    and lead the way to a brighter future. Join us in celebrating excellence!
                </p>
            </div>

            <div class="w-full md:w-11/12 flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 flex flex-col items-center my-8">
                    <img src="{{ asset('img/mwecau.png') }}" alt=""
                        class="w-2/5 mx-auto border-2 border-white rounded-full">
                    <h4 class="mt-4 text-xl"><a href="#">Award title</a></h4>
                </div>
                <div class="w-full md:w-1/3 flex flex-col items-center my-8">
                    <img src="{{ asset('img/mwecau.png') }}" alt=""
                        class="w-2/5 mx-auto border-2 border-white rounded-full">
                    <h4 class="mt-4 text-xl"><a href="#">Award title</a></h4>
                </div>
                <div class="w-full md:w-1/3 flex flex-col items-center my-8">
                    <img src="{{ asset('img/mwecau.png') }}" alt=""
                        class="w-2/5 mx-auto border-2 border-white rounded-full">
                    <h4 class="mt-4 text-xl"><a href="#">Award title</a></h4>
                </div>
            </div>
        </div>
    </section>
@endsection
