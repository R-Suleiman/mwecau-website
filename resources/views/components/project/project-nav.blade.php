    <nav class="bg-purple-600 p-4 sticky top-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4 text-white text-lg font-semibold">
                <img src="{{ asset('img/mwecau.png') }}" class="h-16" alt="Mwecau Logo" />
                <img src="{{ asset('img/project/logo.svg') }}" class="h-10" alt="Ku Leuven Logo" />
            </div>

            <div class="md:flex justify-center items-center">
                <ul class="hidden lg:flex space-x-3 text-white">
                    <li>
                        <a href="{{ route('project.index') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects-list') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Our Projects
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('project-researchers') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Our Reseachers
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('project-scholarships') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Scholarships
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('project-livinglab') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Living Lab
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('project-contacts') }}"
                            class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Contacts
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-400">Search</a>
                <a href="#" class="text-white hover:text-gray-400">Profile</a>
            </div>
        </div>
    </nav> --}}
    <nav class="bg-purple-600 border-gray-200 py-3 dark:bg-purple-900">
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
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('project.index') }}"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('projects-list') }}"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">Our
                            Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('project-researchers') }}"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">Our
                            Reseachers</a>
                    </li>
                    <li>
                        <a href="{{ route('project-scholarships') }}"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                            Scholarships</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">Living
                            Lab</a>
                    </li>
                    <li>
                        <a href="{{ route('project-contacts') }}"
                            class="block text-white lg:text-black hover:text-gray-100 lg:bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
