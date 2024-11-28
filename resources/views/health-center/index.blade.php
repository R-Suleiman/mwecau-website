@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'home';
    @endphp

    {{-- Services --}}
    <section class="w-full px-4 py-10 lg:py-20 mb-4 flex flex-col items-center bg-neutral-100">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Our Services</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($services->isNotEmpty())
            <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($services->take(4) as $service)
                    <div class="w-full my-4 lg:my-0 lg:w-1/{{ $services->count() }} border border-gray-300">
                        <a href="">
                            <div class="w-full mb-2 overflow-hidden">
                                <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $service->name ?? 'Service Name' }}</h4>
                                <h5 class="font-semibold text-gray-500">
                                    {{ $service->department->name ?? 'Department Name' }}</h5>
                                <p>{!! $service->description !!}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    {{-- News --}}
    @if ($newsEvents)
        <section class="w-full px-4 py-10 my-4 flex flex-col items-center">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">Latest News</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($newsEvents as $newsEvent)
                    <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                        <a href="{{ route('health-center.view-event', $newsEvent->title) }}">
                            <div class="w-full mb-2 overflow-hidden">
                                <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $newsEvent->title }}</h4>
                                <span class="my-4 text-gray-400 text-sm"><i class="fa fa-calendar"></i>
                                    {{ \Carbon\Carbon::parse($newsEvent->date)->format('D, M Y') }}</span>
                                </span>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quis
                                    praesentium
                                    nostrum</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    {{-- Philosophy --}}
    <section class="lg:h-phil-height flex flex-col lg:flex-row items-center lg:items-start mt-4">
        <div class="w-full lg:w-1/2 h-full">
            <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" alt="" class="h-full">
        </div>
        <div class="w-full lg:w-1/2 p-8 text-white text-justify bg-blue-800 h-full">
            <h3 class="uppercase mb-2 text-4xl">Our Philosophy</h3>
            <p class="py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda labore magni alias laborum
                excepturi sit illo molestiae voluptas dignissimos laboriosam consectetur perspiciatis et libero unde
                inventore, beatae debitis maiores aperiam.</p>
            <p class="py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda labore magni alias laborum
                excepturi sit illo molestiae voluptas dignissimos laboriosam consectetur perspiciatis et libero unde
                inventore, beatae debitis maiores aperiam.</p>
            <p class="py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda labore magni alias laborum
                excepturi sit illo molestiae voluptas dignissimos laboriosam consectetur perspiciatis et libero unde
                inventore, beatae debitis maiores aperiam.</p>
        </div>
    </section>

    {{-- Departments --}}
    <section class="w-full px-4 py-10 lg:py-20 mb-4 flex flex-col items-center bg-neutral-100">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Hospital Departments</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
            @if ($departments->isNotEmpty())
                @foreach ($departments->take(4) as $department)
                    <div class="w-full my-4 lg:my-0 lg:w-1/{{ $departments->count() }} border border-gray-300">
                        <a href="">
                            <div class="w-full mb-2 overflow-hidden">
                                <img src="{{ asset('img/campus-life/spirtual4.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $department->name ?? 'Department Name' }}
                                </h4>
                                <p>{!! $department->description !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No departments available.</p>
            @endif
        </div>
        </div>
    </section>

    {{-- Doctors --}}
    <section class="w-full px-4 pt-10 lg:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Our Doctors</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($doctors->isNotEmpty())
            <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($doctors as $doctor)
                    <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300">
                        <a href="">
                            <div class="relative w-full mb-2 overflow-hidden group">
                                <img src="{{ asset('img/campus-life/spirtual5.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                <div
                                    class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                    <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                    <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                    <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                    <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                    <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>

                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $doctor->name ?? "Doctor's Name" }}
                                </h4>
                                <span class="my-4 text-gray-400 text-sm"><i
                                        class="fa fa-calendar"></i>{{ $doctor->carde }}</span> <br>
                                <span class="my-4 text-gray-400 text-sm"><i
                                        class="fa fa-calendar"></i>{{ $doctor->department->name }}</span>
                                @if ($doctor->phones && $doctor->phones->isNotEmpty())
                                    <p class="mt-2">Contacts
                                        @foreach ($doctor->phones->take(1) as $phone)
                                            <span class="text-gray-400 text-sm"> {{ $phone->phone_number }}</span>
                                        @endforeach
                                    </p>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    {{-- Testimonials --}}
    @if ($testimonials->isNotEmpty())
        <section class="w-full px-4 py-0 lg:py-10 my-2 lg:my-4 flex flex-col items-center">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">Testimonials</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="testimonials w-full p-4">
                <div class="w-full">
                    @foreach ($testimonials as $testimonial)
                        <div class="w-full lg:w-3/5 mx-auto flex flex-col items-center text-gray-500 my-4">
                            <p class="text-center my-4 italic"> <i class="fa fa-quote-left text-sm mr-1"></i>
                                {!! $testimonial->testimonial_description !!}
                                <i class="fa fa-quote-right text-sm ml-1"></i>
                            </p>
                            <span
                                class="font-semibold italic">{{ $testimonial->testifier_name ?? 'Testifier Name' }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
