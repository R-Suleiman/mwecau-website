@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ $project->primary_image ? asset('/storage/images/dpric/clubs/projects/' . $project->primary_image) : asset('img/health-center/header.jpg') }}')">
        <div class="overlay">
        </div>
    </section>

    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $project->project_title }}</h2>
            </div>
        </div>

        <div
            class="w-full md:w-11/12 mx-auto flex flex-col md:flex-row md:h-96 my-8 border border-blue-600 rounded-md overflow-hidden">
            <div class="w-full md:w-4/12 p-4 md:h-96">
                <div class="w-11/12 mx-auto rounded-lg project-desc1">
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Category</label>
                        <span class="text-xl text-default-text">{{ $project->category }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Duration</label>
                        <span class="text-xl text-default-text">{{ $project->duration }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col">
                        <label class="text-md text-blue-900">Club</label>
                        <span class="text-xl text-default-text">{{ $project->club->name }}</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-8/12 md:h-96">
                <img src="{{ $randomImg ? asset('/storage/images/dpric/clubs/projects-gallery/' . $randomImg->image) : asset('img/health-center/header.jpg') }}"
                    alt="" class="md:object-cover md:h-96 w-full">
            </div>
        </div>

        {{-- Description --}}
        <div class="w-full px-4 flex flex-col md:flex-row">
            <div class="w-full md:w-8/12 p-4">
                {{-- <h2 class="mb-2 text-4xl text-blue-800 FavFont">{{ $singleProject->name }}</h2> --}}
                <p class="text-justify text-gray-500 text-lg my-4 favFont">{{ $project->description }}</p>
            </div>

            <div class="w-full md:w-4/12 p-4">
                <h5 class="text-xl mb-4 text-blue-800">Related Projects</h5>
                <ul>
                    @foreach ($relatedProjects as $project)
                    <li
                        class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                        <a href="{{ route('dpric.innovations-project', $project->project_title) }}" class="flex items-center justify-between">
                            <div class="w-fit flex gap-2 items-center"><i class="fa fa-microscope text-purple-500"></i><span
                                    class="ml-8 text-gray-500">{{ $project->project_title }}</span> </div><i
                                class="fa fa-arrow-right text-gray-500"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- gallery --}}
        <section class="w-full py-8">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">Project's Gallery</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            @if ($gallery->count() > 0)
                <div class="w-full flex p-4 flex-wrap items-center">
                    @foreach ($gallery as $image)
                        <div class="w-1/2 my-4 lg:w-1/4">
                            <div class="relative w-11/12 mx-auto overflow-hidden group h-52">
                                <img src="{{ asset('/storage/images/dpric/clubs/projects-gallery/' . $image->image) }}"
                                    alt="gallery photo"
                                    class="w-full transition-transform duration-500 scale-100 group-hover:scale-105 h-52 object-cover">
                                <div class="overlay hidden group-hover:block h-52"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--
            <div class="mt-auto w-max mx-auto">
                <button class="p-2 bg-purple-600 border-2 border-white text-white my-4"><a
                        href="{{ route('admin.project-gallery.index', ['club_name' => $club_name, 'project_name' => $project->project_title]) }}">All
                        Images</a></button>
            </div> --}}
            @else
                <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Images found!</div>
            @endif
        </section>
    </section>
@endsection