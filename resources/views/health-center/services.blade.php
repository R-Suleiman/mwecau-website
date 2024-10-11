@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp
    {{-- image section --}}
    <section>
        <div class="w-full relative overflow-hidden">
            <img class="w-full object-cover object-center h-96" src="{{ asset('img/health-center/header.jpg') }}"
                alt="">
            <div
                class="favFont absolute inset-0 flex justify-center items-center font-semibold tracking-wide text-6xl container mx-auto mt-52">
                <h1>Services</h1>
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

    {{-- //other departments --}}
    <section>
        <div class="w-8/12 container mx-auto mt-9 pb-32">
            <div class="w-max flex flex-col pb-8 items-center">
                <h2 class="favFont text-purple-700 font-semibold tracking-wide text-2xl  ">
                    Other Service</h2>
                <div class="border-2 border-purple-500 m-5 w-2/3"></div>
            </div>
            {{-- <div class="departmentSlider"> --}}
            <div class=" w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="shadow-lg rounded-xl">
                    <div class="flex justify-center items-center">
                        <img class="w-[400px] text-center rounded-xl object-cover overflow-hidden object-center"
                            src="{{ asset('img/health-center/Depositphotos_11882261_original-280x215.jpg') }}"
                            alt="">
                    </div>
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Pediatrician Clinic</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <div class="flex justify-center items-center">

                        <img class="w-[400px] sm:w-full rounded-xl object-cover object-center transition-transform transform hover:scale-105 hover:opacity-80 duration-300 ease-in-out"
                            src="{{ asset('img/health-center/Depositphotos_11295039_original-280x215.jpg') }}"
                            alt="">

                    </div>
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Competitive Doctors</h4>
                        <p class="text-justify">
                            They're creepy and they're kooky, mysterious and spooky. They're all together ooky, the
                            Addams...
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/Depositphotos_80150830_original-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Eye Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/Depositphotos_5711983_original-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Nephrologist Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/Depositphotos_5711983_original-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Nephrologist Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/service-11-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Nephrologist Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/prenatal-care-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Nephrologist Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>

                <div class="shadow-lg rounded-xl">
                    <img class="w-full rounded-xl object-cover overflow-hidden object-center"
                        src="{{ asset('img/health-center/Eldery-Care-1-280x215.jpg') }}" alt="">
                    <div class="mx-3 favFont p-4">
                        <h4 class="text-purple-500 font-semibold">Nephrologist Care</h4>
                        <p class="text-justify">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore ex velit corrupti ad facere
                            assumenda nobis fuga, neque similique numquam veritatis dignissimos est alias dolores! Magnam
                            totam excepturi consequatur! Adipisci.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
