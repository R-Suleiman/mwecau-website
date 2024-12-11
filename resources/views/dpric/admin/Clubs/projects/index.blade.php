@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-between items-center">
                <h2 class="oswald my-4 text-3xl text-blue-800">{{ $club_name }} Projects</h2>
                <a href="{{ route('admin.projects.create', ['club_name' => $club_name]) }}"><button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add Project
                        </button></a>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
            @foreach ($projects as $project)
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('admin.projects.show', ['project' => $project, 'club_name' => $club_name]) }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">{{ $project->category }}</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">{{ $project->project_title }}</h3>
                                    <span class="mb-1 text-lg">Participants: {{ $club_name }} </span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </section>
@endsection
