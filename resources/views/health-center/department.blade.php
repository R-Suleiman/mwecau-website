@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp
    {{-- image section --}}
    <section>
        <div class="w-full relative bg-cover bg-center bg-fixed overflow-hidden h-[480px]"
            style="background-image: url('{{ $departmentThumbnail }}')">
            {{-- background overlay --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-purple-700 opacity-70">

            </div>
            <div
                class="absolute inset-0 text-white flex justify-center items-center font-semibold tracking-wider text-6xl container mx-auto mt-52">
                <h1>{{ $department->name }}<h1>
            </div>
        </div>
    </section>

    {{-- breadcrumb --}}
    <div class="container mx-auto mt-24 pb-11">
        <nav aria-label="breadcrumb" class="w-max">
            <ol class="flex w-full flex-wrap items-center rounded-md bg-slate-50 px-4 py-2">
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                    <a href="#">Docs</a>
                    <span class="pointer-events-none mx-2 text-slate-800">
                        /
                    </span>
                </li>
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                    <a href="#">Components</a>
                    <span class="pointer-events-none mx-2 text-slate-800">
                        /
                    </span>
                </li>
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                    <a href="#">Breadcrumbs</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- description --}}
    <section>
        <div class="w-8/12 container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-9">
                <div class="w-full flex">
                    <div class="">
                        <img src="{{ $departmentThumbnail ? asset($departmentThumbnail) : asset('img/health-center/Depositphotos_11295039_original-280x215.jpg') }}"
                            alt="" class="object-cover rounded-md">

                        <div class="relative flex flex-col rounded-lg shadow-sm">
                            <nav class="flex min-w-[240px] flex-col gap-1 py-1.5">
                                <div role="button"
                                    class="text-slate-800 flex w-full items-center p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                    <i class="fa-solid fa-envelope"></i>

                                    healthcenter@mwecau.ac.tz
                                </div>
                                <div role="button"
                                    class="text-slate-800 flex w-full items-center p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                    <i class="fa fa-phone"></i>
                                    +255 753 028 309
                                    +255 656 792 404
                                </div>
                                <div role="button"
                                    class="text-slate-800 flex w-full items-center transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                    <i class="fa fa-phone"></i>
                                    +255 656 792 404
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h5 class="favFont pb-4 font-semibold text-purple-600 text-3xl">{{ $department->name }}</h5>
                    <p class="text-justify">
                        {{ $department->description }}</ </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    @if ($department->services->isNotEmpty())
        <section class="w-full px-4 py-10 lg:py-20 mb-4 flex flex-col items-center">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">{{ $department->name }} Services</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="my-4 p-4 w-full flex flex-wrap justify-center space-x-2">
                @foreach ($department->services as $service)
                    <div class="w-full sm:w-1/2 lg:w-1/4 my-4 shadow-md shadow-gray-300 rounded-md">
                        <a href="{{ route('health-center.service', $service->name) }}">
                            <div class="w-full mb-2 overflow-hidden">
                                @if ($service->thumbnail)
                                    <img src="{{ asset('/storage/images/health-center/services-images/' . $service->thumbnail) }}"
                                        alt="{{ $service->name }} picture"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110">
                                @else
                                    <img src="{{ asset('img/health-center/default-service-image.jpg') }}"
                                        alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110 rounded-lg">
                                @endif
                            </div>
                            <div class="w-full mt-2 p-2 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $service->name }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </section>
    @endif

    {{-- Doctors/staffs --}}
    @if ($department->doctors->isNotEmpty())
        <section class="w-full px-4 pt-10 lg:py-10 my-4 flex flex-col items-center">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">{{ $department->name }} Staff</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="my-4 p-4 w-full flex flex-wrap items-center justify-center lg:flex-row lg:space-x-8">
                @foreach ($department->doctors as $doctor)
                    <div class="w-full my-4 lg:my-0 sm:w-1/2 lg:w-1/4 border border-gray-300 rounded-md">
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

                        <div class="w-full mt-2 p-2 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold"> {{ $doctor->name }}
                            </h4>
                            <span class="my-4 text-gray-400 text-md"><i class="fa fa-stethoscope mr-1"></i>
                                {{ $department->name }}</span>
                            <p class="mt-2"> <strong>Carde: </strong>{{ $doctor->carde }}</p> <br>
                            <p> <strong>Education Level: </strong>{{ $doctor->education_level }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    {{-- //other departments --}}
    @if ($allDepartments)
        <section>
            <div class="container mx-auto mt-16 pb-32">
                <div class="w-max flex flex-col pb-8 items-center">
                    <h2 class="favFont text-purple-700 font-semibold tracking-wide text-2xl  ">
                        Other Department</h2>
                    <div class="border-2 border-purple-500 m-5 w-2/3"></div>
                </div>
                <div class="departmentSlider">
                    {{-- <div class=" w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"> --}}
                    @foreach ($allDepartments as $department)
                        <div class="shadow-lg rounded-xl">
                            <div class="flex justify-center items-center">
                                <img class="w-[400px] text-center rounded-xl object-cover overflow-hidden object-center"
                                    src="{{ asset('/storage/images/health-center/department-images/' . $department->thumbnail) }}"
                                    alt="">
                            </div>
                            <div class="mx-3 favFont p-4">
                                <h4 class="text-purple-500 font-semibold">
                                    <a
                                        href="{{ route('health-center.department', $department->name) }}">{{ $department->name }}</a>
                                </h4>
                                <p class="text-justify">
                                    {{ $department->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
