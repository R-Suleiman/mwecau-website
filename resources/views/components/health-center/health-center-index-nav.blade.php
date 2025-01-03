<section class="w-full relative overflow-x-hidden" id="main-section">
    {{-- video --}}
    {{-- <video width="100%" autoplay loop muted>
        <source src="{{ asset('videos/health-center.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video> --}}

    <img src="{{ asset('img/health-center/default-service-image.jpg') }}" alt="Health Center Image"
        class="w-full h-screen object-cover object-center">

    {{-- side bar --}}
    <div class="block lg:hidden w-full bg-transparent fixed top-0 left-0 z-50">
        <div class="w-full flex items-center justify-between px-4 py-2" id="small-nav">
            <div class="w-2/12 mr-auto">
                <img src="../../img/mwecau.png" alt="mwecau logo" class="w-10/12 rounded">
            </div>
            <div class="small-header font-semibold mx-auto text-white uppercase text-lg">
                <h1>Mwecau Health Center</h1>
            </div>
            <div class="w-1/12 ml-auto text-white text-xl text-center hover:cursor-pointer" id="open-nav"><i
                    class="ml-auto fa fa-bars"></i></div>
        </div>

        <aside
            class=" fixed top-0 right-0 w-full py-2 block bg-purple-500 bg-opacity-90 bg-black-300 h-screen transform transition-transform duration-300 ease-out scale-0"
            id="navbar">
            <div class="w-1/12 text-white text-2xl text-center hover:cursor-pointer ml-auto mr-6" id="close-nav"><i
                    class="ml-auto fa fa-multiply"></i></div>
            <ul class="w-full pt-4 flex flex-col items-center text-lg text-white font-semibold">
                <a href="{{ route('health-center.index') }}"
                    class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Home</li>
                </a>
                <a href="{{ route('health-center.about-us') }}"
                    class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>About US</li>
                </a>
                <li class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400 group relative">
                    <a href="#">Departments <i class="fa fa-caret-down"></i></a>
                    <ul
                        class="w-max transform transition-transform duration-300 translate-y-[-20px] opacity-0 group-hover:translate-y-0 group-hover:opacity-100 absolute left-0 mt-3 bg-white shadow-lg text-purple-800 pointer-events-none group-hover:pointer-events-auto">
                        @if ($departments->isNotEmpty())
                            @foreach ($departments as $department)
                                <li class="px-4 py-2 hover:bg-purple-100"><a
                                        href="{{ route('health-center.department', $department->name) }}">{{ $department->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>

                <a href="{{ route('health-center.services') }}"
                    class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Services</li>
                </a>
                <a href="{{ route('health-center.events') }}"
                    class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Events</li>
                </a>
                <a href="#" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Gallery</li>
                </a>
            </ul>
        </aside>
    </div>

    {{-- large nav --}}
    <div
        class="main-nav lg:flex w-full flex items-center justify-between bg-transparent py-4 px-8 fixed top-0 left-0 z-50 ">
        <div class="w-4/12">
            <a href="/" class="w-full flex items-center lg:mr-auto">
                <img src="../../img/mwecau.png" alt="mwecau logo"
                    class="w-3/12 rounded transition-transform duration-1000 mr-2" id="logo">
                <div class="w-9/12 flex flex-col text-sm lg:text-xl footer-header text-white">
                    <span>Mwenge Catholic University</span>
                    <span>Health Center</span>
                </div>
            </a>
        </div>

        <nav class="w-8/12 py-2">
            <ul class="w-max ml-auto flex items-center text-lg text-white font-semibold">
                <a href="{{ route('health-center.index') }}"
                    class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Home</li>
                </a>
                <a href="{{ route('health-center.about-us') }}"
                    class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>About US</li>
                </a>
                {{-- <a href="" class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400"> --}}
                <li class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400 group relative">
                    <a href="#">Departments <i class="fa fa-angle-down text-xs ml-1"></i></a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 absolute left-0 mt-3 bg-white shadow-lg text-purple-800">
                        @if ($departments->isNotEmpty())
                            @foreach ($departments as $department)
                                <li class="px-4 py-2 hover:bg-purple-100"><a
                                        href="{{ route('health-center.department', $department->name) }}">{{ $department->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>

                {{-- </a> --}}
                <a href="{{ route('health-center.services') }}"
                    class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Services</li>
                </a>
                <a href="{{ route('health-center.events') }}"
                    class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Events</li>
                </a>
                <a href="#" class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Gallery</li>
                </a>
            </ul>
        </nav>
    </div>

    <div class="overlay">
        <div class="center-div lg:static lg:v-center-div w-full lg:w-max">
            <div
                class="lg:static flex flex-col lg:block items-center w-full lg:w-2/5 lg:mr-auto pt-10 md:py-5 lg:pl-8 lg:ml-2 text-white bg-header">
                <h1 class="text-md lg:text-6xl text-center lg:text-left my-4">Empowering Recovery on Your Journey to
                    Wellness
                </h1>
                <div class="mt-2 md:mt-0 flex-col text-xl border-l border-white pl-5 hidden lg:flex">
                    <span>Contact Us: </span>
                    <span class="ml-2 lg:ml-0">+255 753 028 309</span>
                    <span class="ml-2 lg:ml-0">+255 656 792 404 </span>
                </div>
            </div>
        </div>
    </div>
</section>
