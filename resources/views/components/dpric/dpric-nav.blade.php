{{-- sticky, change subnavs from opacity to block --}}
<nav class="bg-purple-600 sticky p-4 top-0 w-full z-50">
    <div class="container mx-auto flex flex-col lg:flex-row justify-between lg:items-center">
        <div class="flex items-center justify-between space-x-4 text-white text-lg font-semibold">
            <a href="{{ route('index') }}"><img src="{{ asset('img/mwecau.png') }}" class="h-16" alt="Mwecau Logo" /></a>
            <div class="open-nav text-white text-2xl w-6 cursor-pointer block lg:hidden">
                <i class="fa fa-align-justify"></i>
            </div>
            {{-- doesn't hide when large screen is resised: Also RESIZE THE WINDOW AND LOOK AT THE NAV GEHAVIOUR --}}
            <div class="close-nav text-white text-2xl w-6 cursor-pointer hidden">
                <i class="fa fa-times"></i>
            </div>
        </div>

        <div class="nav hidden lg:flex justify-center items-center h-screen lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-visible">
            <ul class="flex flex-col items-center my-6 lg:my-0 lg:flex-row lg:space-x-3 text-white">
                <li class="my-4 lg:my-0">
                    <a href="{{ route('dpric.index') }}"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Home
                    </a>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        About Us
                    </a>
                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.welcome-message')}}">Welcome Message from the Director</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.directorate-management')}}">Directorate Management</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.directorate-staff')}}">Our Staff</a></li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Admissions
                    </a>
                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.directorate-programmes')}}">Postgraduate Programmes</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.application-procedures')}}">Application Procedures</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.joining-instruction')}}">Joining Instruction</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">Fee Structure</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.student-forms')}}">Postgraduate Students Forms</a></li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Research
                    </a>

                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.research-projects')}}">Research Projects</a></li>
                        {{-- <li class="px-4 py-2 hover:bg-purple-100"><a href="{{route('dpric.research-programmes')}}">Research Programmes</a></li> --}}
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.research-policies') }}">Research Policies</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.research-guidelines') }}">Research Guidelines</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.report-research-progress') }}">Report Research Progress</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.research-opportunities') }}">Research Opportunities</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.research-awards') }}">Research Awards</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.partner-with-us') }}">Partner With Us</a></li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Publications
                    </a>
                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.journals') }}">Journals</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.conference-proceedings') }}">Conference Proceedings</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG="
                            target="_blank">Google Scholar</a></li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Innovations
                    </a>
                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.innovations-hub') }}">MWECAU Innovations Hub</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">MWECAU Innovations Database </a>
                        </li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Consultancy
                    </a>

                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute lg:right-0 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100">
                            <a href="{{ route('dpric.tcce') }}" class="block">Technology Transfer, Consultancy and Continuing Education
                                (TCCU)</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-purple-100">
                            <a href="{{ route('dpric.consultancy-policy-and-guidelines') }}">Consultancy Policy and Guidelines 2024</a>
                        </li>
                    </ul>
                </li>
                <li class="group relative my-4 lg:my-0">
                    <a href="#"
                        class="hover:text-gray-100 bg-purple-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300 ease-in-out px-3 py-2 rounded-lg border-transparent hover:border-transparent">
                        Documents
                    </a>

                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute lg:right-0 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.policies') }}">Policies</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="{{ route('dpric.regulations-and-guidelines') }}">Regulations and Guidelines</a></li>
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
