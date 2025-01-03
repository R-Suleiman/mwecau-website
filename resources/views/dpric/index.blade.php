@php
    $postgraduateProgrammes = [];

    foreach ($faculties as $faculty) {
        foreach ($faculty['departments'] as $department) {
            foreach ($department['programmes'] as $programme) {
                if ($programme['study_level_code'] === 'MAS' || $programme['study_level_code'] === 'PHD') {
                    array_push($postgraduateProgrammes, $programme);
                }
            }
        }
    } 
@endphp

@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('/storage/images/dpric/general/' . $bannerImg) }}')">
        <div class="overlay">
            <div class="center-div">
                <div class="text-white text-center">
                    <h1 class="uppercase text-2xl md:text-4xl">Directorate of Postgraduate studies, Research, Innovations and
                        Consultancy
                        (DPRIC) </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- welcome --}}  
    <section class="w-full mt-8 lg:my-8 flex flex-col lg:flex-row md:p-4">
        <div class="w-full lg:w-7/12 p-4 lg:p-8 order-2 lg:order-1">
            <div class="w-full lg:w-10/12  lg:relative mx-auto">
                <img src="{{ asset('/storage/images/dpric/general/' . $welcomeImgs[0]->image_path) }}" class="w-full rounded-3xl" alt="">
                <div class="w-7/12 hidden lg:block absolute -bottom-8 -right-8 rounded-full">
                    <img src="{{ asset('/storage/images/dpric/general/' . $welcomeImgs[1]->image_path) }}" class="w-full rounded-full" alt="">
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12 px-8 lg:py-12 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
            <h3 class="text-2xl mb-8 text-default-head">{{ $welcomMessage->title }}</h3>
            <p class="text-justify text-default-text text-lg">
                {{ $welcomMessage->description }}
            </p>
        </div>
    </section>

    {{-- About / Mission --}}
    <section class="w-full flex flex-col p-4 lg:py-16 md:flex-row my-4 lg:my-8 ">
        <div class="w-full md:w-7/12 p-4 my-4 md:my-0 flex flex-col justify-between">
            <div class="w-full">
                <div class="flex flex-col mb-4 p-4">
                    <div class="w-fit">
                        <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">About Us</h2>
                        <div class="w-4/5 border border-purple-500"></div>
                    </div>
                </div>
                <p class="text-justify text-default-text text-lg">{{ Str::words($about->description, 70, '...') }}</p>
            </div>
            <div class="mt-4 md:mt-0">
                <x-dpric-btn btnLink='/dpric/welcome-message'>Read More</x-dpric-btn>
            </div>

        </div>
        <div
            class="w-full relative overflow-hidden md:w-5/12 p-4 my-4 md:my-0 md:p-8 shadow-lg shadow-purple-300 hover:shadow-purple-400 rounded-lg group">
            <div class="my-4">
                <h3 class="text-xl mb-2 text-default-head">{{ $mission->title }}</h3>
                <p class="text-justify text-default-text text-md">{{ $mission->description }}</p>
            </div>
            <div class="my-4">
                <h3 class="text-xl mb-2 text-default-head">{{ $vision->title }}</h3>
                <p class="text-justify text-default-text text-md">{{ $vision->description }}</p>
            </div>
            <div
                class="absolute -top-10 -right-10 h-28 w-28 rounded-full bg-purple-800 transform transition-transform duration-2000 group-hover:-top-8 group-hover:-right-8">
            </div>
        </div>
    </section>

    {{-- News/Events/Announcements/Articles --}}
    <section class="w-full p-2 mb-8">
        <div class="flex flex-col mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">News</h2>
                <div class="w-4/5 border border-purple-500"></div>
            </div>
            <span class="text-default-text my-2 text-lg">Latest News, Announcements, Events, and more</span>
        </div>

        @if ($allNews->count() > 0)
        <div class="w-full mx-auto flex flex-col lg:flex-row flex-wrap">
            @foreach ($allNews as $news)
            <div class="w-full lg:w-1/2 my-4">
                <div class="w-full lg:w-11/12 mx-auto relative h-96 bg-cover bg-center bg-no-repeat"
                        style="background-image: url({{ $news->image ? '/storage/images/dpric/news/' . $news->image : '../../img/mwecau.png' }})">
                    <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                        <div class="w-full lg:w-2/6 bg-transparent">
                        </div>
                        <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                            <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                            <div class="p-2 text-white w-full">
                                <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="{{ route('dpric.single-news', $news->title) }}">{{ $news->title }}</a></h3>
                                <p class="text-sm md:text-lg my-2 hidden lg:block">{{ Str::words($news->description, 30, '...') }}</p>
                                <span class="my-2 text-gray-300 text-md">{{ explode(' ', $news->created_at)[0] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

            <div class="my-4 w-fit mx-auto">
                <x-dpric-btn btnLink='/dpric/news'>More News</x-dpric-btn>
            </div>
        @else
            <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No News found!</div>
        @endif
    </section>

    {{-- postgrad units --}}
    <section class="w-full p-2 my-4">
        <div class="flex flex-col lg:mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">academics teaching postgraduate
                    Units
                </h2>
                <div class="w-4/5 mx-auto lg:mx-0 border border-purple-500"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row p-4  shadow-lg shadow-purple-300 rounded-lg">
            <div class="w-full lg:w-1/2 px-2 lg:px-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="w-fit mx-auto my-8"><i class="fas fa-user-graduate text-5xl text-default-head"></i></div>
                <h3 class="text-default-head text-xl lg:text-2xl my-6 text-center">{{ $unitMessade->title }}
                </h3>
                <p class="my-2 text-default-text text-md lg:text-xl text-justify">{{ $unitMessade->description }}</p>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="dpric-units w-full">
                    @foreach ($units as $unit)
                        <div class="w-full">
                            <div class="w-full lg:w-10/12 mx-auto flex flex-col">
                                <div class="w-full h-48 overflow-hidden">
                                    <img src="{{ $unit->image ? asset('/storage/images/dpric/units/' . $unit->image) : '../../img/mwecau.png' }}"
                                        class="w-full rounded-lg object-cover object-center" alt="">
                                </div>
                                <div class="p-2">
                                    <a href="{{ route('dpric.postgraduate-unit', $unit->title) }}">
                                        <h4 class="text-default-head hover:text-blue-950 text-lg my-2">{{ $unit->title }}<h4>
                                    </a>
                                    <p class="text-default-text">{{ Str::words($unit->description, 30, '...') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="my-4 w-fit mx-auto">
                    <x-dpric-btn btnLink='/dpric/postgraduate-units'>All Units</x-dpric-btn>
                </div>
            </div>
        </div>
    </section>

    {{-- Postgrad Programmes --}}
    <section class="w-full p-2 my-4">
        <div class="flex flex-col lg:mb-4 p-4 mx-4">
            <div class="w-fit">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Postgraduate Programmes</h2>
                <div class="w-4/5 mx-auto lg:mx-0 border border-purple-500"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto p-2 flex flex-col md:flex-row gap-4">
            @foreach (array_slice($postgraduateProgrammes, 0, 3) as $programme)
            <a href="{{ route('course_details', ['post-graduate', $programme['programme_name']]) }}"
                class="w-full md:w-1/3 p-8 my-4 md:my-0 shadow-md shadow-purple-400 scale-100 transform transition-transform duration-500 hover:scale-105">
                {{-- <div class="w-full h-24 bg-purple-600 rounded-full absolute -top-14"></div> --}}
                <div class="w-full flex flex-col items-center">
                    <i class="fa fa-graduation-cap text-5xl my-8 text-default-head"></i>
                    <div class="w-full">
                        <h4 class="text-center text-default-text text-xl">{{ $programme['programme_name'] }}</h4>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="w-fit mx-auto my-8">
            <x-dpric-btn btnLink='/dpric/directorate-programmes'>More Programmes</x-dpric-btn>
        </div>
    </section>

    {{-- Research Projects --}}
    <section class="w-full flex flex-col md:flex-row mt-8 bg-neutral-100">
        <div class="w-full lg:w-1/2 p-8">
            <div class="w-fit mx-auto my-8"><i class="fas fa-microscope text-5xl text-default-head"></i></div>
            <h3 class="text-default-head text-xl lg:text-2xl my-6 text-center">{{ $researchMessage->title }}</h3>
            <p class="my-2 text-default-text text-md lg:text-xl text-justify">{{ $researchMessage->description }}
        </div>
        <div class="w-full lg:w-1/2 py-8 px-12 bg-purple-900 flex flex-col justify-between">
            <div class="w-full">
                @foreach ($projects as $project)
                <div class="text-white hover:text-blue-300 text-2xl my-2"><a href="{{ route('single-project', $project->name) }}"><i class="fa fa-check"></i> <span
                            class="ml-2">{{ $project->name }}</span></a>
                </div>
                @endforeach
            </div>

            <div class="w-fit mx-auto mt-6">
                <a href="/dpric/research-projects"><button
                        class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white border-2 border-white hover:border-purple-800">
                        Explore More
                    </button></a>
            </div>
        </div>
    </section>

    {{-- Innovation Hub --}}
    <section class="relative w-full h-[600px] bg-center bg-cover bg-fixed"
        style="background-image: url('{{ asset('/storage/images/dpric/general/' . $otherImg) }}')">
        <div class="overlay py-24">
            <div class="center-div">
                <div class="w-11/12 mx-auto text-white text-center">
                    <h3 class="uppercase text-2xl md:text-4xl">{{ $innovationMessage->title }}</h3>
                    <p class="mt-4 text-xl leading-8">
                        {{ $innovationMessage->description }}
                    </p>
                    <div class="w-fit mx-auto mt-6">
                        <a href="/dpric/innovations-hub"><button
                                class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white border-2 border-white hover:border-purple-800">
                                Explore More
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Awards --}}
    <section class="w-full bg-purple-900 text-white p-4">
        <div class="w-full md:w-11/12 mx-auto p-4 text-center">
            <div class="w-full my-4">
                <h3 class="uppercase text-xl md:text-3xl">{{ $awardsMessage->title }}</h3>
                <p class="mt-6 text-xl leading-8">
                    {{ $awardsMessage->description }}
                </p>
            </div>

            <div class="w-full md:w-11/12 flex flex-col md:flex-row">
                @foreach ($awards as $award)
                    <div class="w-full md:w-1/3 flex flex-col items-center my-8">
                        <a href="{{ route('dpric.research-awards') }}" class="w-full"> <img
                                src="{{ $award->image ? asset('/storage/images/dpric/awards/' . $award->image) : '../../img/mwecau.png' }}"
                                alt="" class="w-2/5 h-32 mx-auto border-2 border-white rounded-full"></a>
                        <h4 class="mt-4 text-xl hover:text-blue-300"><a
                                href="{{ route('dpric.research-awards') }}">{{ $award->title }}</a></h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
