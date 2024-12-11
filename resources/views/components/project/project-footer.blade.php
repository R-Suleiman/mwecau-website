    <section>
        <footer class="relative mt-32 w-full bg-gradient bg-gradient-to-r from-blue-950 text-white to-blue-700">
            <div class="container mx-auto">
                <div class="text-center p-8">
                    <h1 class="text-3xl headerFavFont">Quick Links</h1>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-5">
                    <div class="text-center">
                        <h1 class="favFont text-xl font-semibold mb-4">Projects</h1>
                        @if ($projectFooter->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach ($projectFooter as $project)
                                    <li>
                                        <a href="{{ route('single-project', $project->name) }}"
                                            class="flex items-center text-white text-md hover:text-yellow-500 transition-colors">
                                            <i
                                                class="fa fa-arrow-right text-yellow-700 bg-gray-300 rounded-full p-1 mr-2"></i>
                                            <span>{{ $project->name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-400 italic">No projects available at the moment.</p>
                        @endif
                    </div>

                    {{-- our Partner Institution --}}
                    <div class="">
                        <h1 class="font-semibold text-white text-center text-xl mb-4">Partner Institutions</h1>
                        @if ($projectPartners->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach ($projectPartners as $partner)
                                    <li>
                                        <a href="{{ $partner->link }}" target="_blank"
                                            class="block text-white text-md hover:text-slate-500 transition-colors">
                                            <i
                                                class="fa fa-building text-yellow-700 bg-gray-300 rounded-full p-1 mr-2"></i>
                                            {{ $partner->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="favFont font-semibold text-white text-md italic mb-3">
                                We collaborate with various institutions to enhance our projects and initiatives.
                            </p>
                        @endif
                    </div>

                    {{-- publications --}}
                    <div>
                        <h1 class="font-semibold text-white text-center text-xl mb-4">Publications</h1>
                    </div>
                    {{-- conferences --}}
                    <div>
                        <h1 class="text-center text-xl favFont font-semibold text-white mb-4">Conferences</h1>
                        @if ($projectConferences->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach ($projectConferences as $conference)
                                    <li>
                                        <a href="{{ route('about-conference', $conference->name) }}"
                                            class="flex items-center text-white text-md hover:text-yellow-500 transition-colors">
                                            <i
                                                class="fa fa-arrow-right text-yellow-700 bg-gray-300 rounded-full p-1 mr-2"></i>
                                            <span>{{ Str::limit($conference->name, 70) }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-white italic text-lg">No conferences available at the moment. Check back
                                later for updates.</p>
                        @endif
                    </div>
                    {{-- contacts --}}
                    <div>
                        <h1 class="font-semibold text-white text-center text-xl mb-4">Contacts</h1>
                        <ul>
                            <li>
                                <a href="#"
                                    class="flex items-center text-white text-md hover:text-yellow-500 transition-colors">
                                    <i class="fa fa-phone text-yellow-700 bg-gray-300 rounded-full p-1 mr-2"></i>
                                    <span>+255 27 297 4110</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div
                    class="flex flex-col items-center justify-center w-full py-4 mt-12 border-t border-slate-200 md:flex-row md:justify-between">
                    <p class="block mb-4 text-sm text-center text-white md:mb-0 favFont">
                        Copyright © 2024
                        <a href="https://mwecau.ac.tz/">Mwenge Catholic university</a>. All
                        Rights Reserved.
                    </p>
                </div>
            </div>
        </footer>
    </section>
