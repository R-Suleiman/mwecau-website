{{-- sticky, change subnavs from opacity to block --}}
<nav class="bg-purple-600 sticky p-4 top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4 text-white text-lg font-semibold">
            <img src="{{ asset('img/mwecau.png') }}" class="h-16" alt="Mwecau Logo" />
        </div>

        <div class="md:flex justify-center items-center">
            <ul class="hidden lg:flex space-x-3 text-white">
                <li>
                    <a href="{{ route('project.index') }}"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Home
                    </a>
                </li>
                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        About Us
                    </a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Welcome Message from the Director</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Directorate Management</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Our Staff</a></li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Admissions
                    </a>

                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Postgraduate Programmes</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Application Procedures</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Joining Instruction</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Fee Structure</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Postgraduate Students Forms</a></li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                       Research
                    </a>

                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Projects</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Programmes</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Policies</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Guidelines</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Report Research Progress</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Opportunities</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Research Awards</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Partner With Us</a></li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Publications
                    </a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Journals</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Conference Proceedings </a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Google Scholar  </a></li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Innovations
                    </a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">MWECAU Innovations Hub</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">MWECAU Innovations Database </a></li>
                    </ul>
                </li>

                <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Consultancy
                    </a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100 w-full text-wrap overflow-hidden"><a
                                href="#" class="text-wrap">Technology Transfer, Consultancy and Continuing Education (TCCU)</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="#">Consultancy Policy and Guidelines 2024 </a></li>
                    </ul>
                </li>

               <li class="group relative">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Documents
                    </a>
                    <ul
                        class="w-max opacity-0 transform transition-opacity duration-500 translate-y-1 group-hover:opacity-100  group-hover:translate-y-0 absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">Policies</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">Regulations and Guidelines </a></li>
                    </ul>
                </li>
            </ul>
        </div>

        {{-- <div class="ml-auto flex items-center space-x-4">
            <a href="#" class="text-white hover:text-gray-400">Search</a>
            <a href="#" class="text-white hover:text-gray-400">Profile</a>
        </div> --}}
    </div>
</nav>
