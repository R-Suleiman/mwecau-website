<section class="w-full relative overflow-x-hidden" id="main-section">
    {{-- video --}}
    <video width="100%" autoplay loop muted>
        <source src="{{asset('videos/health-center.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    {{-- side bar --}}
    <div class="block lg:hidden w-full bg-transparent fixed top-0 left-0 z-50">
        <div class="w-full flex items-center justify-between px-4 py-2" id="small-nav">
            <div class="w-3/12 mr-auto">
            <img src="../../img/mwecau.png" alt="mwecau logo" class="w-5/12 rounded">
            </div>
            <div class="hidden mx-auto text-white uppercase text-lg" id="small-header"><h1>Mwecau Health Center</h1></div>
            <div class="w-1/12 ml-auto text-white text-xl text-center hover:cursor-pointer" id="open-nav"><i class="ml-auto fa fa-bars"></i></div>
        </div>

        <aside class=" fixed top-0 right-0 w-full py-2 block bg-purple-500 bg-opacity-90 bg-black-300 h-screen transform transition-transform duration-300 ease-out scale-0" id="navbar">
            <div class="w-1/12 text-white text-2xl text-center hover:cursor-pointer ml-auto mr-6" id="close-nav"><i class="ml-auto fa fa-multiply"></i></div>
            <ul class="w-full pt-4 flex flex-col items-center text-lg text-white font-semibold">
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Home</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>About US</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Departments</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Services</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Events</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Gallery</li>
                </a>
                <a href="" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                    <li>Contact</li>
                </a>
            </ul>
        </aside>
    </div>

    {{-- large nav --}}
    <div class="hidden lg:flex w-full flex items-center justify-between bg-transparent py-4 px-8 fixed top-0 left-0 z-50 " id="main-nav">
        <div class="w-1/12">
        <img src="../../img/mwecau.png" alt="mwecau logo" class="w-11/12 rounded transition-transform duration-1000" id="logo">
        </div>
        <nav class="w-11/12 py-2">
            <ul class="w-max ml-auto flex items-center text-lg text-white font-semibold">
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Home</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>About US</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Departments</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Services</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Events</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Gallery</li>
                </a>
                <a href="" class="px-3 px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                    <li>Contact</li>
                </a>
            </ul>
        </nav>
    </div>

    <div class="overlay">
        <div class="center-div lg:static lg:v-center-div w-full lg:w-max">
            <div class="lg:static flex flex-col lg:block items-center w-full lg:w-2/5 lg:mr-auto pt-10 md:py-5 lg:pl-8 lg:ml-2 text-white bg-header">
                <h1 class="text-xs md:text-sm lg:text-6xl text-center lg:text-left">Empowering Recovery on Your Journey to Wellness</h1>
                <p class="my-8 hidden lg:block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium perspiciatis magni accusantium quasi molestiae cupiditate voluptatibus. Accusamus non corporis vel temporibus, ab ducimus voluptates placeat dolore, quaerat ipsum in libero.</p>
                <div class="mt-2 md:mt-0 flex lg:flex-col text-xs md:text-sm lg:text-xl border-l border-white pl-2 md:pl-5">
                    <span>Contact Us: </span>
                    <span class="ml-2 lg:ml-0">0712345678</span>
                </div>
            </div>
        </div>
    </div>
</section>
