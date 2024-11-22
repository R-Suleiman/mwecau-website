@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="uppercase text-2xl md:text-4xl">MWECAU INNOVATIONS HUB</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full px-8 py-12 flex flex-col items-center bg-blue-900 text-blue-100">
        <i class="fa fa-brain text-8xl"></i>
        <h2 class="text-3xl my-4">Empowering Creativity at the Innovations Hub</h2>
        <p class="text-lg my-2 text-center">Our Innovations Hub is a dynamic space for visionary ideas and transformative
            solutions. Here, students, researchers, and industry leaders collaborate to turn groundbreaking concepts into
            impactful realities. Join us in pushing the boundaries of what’s possible and driving innovation that shapes the
            world!</p>
    </section>

    {{-- innovations projects --}}
    <section class="w-full">
        <div class="w-full md:w-10/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="w-full md:w-2/3 p-4 my-4 order-2 md:order-1">
                <h3 class="text-3xl my-4 text-default-head">Bringing Ideas to Life with Innovation Projects</h3>
                <p class="text-lg my-2 text-default-text">Our Innovation Projects are where creative concepts evolve into
                    impactful solutions. These projects foster collaboration, harness cutting-edge technology, and encourage
                    out-of-the-box thinking to address pressing challenges. Join us as we transform ideas into innovations
                    that make a difference!</p>
            </div>
            <div class="w-full md:w-1/3 p-2 md:p-4 my-0 md:my-4 flex content-center items-center order-1 md:order-2">
                <i class="fas fa-robot mx-auto text-7xl md:text-9xl text-blue-800"></i>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Technology</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU ICT CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Environment</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU PCCB CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Agricluture</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU Agriculture CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-fit mx-auto mb-4">
            <x-dpric-btn btnLink="/dpric/innovations-hub/projects">
                More Projects
            </x-dpric-btn>
        </div>
    </section>

    {{-- Clubs --}}
    <section class="w-full">
        <div class="w-full md:w-10/12 mx-auto flex flex-col md:flex-row p-4">
            <div class="w-full md:w-1/3 p-2 md:p-4 my-0 md:my-4 flex content-center items-center">
                <i class="fas fa-users mx-auto text-7xl md:text-9xl text-blue-800"></i>
            </div>
            <div class="w-full md:w-2/3 p-4 my-4">
                <h3 class="text-3xl my-4 text-default-head">Our Innovation Clubs and Organizations</h3>
                <p class="text-lg my-2 text-default-text">Our Innovation Clubs and Organizations provide a vibrant community
                    for thinkers, creators, and changemakers. Connect with like-minded individuals, collaborate on exciting
                    projects, and gain hands-on experience in driving innovation. Be part of a network that empowers you to
                    bring your ideas to life and make a lasting impact!</p>
            </div>
        </div>

        <div class="w-full md:w-10/12 mx-auto flex flex-wrap flex-col md:flex-row p-4">
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT
                                Club</h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-fit mx-auto mb-4">
            <x-dpric-btn btnLink="/dpric/innovations-hub/clubs">
                View More Clubs
            </x-dpric-btn>
        </div>
    </section>

    {{-- key features --}}
    <section class="w-full flex flex-col md:flex-row my-8">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="" class="w-full">
        </div>
        <div class="w-full md:w-1/2 py-4 px-4 md:px-12 text-blue-100 bg-blue-800">
            <p class="my-4 text-xl text-justify">The Innovations Hub isn’t just a place; it’s a vibrant community where
                your ideas can grow and thrive. Join us in creating solutions that matter, fostering a culture of
                innovation, and shaping the future!</p>
            <div class="p-4 my-4">
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Collaborative
                        Workspaces</span></div>
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Technology and
                        Resources</span></div>
                <div class="my-2"><i class="fa fa-circle text-lg"></i> <span class="ml-2 text-2xl">Innovation
                        Challenges</span></div>
            </div>
        </div>
    </section>

    {{-- Partnership --}}
    <section class="w-full">
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Our Partnership</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full md:w-10/12 text-center my-4 mx-auto">
            <div class="justify-between flex items-center p-4 rounded-md partners">
                <div class="w-6/12 md:w-4/12 lg:w-1/5 p-4 rounded-full">
                    <a href="https://susie.turkuamk.fi/" target="_blank"><img src="{{ asset('img/p/susie.png') }}" alt="" class="rounded-md w-full h-40"></a>
                </div>
                <div class="w-6/12 md:w-4/12 lg:w-1/5 p-4 rounded-full">
                    <a href="https://www.oph.fi/en" target="_blank"><img src="{{ asset('img/p/finnish.svg') }}" alt="" class="rounded-md w-full h-40"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
