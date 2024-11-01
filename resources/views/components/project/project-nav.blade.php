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
                        <a href="{{ route('project-list') }}"
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

            {{-- <div class="ml-auto flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-400">Search</a>
                <a href="#" class="text-white hover:text-gray-400">Profile</a>
            </div> --}}
        </div>
    </nav>
