@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp

    <section class="bg--700">
        <div class="bg-gray-100">
            <div class="container mx-auto mt-12 pt-14 pb-11">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg--500 p-4">
                        <div class="md:mt-48">
                            <h3 class="text-gray-500 mb-11 font-semibold uppercase opacity-85">about us</h3>
                            <h1 class="favFont lg:text-6xl tracking-wider font-extralight text-wrap">Why We are the Best
                                <span
                                    class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-teal-500 to-purple-400">Health
                                    Center?</span>
                            </h1>
                        </div>
                        <div class="lg:mt-10 text-gray-600">
                            World-class rehabilitation solutions and individualized recovery plans, from acute care to
                            ongoing
                            outpatient treatment and beyond.
                        </div>
                    </div>
                    <div class="bg--500 p-4 text-white">
                        <img src="{{ asset('img/health-center/health-center-3.jpg') }}" alt=""
                            class="object-cover rounded-3xl select-none">
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-10 rounded-lg border-2 border-t-purple-600">
            <div class="relative lg:h-[600px] bg-fixed bg-no-repeat bg-cover"
                style="background-image: url('{{ asset('img/health-center/theater.jpg') }}');">
                <div class="absolute inset-0 bg-black opacity-60 pt-10"></div> <!-- Overlay for better text visibility -->
                <div class="container mx-auto relative z-10 py-20 content-center">
                    <h2 class="text-3xl font-bold text-center text-white mb-8">Our Departments</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        @if ($departments)
                            @foreach ($departments as $department)
                                <div class="bg-white rounded-lg shadow-lg p-6">
                                    <a href="{{ route('health-center.department', $department->name) }}">
                                        <h3 class="text-xl font-semibold mb-2">{{ $department->name }}</h3>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <div class="w-9/12 mx-auto mt-11">
            <div class=" mt-11">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg--500 p-4 order-last md:order-first">
                        <div class="bg--500 p-0 text-white">
                            <img src="{{ asset('img/health-center/health-center-5.jpg') }}" alt=""
                                class="object-cover rounded-3xl">
                        </div>
                    </div>
                    <div class="bg--500 p-4">
                        <div class="md:mt-48">
                            {{-- <h3 class="text-gray-500 mb-11 font-semibold uppercase opacity-85 text-wrap">Welcome to Renew Medical</h3> --}}
                            <h1 class="favFont text-6xl mb-8 font-extralight text-wrap">Welcome to Renew Medical</h1>
                        </div>
                        <div class="lg:mt-10 text-gray-600 md:order-1  flex items-center justify-center">
                            <p class="text-justify">
                                Welcome to Renew Medical, where your health and well-being are our utmost priorities. Our
                                dedicated team of experienced physicians, nurses, and healthcare professionals is committed
                                to providing compassionate, personalized care tailored to meet your unique needs.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full mt-11 h-height">
                <div class="w-full flex gap-2 mx-auto h-height">
                    <div class="w-1/2 order-last md:order-first h-full">
                        <div class="story w-full pt-20 h-full">
                            <div class="w-full">
                                <h3 class="favFont text-5xl mt-18 font-extralight tracking-wide mb-10 uppercase">Our Story
                                </h3>
                                <p class="text-gray-600 text-lg">
                                    Welcome to Our Health Center, where your health and well-being are our top priority. Our
                                    team of experienced
                                    physicians, nurses, and healthcare professionals is dedicated to delivering personalized
                                    medical services
                                    tailored to meet your unique needs.
                                </p>
                            </div>
                            <div class="w-full flex p-4 gap-3 mt-24">
                                <img src="{{ asset('img/health-center/health-center-3.jpg') }}" alt=""
                                    class="object-cover rounded-3xl w-1/2">
                                <img src="{{ asset('img/health-center/health-center-2.jpg') }}" alt=""
                                    class="object-cover rounded-3xl w-1/2">
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 p-4 md:order-1">
                        <img src="{{ asset('img/health-center/about-5.webp') }}" alt="" class="rounded-3xl w-full">

                    </div>
                </div>
            </div>

            {{-- our team --}}
            <div class="mt-28">
                <div class="text-center">
                    <h5 class="favFont mb-10 col-span-full text-gray-400 uppercase">Meet our team</h5>
                    <h1 class="favFont mb-20 text-purple-800 font-light text-6xl">Our Professional Team</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
                    @if ($team->isNotEmpty())
                        @foreach ($team as $member)
                            <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg">
                                <div
                                    class="overflow-hidden group relative m-2.5 rounded-md h-80 flex justify-center items-center">
                                    @if ($member->profile_picture)
                                        <img src="{{ asset('/storage/images/health-center/doctors-profile-pictures/' . $member->profile_picture) }}"
                                            alt="{{ $member->name }} Profile picture"
                                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                    @else
                                        <img src="{{ asset('img/health-center/default-profile-avatar.jpg') }}"
                                            alt="service image"
                                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                    @endif
                                    <!-- Social Media Icons on Hover -->
                                    <div
                                        class="absolute inset-0 flex justify-center items-center space-x-4 bg-gradient-to-t from-emerald-200 to-transparent bg-opacity-90  opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        <a href="#"><i
                                                class="fab fa-facebook-f text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                        <a href="#"><i
                                                class="fab fa-twitter text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                        <a href="#"><i
                                                class="fab fa-instagram text-center text-emerald-400 text-xl w-[40px] h-[40px] rounded-full bg-white hover:bg-emerald-100 px-2 py-2"></i></a>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h4 class="mb-1 text-xl font-semibold text-slate-800">
                                        {{ $member->name }}
                                    </h4>
                                    <p class="text-sm font-semibold text-slate-500">
                                        {{ $member->department->name }}
                                    </p>

                                </div>
                                <div class="p-6 pt-2 gap-x-72 flex">
                                    <button class="text-gray-800 hover:text-pink-700 font-semibold">
                                        Read More
                                    </button>
                                    <a href="#">
                                        <i
                                            class="fa fa-arrow-right text-center text-white text-xl w-[30px] h-[30px] rounded-full bg-emerald-400 hover:bg-pink-600 transition-all ease-in px-2 py-2">
                                        </i>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="flex justify-center items-center p-6 pt-12">
                    <button
                        class="min-w-56 font-semibold rounded-xl bg-white py-4 px- px-9 border-2 border-gray-600 text-gray-900 hover:border-transparent text-center hover:text-white translate-x-10  transition  ease-in shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-emerald-400"
                        type="button">
                        View All Doctors
                    </button>
                </div>
            </div>

        </div>

        {{-- services slider --}}
        @if ($services->isNotEmpty())
            <div class="bg-gray-100 mt-28">
                <div class="text-center">
                    <h3 class="favFont mb-10 uppercase pt-20 text-gray-400">Area Of Speciality</h3>
                    <span class="favFont text-4xl text-wrap">We can help you with the following <br>
                        conditions:</span>
                </div>

                <div class="mt-11 w-full">
                    <div class="center w-full flex gap-5">
                        @foreach ($services as $service)
                            <div class="w-full mx-4">
                                <div class="relative w-full mx-2 h-[550px] rounded-3xl overflow-hidden group">
                                    @if ($service->thumbnail)
                                        <img src="{{ asset('/storage/images/health-center/services-images/' . $service->thumbnail) }}"
                                            alt="{{ $service->name }} picture" class="object-cover w-full h-full">
                                    @else
                                        <img src="{{ asset('img/health-center/default-service-image.jpg') }}"
                                            alt="service image" class="object-cover w-full h-full">
                                    @endif
                                    <!-- Overlay with Icons and Text -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-transparent to-transparent group-hover:bg-gradient-to-t group-hover:from-pink-500 bg-opacity-90 transition-all duration-500">
                                        <div class="absolute bottom-4 left-4">
                                            <div class="p-6 rounded-xl border-transparent bg-gray-700 bg-opacity-80">
                                                <p class="favFont uppercase text-white font-semibold tracking-wider">
                                                    {{ $service->name }}
                                                </p>
                                                <p class="text-gray-100">{!! $service->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if ($testimonials->isNotEmpty())
            <div class="mt-36 m-11">
                <div class="favFont text-center">
                    <h1 class="text-6xl font-extralight">What Our Patients Say</h1>
                    <p class="text-md mt-6">Our patients are our greatest asset. We are proud of the trust they have placed
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-{{ $testimonials->count() }} gap-8 mt-16 px-4">
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="rounded-3xl text-white shadow-xl shadow-green-100 border lg:h-[430px] border-gray-300 p-7 pb-16 max-w-sm mx-auto">
                            <!-- Star Rating -->
                            <div class="flex justify-center items-center space-x-2 py-4">
                                <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                                <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                                <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                                <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                                <i class="fa-solid fa-star text-emerald-400 text-lg"></i>
                            </div>
                            <!-- Testimonial Text -->
                            <div class="text-center mt-6">
                                <p class="text-gray-700 italic">
                                    {!! $testimonial->testimonial_description !!}
                                </p>
                            </div>
                            <!-- User Information -->
                            <div class="flex justify-center items-center mt-6 space-x-3">
                                <img src="{{ asset('img/health-center/testimonials-5.webp') }}" alt="Julius T."
                                    class="h-10 w-10 rounded-full">
                                <strong class="text-gray-800">{{ $testimonial->testifier_name }}</strong>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection
