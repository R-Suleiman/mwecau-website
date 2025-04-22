@extends('layouts.project.project-layout')

@section('content')
    {{-- project partners --}}
    <section class="mt-32 lg:pb-1">
        <div class="w-11/12 container mx-auto">
            <div class="flex flex-col items-center justify-start">
                <h1 class="headerFavFont uppercase text-blue-800 font-semibold text-4xl">Our trusted Partners</h1>
                <span class="italic text-gray-500">we work with Best Valuable Partners accross the global</span>
            </div>
            <div class="mt-20">
                <div class="w-full flex space-x-16 justify-center items-center">
                    {{-- <div class="flex flex-col itens justify-center">
                            <h6
                                class="font-semibold mb-5 text-4xl italic bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-red-600">
                                We Work with the best partners</h1>
                                <p class="text-wrap">We are confident that we can cant find process that will help you meet
                                    your goal</p>
                        </div> --}}
                    @if ($projectPartners->isNotEmpty())
                        @foreach ($projectPartners as $partner)
                            <a href="{{ $partner->link }}" target="__blank" class="flex justify-center items-center mb-4">
                                <!-- Center alignment -->
                                <div class="flex items-center">
                                    <img src="{{ asset('/storage/images/projects/images/partners-logo/' . $partner->partner_logo) }}"
                                        class="w-32 h-auto mr-2" alt="{{ $partner->name }}"> <i
                                        class="fas fa-check-circle text-green-500"></i>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
