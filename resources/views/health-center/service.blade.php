@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp
    {{-- image section --}}
    <section>
        <div class="w-full relative overflow-hidden">
            @if ($service->thumbnail)
                <img class="w-full object-cover object-center h-96"
                    src="{{ asset('/storage/images/health-center/services-images/' . $service->thumbnail) }}" alt="">
            @else
                <img class="w-full object-cover object-center h-96"
                    src="{{ asset('img/health-center/default-service-image.jpg') }}" alt="">
            @endif
            <div
                class="favFont rounded-2xl border-transparent bg-opacity-60 bg-gray-600 text-white absolute inset-0 flex justify-center items-center font-extrabold tracking-wide text-6xl container mx-auto mt-52">
                <h1>{{ $service->name }}</h1>
            </div>
        </div>
    </section>

    {{-- breadcrumb --}}
    {{-- <div class="container mx-auto mt-24 pb-11">
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
    </div> --}}

    {{-- description --}}
    <section>
        <div class="w-8/12 container mx-auto mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-9">
                <div class="w-full flex">
                    <div class="">
                        @if ($service->thumbnail)
                            <img class="w-full object-cover object-center h-96"
                                src="{{ asset('/storage/images/health-center/services-images/' . $service->thumbnail) }}"
                                alt="">
                        @else
                            <img class="w-full object-cover object-center h-96"
                                src="{{ asset('img/health-center/default-service-image.jpg') }}" alt="">
                        @endif
                    </div>
                </div>
                <div class="">
                    <h5 class="favFont pb-3 font-semibold text-purple-600 text-3xl">{{ $service->name }}</h5>
                    @if ($service->department)
                        <h6 class="text-purple-500 pb-3 font-semibold">{{ $service->department->name }}</h6>
                    @endif
                    <p class="text-justify">
                        {{ $service->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- //other departments --}}
    @if ($relatedServices->isNotEmpty())
        <section>
            <div class="container mx-auto mt-16 pb-32">
                <div class="w-max flex flex-col pb-8 items-center">
                    <h2 class="favFont text-purple-700 font-semibold tracking-wide text-2xl  ">
                        Other Service</h2>
                    <div class="border-2 border-purple-500 m-5 w-2/3"></div>
                </div>
                <div class="departmentSlider">
                    {{-- <div class=" w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"> --}}
                    @foreach ($relatedServices as $relatedService)
                        <div class="shadow-lg rounded-xl">
                            <div class="flex justify-center items-center">
                                @if ($relatedService->thumbnail)
                                    <img class="w-[400px] text-center rounded-xl object-cover overflow-hidden object-center"
                                        src="{{ asset('storage/images/health-center/services-images/' . $relatedService->thumbnail) }}"
                                        alt="">
                                @else
                                    <img class="w-[400px] text-center rounded-xl object-cover overflow-hidden object-center"
                                        src="{{ asset('img/health-center/default-service-image.jpg') }}" alt="">
                                @endif

                            </div>
                            <div class="mx-3 favFont p-4">
                                <a href="{{ route('health-center.service', $relatedService->name) }}">
                                    <h4 class="text-purple-500 font-semibold">{{ $relatedService->name }}</h4>
                                </a>
                                @if ($service->department)
                                    <h5 class="text-purple-500 font-semibold">{{ $service->department->name }}</h5>
                                @endif

                                <p class="text-justify">
                                    {{ $relatedService->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
