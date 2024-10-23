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

    {{-- description --}}
    <section>
        <div class="w-8/12 container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-9">
                <div class="w-full flex">
                    <div class="">
                        <img src="{{ asset('img/health-center/Depositphotos_24648537_original-400x400.jpg') }}"
                            alt="" class="object-cover rounded-md">
                    </div>
                </div>
                <div class="">
                    <h5 class="favFont pb-4 font-semibold text-purple-600 text-3xl">Eye Care</h5>
                    <p class="text-justify">
                        Well we’re movin’ on up, to the east side. To a deluxe apartment in the sky. Movin’ on up, To the
                        east side. We finally got a piece of the pie. Fish don’t fry in the kitchen, beans don’t burn on the
                        grill. Took a whole lotta tryin’ just to get up that hill. Now we’re up in the big leagues, gettin’
                        our turn at bat. As long as we live, it’s you and me baby, There ain’t nothin’ wrong with that. Well
                        we’re movin’ on up, to the east side. To a deluxe apartment in the sky. Movin’ on up, to the east
                        side. We finally got a piece of the pie. <br> <br>

                        They’re creepy and they’re kooky, mysterious and spooky. They’re all together ooky, the Addams
                        Family. Their house is a museum where people come to see ’em. They really are a scream, the Addams
                        Family. Neat. Sweet. Petite. So get a witches shawl on, a broomstick you can crawl on. We’re gonna
                        pay a call on the Addams Family.
                    </p>
                </div>
                {{-- Third div --}}
                <div class="flex flex-col items-center space-y-4">
                    <h6
                        class="text-center font-semibold tracking-wide text-md text-gray-600 border-t-2 border-r-2 p-3 border-gray-300 pb-2 rounded-lg">
                        Other Services
                    </h6>
                    <div class="relative flex flex-col rounded-lg bg-white shadow-sm border border-slate-200">
                        <nav class="flex min-w-[240px] flex-col gap-1 p-1.5">
                            <div role="button"
                                class="text-slate-800 flex w-full items-center rounded-md p-3 transition-all bg-slate-100 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                <i class="fa-solid fa-circle-arrow-right mx-2"></i> Nephrologist Care
                            </div>
                            <div role="button"
                                class="mt-1 text-slate-800 flex w-full items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                <i class="fa-solid fa-circle-arrow-right mx-2"></i> Eye Care
                            </div>
                            <div role="button"
                                class="mt-1 text-slate-800 flex w-full items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                <i class="fa-solid fa-circle-arrow-right mx-2"></i> Pediatrician Clinic
                            </div>

                            <div role="button"
                                class="mt-1 text-slate-800 flex w-full items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                <i class="fa-solid fa-circle-arrow-right mx-2"></i> Prenatal Care
                            </div>

                            <div role="button"
                                class="mt-1 text-slate-800 flex w-full items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                                <i class="fa-solid fa-circle-arrow-right mx-2"></i> Pediatric
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- //other departments --}}
    <section>
        <div class="container mx-auto mt-16 pb-32">
            <div class="w-max flex flex-col pb-8 items-center">
                <h2 class="favFont text-purple-700 font-semibold tracking-wide text-2xl  ">
                    Other Service</h2>
                <div class="border-2 border-purple-500 m-5 w-2/3"></div>
            </div>
            <div class="departmentSlider">
                {{-- <div class=" w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"> --}}
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

            </div>
        </div>
    </section>
@endsection
