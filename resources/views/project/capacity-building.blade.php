@extends('layouts.project.project-layout')

@section('content')
    {{-- students --}}
    @if ($projectStudents && $projectStudents->isNotEmpty())
        <section class="py-12">
            <div class="w-11/12 mx-auto">
                <div class="flex flex-col flex-wrap md:flex-row justify-center items-center gap-5">
                    {{-- student card --}}
                    @foreach ($projectStudents as $student)
                        <div
                            class="w-full md:w-1/4 rounded-2xl transition transform ease-in-out duration-700 shadow-2xl hover:shadow-none hover:border hover:border-blue-600">

                            <div class="p-6 w-full">
                                @if ($student->profile_picture)
                                    <a href="{{ route('tema-member-profile-description', $student->name) }}">
                                @endif
                                <img src="{{ asset('/storage/images/projects/images/team-member-profile-pictures/' . $student->profile_picture) }}"
                                    class="object-cover h-64 w-full rounded-lg">
                                </a>
                                <div class="pt-6">
                                    <a href="{{ route('tema-member-profile-description', $student->name) }}">
                                        <h3><span class="font-semibold">{{ $student->name }}</span></h3>
                                    </a>
                                    <h3><span class="text-gray-500">{{ $student->institute }}</span></h3>
                                    <p class="pt-3 text-white">{!! Str::limit($student->bio, 50) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @endif

    {{-- //Testimonials --}}
    <section class=" mt-16">
        <div class="max-w-6xl mx-auto w-full">
            <div class="max-w-2xl mx-auto w-full text-center">
                <h1 class="text-blue-800 text-4xl font-extrabold headerFavFont">{!! $testimonialContents->section_header !!}</h1>
            </div>
            <div class="w-full">
                <p class="text-gray-600 text-lg leading-relaxed mt-6">
                    {!! $testimonialContents->section_description !!}
                </p>
            </div>
            {{-- //cards --}}
            @if ($testimonials->isNotEmpty())
                <div class="mt-6 font-[sans-serif]">
                    <div class="max-w-6xl max-auto">
                        @if ($testimonials->count() == 1)
                            @foreach ($testimonials as $testimonial)
                                <div class="grid md:grid-cols-1 md:gap-6 max-md:gap-10 max-md:justify-center mt-16">
                                    <div class="relative rounded-xl border-2 h-auto shadow-xl p-7">
                                        <div
                                            class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-green-500 hover:bg-purple-800 text-white border-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                                viewBox="0 0 475.082 475.081">
                                                <path
                                                    d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </div>

                                        <div class="flex items-center">
                                            @if ($testimonial->testifier_profile_picture != null)
                                                <img src="{{ asset('/storage/images/projects/images/testimonials/profile-pictures/' . $testimonial->testifier_profile_picture) }}"
                                                    class="w-14 h-14 rounded-full shadow-xl border-2 border-pink-500"
                                                    alt="">
                                            @endif

                                            <div class="ml-4">
                                                <h4 class="font-semibold">{{ $testimonial->testifier_initials }}
                                                    {{ $testimonial->testifier_name }}</h4>
                                                <h5 class="font-semibold">{!! $testimonial->testifier_occupation !!}</h5>
                                                <div class="flex space-x-3 mt-2">
                                                    <i class="fa-sharp fa-solid fa-star text-green-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-green-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-green-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-green-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-green-400"></i>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-md text-center leading-relaxed favFont italic">
                                                    {!! Str::limit($testimonial->testimonial_description, 600) !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @elseif ($testimonials->count() == 2)
                            @foreach ($testimonials as $testimonial)
                                <div class="grid md:grid-cols-2 md:gap-6 max-md:gap-10 max-md:justify-center mt-16">
                                    <div class="relative rounded-xl border-2 h-auto shadow-xl p-7">
                                        <div
                                            class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                                viewBox="0 0 475.082 475.081">
                                                <path
                                                    d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </div>

                                        <div class="flex items-center">
                                            <img src="{{ asset('storage/images/projects/images/testimonials/profile-pictures/' . $testimonial->testifier_profile_picture) }}"
                                                class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent"
                                                alt="">
                                            <div class="ml-4">
                                                <h4 class="font-semibold">{{ $testimonial->testifier_initials }}
                                                    {{ $testimonial->testifier_name }}</h4>
                                                <h5 class="font-semibold">{!! $testimonial->testifier_occupation !!}</h5>
                                                <div class="flex space-x-3 mt-2">
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-6">
                                            <p class="text-md text-justify leading-relaxed favFont">
                                                {!! Str::limit($testimonial->testimonial_description) !!}
                                            </p>
                                            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit.
                                                Rem expedita sed quidem
                                                atque. Excepturi dolorem eum quibusdam optio consequatur corrupti non magni
                                                cumque similique, modi eos quia maxime iusto? </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @elseif ($testimonials->count() == 3)
                            @foreach ($testimonials as $testimonial)
                                <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-md:justify-center mt-16">
                                    <div class="relative rounded-xl border-2 h-auto shadow-xl p-7">
                                        <div
                                            class="w-16 h-16 rounded-full absolute -top-5 -right-5 flex items-center justify-center bg-purple-950 hover:bg-purple-800 text-white border-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white"
                                                viewBox="0 0 475.082 475.081">
                                                <path
                                                    d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </div>

                                        <div class="flex items-center">
                                            <img src="{{ asset('storage/images/projects/images/testimonials/profile-pictures/' . $testimonial->testifier_profile_picture) }}"
                                                class="w-14 h-14 rounded-full shadow-xl border-2 border-transparent"
                                                alt="">
                                            <div class="ml-4">
                                                <h4 class="font-semibold">{{ $testimonial->testifier_initials }}
                                                    {{ $testimonial->testifier_name }}</h4>
                                                <h5 class="font-semibold">{!! $testimonial->testifier_occupation !!}</h5>
                                                <div class="flex space-x-3 mt-2">
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                    <i class="fa-sharp fa-solid fa-star text-purple-400"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-6">
                                            <p class="text-md text-justify leading-relaxed favFont">
                                                {!! Str::limit($testimonial->testimonial_description) !!}
                                            </p>
                                            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit.
                                                Rem expedita sed quidem
                                                atque. Excepturi dolorem eum quibusdam optio consequatur corrupti non magni
                                                cumque similique, modi eos quia maxime iusto? </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
