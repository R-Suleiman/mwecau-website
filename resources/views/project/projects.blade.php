@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">Projects under vlir / mwecau Partnership</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

        <div class="w-full flex flex-wrap items-center">
            @if ($projects->isNotEmpty())
                @foreach ($projects as $project)
                    <div class="w-1/3  p-4 my-2 h-96">
                        <div class="relative w-full p-4 text-white font-semibold mx-auto rounded-3xl  bg-cover bg-center  overflow-hidden h-full"
                            style="background-image: url('{{ asset('img/projects/sunflower.webp') }}')">
                            <div class="overlay group hover:opacity-80">
                                <div
                                    class="w-fit absolute left-40 transition-transform transform duration-1000 -translate-y-[100%] group-hover:translate-y-24">
                                    <a href="{{ route('single-project', $project->id) }}"><button class="p-2 border-2 border-white text-white bg-purple-500 text-xl">Read More</button></a>
                                </div>
                                <div class="absolute bottom-2 w-full px-8 py-2 flex justify-between items-center">
                                    <div class="w-fit bg-white p-3 rounded-full">
                                        <i class="fa fa-microscope text-4xl text-blue-800"></i>
                                    </div>
                                    <div class="w-fit ml-4">
                                        <span class="uppercase text-md">{{ $project->category }}</span>
                                        <h3 class="text-lg">{{ $project->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
