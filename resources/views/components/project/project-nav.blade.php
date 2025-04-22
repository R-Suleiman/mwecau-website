<div class="bg-neutral-300 flex flex-col justify-center items-center">
    <h1 class="font-semibold uppercase text-4xl headerFavFont">Mwenge catholic University</h1>
    <h3 class="italic">"Lux Mundi - Light of the world"</h3>
</div>
<nav class="bg-neutral-300 shadow-2xl shadow-gray-600 border-gray-200 py-3 sticky top-0 z-50">
    <div class="flex items-center justify-between w-full max-w-screen-xl mx-auto px-4">
        <!-- Logo Section -->
        <a href="{{ route('project.index') }}" class="flex items-center space-x-1">
            <img src="{{ asset('img/mwecau.png') }}" class="h-12" alt="Mwecau Logo" />
            <img src="{{ asset('img/project/logo_vliruos.png') }}" class="h-12" alt="Vliruos Logo" />
            <img src="{{ asset('img/project/logo.svg') }}" class="h-6" alt="Ku Leuven Logo" />
        </a>

        <!-- Hamburger Button for Mobile -->
        <div class="lg:hidden">
            <button id="toggle-button" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center justify-end w-auto space-x-6 transition-all duration-700 ease-in-out"
            id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-1 lg:mt-0">
                <li>
                    <a href="{{ route('project.index') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Home
                    </a>
                </li>
                <li class="group relative">
                    <a href="{{ route('projects-list') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Vliruos Projects <i class="fas fa-chevron-down text-xs"></i>
                    </a>

                    @if ($projects)
                        <ul
                            class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50 rounded-lg">
                            @foreach ($projects as $project)
                                <li class="px-4 py-2 hover:bg-purple-100"><a
                                        href="{{ route('single-project', $project->name) }}">{!! $project->name !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>

                <li>
                    <a href="{{ route('project-researchers') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Our Reseachers</a>
                </li>

                <li class="group relative">
                    <a href="{{ route('projects-scholarships') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Programmes <i class="fas fa-chevron-down text-xs"></i>
                    </a>

                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50 rounded-lg">
                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="{{ route('project-capacity-building') }}">Capacity Building</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">Inclusive Outreach</a></li>

                        <li class="px-4 py-2 hover:bg-purple-100"><a
                                href="{{ route('project-network-partnership') }}">Network and Partnership</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('projects-publications') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Publications</a>
                </li>

                <li class="group relative">
                    <a href="{{ route('project-conferences') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Conferences <i class="fas fa-chevron-down text-xs"></i>
                    </a>

                    {{-- conferences dropdown --}}
                    @if ($projectConferences && $projectConferences->isNotEmpty())
                        @foreach ($projectConferences as $conference)
                            <ul
                                class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50 rounded-lg">
                                <li class="px-4 py-2 hover:bg-purple-100"><a
                                        href="{{ route('about-conference', $conference->name) }}">{!! $conference->name !!}</a>
                                </li>
                            </ul>
                        @endforeach

                    @endif
                </li>

                <li class="group relative">
                    <a href="{{ route('project-livinglab') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Innovations hub <i class="fas fa-chevron-down text-xs"></i>
                    </a>

                    <ul
                        class="w-max max-w-md opacity-0 invisible transform transition-all duration-500 ease-out  group-hover:opacity-100 group-hover:visible flex flex-col absolute -left-1/2 top-8 mt-3 bg-white shadow-lg text-purple-800 whitespace-normal break-words z-50 rounded-lg">
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">MWECAU
                                Agric LivingLab</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">Tafori Forest LivingLab</a></li>
                        <li class="px-4 py-2 hover:bg-purple-100"><a href="#">MWECAU
                                Animal Production Infrastucture</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('projects-contacts') }}"
                        class="block text-white hover:text-gray-100 lg:bg-blue-900 hover:bg-gray-800 px-1 py-1 rounded-lg border-transparent hover:border-transparent">
                        Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // JavaScript to handle toggle functionality with transition effect
    const toggleButton = document.getElementById('toggle-button');
    const menu = document.getElementById('mobile-menu-2');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('hidden'); // Toggle the hidden class
    });
</script>
