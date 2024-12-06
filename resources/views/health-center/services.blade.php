@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = 'null';
    @endphp

    <div class="">
        <img src="{{ asset('img/site banners/BANNER CHEMISTRY.jpg') }}" alt="banner" class="w-100">
    </div>

    @if ($services)
        {{-- Services --}}
        <section class="w-full px-4 py-20 mb-4 flex flex-col items-center bg-neutral-100">
            <div class="flex flex-col items-center w-max mb-4">
                <h2 class="uppercase text-2xl text-center text-blue-800">Health Center Services</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="my-4 p-4 w-full flex flex-col items-center lg:flex-row lg:space-x-8">
                @foreach ($services as $service)
                    <div class="w-full my-4 lg:my-0 lg:w-1/4 shadow-sm shadow-blue-800 rounded-lg">
                        <a href="{{ route('health-center.service', $service->name) }}">
                            {{-- <a href=""> --}}
                            <div class="w-full mb-2 relative bg-blue-900">
                                <div class="w-full overflow-hidden rounded-tr-full">
                                    <img src="{{ asset('img/campus-life/spirtual1.jpg') }}" alt="service image"
                                        class="w-full transform transition-transform duration-300 ease-in-out hover:scale-110 object-cover">
                                </div>
                                <div class="w-fit absolute right-2 top-2">
                                    <i class="fa fa-heartbeat text-4xl text-white p-2 rounded-full ml-2"></i>
                                </div>
                            </div>
                            <div class="w-full mt-2 p-4 text-justify">
                                <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">
                                    {{ $service->name }}</h4>
                                <p>{!! $service->description !!}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endsection
