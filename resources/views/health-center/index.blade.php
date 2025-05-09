@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'home';
    @endphp

    {{-- Welcome --}}
    <section class="w-10/12 mx-auto p-4 my-4">
        <h2 class="text-2xl text-default-head text-center my-2">Welcome to Mwenge Catholic University Health Center</h2>
        <p class="text-lg text-default-text my-2 text-justify">
            Mwenge Catholic University Health Center is owned and run by Mwenge Catholic University. The center was
            inaguated in 2018. The facility offers Medical Service to students, staff and community of uru south Ward in
            Moshi Rural District Council. The center is located on the Campus within easy reach of student and community.

            The center is registered under the Ministry of Health with registration No: 034212 and it offers services in
            accordance with Ministry of Health requirements. The Faciltiy operates on 24 hours basis with average minimum
            daily outpatient attendance of 90-120 patients
            Reproductive and child health, Care and Treatment clinic (CTC) services are conducted form Monday through
            Friday.

            The Facility has s functioning Laboratory, Main Operating Theater, Pharmacy and delivery room with 2 delivery
            beds. The Center has also surgical wards with capacity of 24 beds, Medical wards with capacity of 24 beds,
            Dental Unity with one Dental Chair, Minor surgical operation including cut wounds and stiching. Inpatient
            services are available for 24 hours and referral system is in place.

            Currently the Mwenge Catholic Health Center is constructing CT Scan and X-Ray rooms. The X-Ray rooms is expected
            to be completed in this final year 2024/25. Also the center has ultrasound machine for obsterics and
            gynecology,c abdominal and pelvic organs muscle and tendos or their heart or blood vessels and echocardiogram.
        </p>
    </section>

    {{-- Mission/Vision --}}
    <section class="w-full flex flex-col md:flex-row my-4">
        <div class="w-1/3 my-4">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-md shadow-blue-800 rounded-lg">
                <i class="fa fa-bullseye text-3xl text-default-head my-2"></i>
                <h3 class="text-2xl text-default-head my-2">Our Mission</h3>
                <p class="text-lg text-default-text text-justify">To provide holistic scientific sound medical, physical,
                    mental and spriritual care appropriate to scholara and neighbouring community</p>
            </div>
        </div>
        <div class="w-1/3 my-4">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-md shadow-blue-800 rounded-lg">
                <i class="fa fa-eye text-3xl text-default-head my-2"></i>
                <h3 class="text-2xl text-default-head my-2">Our Vision</h3>
                <p class="text-lg text-default-text text-justify">Oour vision is to build a healthly community served with
                    compassion through n competent health care providers in a participatory approach enabling learning and
                    carrier development in a positive manner.</p>
            </div>
        </div>
        <div class="w-1/3 my-4">
            <div class="w-11/12 mx-auto p-4 flex flex-col items-center shadow-md shadow-blue-800 rounded-lg">
                <i class="fa fa-pen text-3xl text-default-head my-2"></i>
                <h3 class="text-2xl text-default-head my-2">Core Values</h3>
                <p class="text-lg text-default-text text-justify">1. We are commited stewards entrusted to serve all people
                    with integrity, compassion and love <br>
                    2. We are commited to provide services that are affordable and accessible to all. <br>

                    3. We protect dignity of human life irrespective of tribe, culture and belief.
                </p>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="w-full px-4 py-10 lg:py-20 mb-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Our Services</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($services->isNotEmpty())
            <div class="my-4 p-4 w-full flex flex-col items-center lg:flex-row lg:space-x-8">
                @foreach ($services->take(4) as $service)
                    <div class="w-full my-4 lg:my-0 lg:w-1/{{ $services->count() }}  shadow-sm shadow-blue-800 rounded-lg">
                        <a href="{{ route('health-center.service', $service->name) }}">
                            {{-- <a href="#"> --}}
                            <div class="w-full mb-2 relative bg-blue-900">
                                <div class="w-full overflow-hidden rounded-tr-full">
                                    @if ($service->thumbnail)
                                        <img src="{{ asset('/storage/images/health-center/services-images/' . $service->thumbnail) }}"
                                            alt="{{ $service->name }} picture"
                                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110 object-cover">
                                    @else
                                        <img src="{{ asset('img/health-center/default-service-image.jpg') }}"
                                            alt="service image"
                                            class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110 object-cover">
                                    @endif
                                </div>
                                <div class="w-fit absolute right-2 top-2">
                                    <i class="fa fa-heartbeat text-4xl text-white p-2 rounded-full ml-2"></i>
                                </div>
                            </div>
                            <div class="w-full mt-2 p-4 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $service->name ?? 'Service Name' }}</h4>
                                <h5 class="font-semibold text-gray-500">
                                    {{ $service->department->name ?? 'Department Name' }}</h5>
                                <p>{!! $service->description !!}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-4 md:mt-0">
            <x-dpric-btn btnLink='/health-center/services'>More Services</x-dpric-btn>
        </div>
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
                                @if ($newsEvent->image)
                                    <img src="{{ asset('/storage/images/health-center/news-events-images/' . $newsEvent->image) }}"
                                        alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @else
                                    <img src="{{ asset('img/health-center/default-service-image.jpg') }}"
                                        alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @endif
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
    <section class="flex flex-col lg:flex-row mt-4 bg-blue-900">
        <div class="w-full lg:w-1/2 h-full">
            <img src="{{ asset('img/health-center/health-center-2.jpg') }}" alt=""
                class="w-full h-full object-cover">
        </div>
        <div class="w-full lg:w-1/2 p-8 text-blue-100 text-justify">
            <h3 class="uppercase mb-2 text-4xl">Our Philosophy</h3>
            <p class="py-2 text-justify text-lg">To provide holistic scientific sound medical, physical,
                mental and spriritual care appropriate to scholara and neighbouring community
            </p>
        </div>
    </section>

    {{-- Departments --}}
    <section class="w-full px-4 py-10 lg:py-20 mb-4 flex flex-col items-center bg-neutral-100">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Health Center Departments</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        <div class="my-4 p-4 w-full flex flex-col items-center lg:flex-row lg:space-x-8">
            @if ($departments->isNotEmpty())
                @foreach ($departments->take(3) as $department)
                    <div class="w-full my-4 lg:my-0 lg:w-1/3 border border-gray-300 rounded-lg">
                        <a href="{{ route('health-center.department', $department->name) }}">
                            <div class="w-full mb-2 overflow-hidden">
                                @if ($department->thumbnail)
                                    <img src="{{ asset('storage/images/health-center/department-images/' . $department->thumbnail) }}"
                                        alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @else
                                    <img src="{{ asset('img/health-center/default-service-image.jpg') }}"
                                        alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @endif
                            </div>
                            <div class="w-full mt-2 p-4 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $department->name ?? 'Department Name' }}
                                </h4>
                                <p>{!! $department->description !!}</< /p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No departments available.</p>
            @endif
        </div>
    </section>

    {{-- Doctors --}}
    <section class="w-full px-4 pt-10 lg:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4">
            <h2 class="uppercase text-2xl text-center text-blue-800">Our Staff</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        @if ($doctors->isNotEmpty())
            <div class="my-4 p-4 w-full flex flex-wrap items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($doctors->take(6) as $doctor)
                    <div class="w-full my-4 lg:my-0 lg:w-1/4 border border-gray-300 rounded-md">

                        <div class="relative w-full mb-2 overflow-hidden group">
                            @if ($doctor->profile_picture)
                                <img src="{{ asset('/storage/images/health-center/doctors-profile-pictures/' . $doctor->profile_picture) }}"
                                    alt="{{ $doctor->name }} Profile picture"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            @else
                                <img src="{{ asset('img/health-center/default-profile-avatar.jpg') }}" alt="service image"
                                    class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                            @endif

                            <div
                                class="absolute bottom-0 w-full p-2 bg-purple-500 opacity-90 text-center transform translate-y-full transition-transform duration-300 ease-out group-hover:translate-y-0">
                                <a href="facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                                <a href="x.com" class="text-white mx-2"><i class="fab fa-x"></i></a>
                                <a href="instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="mail" class="text-white mx-2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="w-full mt-2 p-4 text-justify flex flex-col">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                {{ $doctor->name ?? "Doctor's Name" }}</h4>
                            <span class="text-gray-400 text-md"><i class="fa fa-user-md mr-1"></i> Doctor's
                                Designation</span>
                            <span class="text-gray-400 text-md"><i class="fa fa-stethoscope mr-1"></i>
                                {{-- @if ($doctor->department) --}}
                                {{ $doctor->department->name }}
                                {{-- @endif --}}
                            </span>

                            @if ($doctor->phones && $doctor->phones->isNotEmpty())
                                <p class="mt-2">Contacts
                                    @foreach ($doctor->phones->take(1) as $phone)
                                        <span class="text-gray-400 text-sm"> {{ $phone->phone_number }}</span>
                                    @endforeach
                                </p>
                            @endif
                        </div>
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
                            <p class="text-center my-4 italic"> <i class="fa fa-quote-left text-2xl mr-1"></i>
                                {!! $testimonial->testimonial_description !!}
                                <i class="fa fa-quote-right text-2xl ml-1"></i>
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
