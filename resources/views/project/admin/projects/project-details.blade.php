@extends('layouts.project.admin.project-admin-layout')
@section('content')
    <div class="flex items-center justify-between">
        <div class="mt-10  mb-9">
            <a href="{{ route('admin.project.projects') }}"
                class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
                <i class="fa fa-arrow-left"></i></a>
        </div>

        <div>
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div>
                    <button @click="open = !open" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-pink-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Actions
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div x-show="open" @click.away="open = false"
                    class="origin-top-right absolute right-0 mt-2 w-56 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">

                        <a href="{{ route('admin.project.team.create', $project->name) }}"
                            class="block mx-4 mb-2 mt-2 px-4 py-2 text-sm text-purple-700 font-semibold border hover:border-purple-600 rounded-md hover:bg-gray-100">Add
                            Member</a>
                        <a href="#"
                            class="block mx-4 mb-2 px-4 py-2 text-sm text-gray-900 font-semibold border hover:border-gray-600 rounded-md hover:bg-gray-100">Create/Add
                            Gallery</a>

                        <a href="{{ route('admin.project.edit', $project->name) }}"
                            class="block mx-4 mb-2 px-4 py-2 text-sm text-green-700 font-semibold border hover:border-green-600 rounded-md hover:bg-gray-100"
                            role="menuitem"> Edit
                        </a>

                        <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                class="block mx-4 mb-3 px-4 py-2 text-sm text-red-700 font-semibold hover:bg-gray-100 border rounded-md hover:border-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="px-5 py-16 rounded-xl shadow-xl">
            <h1 class="text-center mt-10 mb-7 favFont uppercase font-semibold text-xl text-purple-500">{{ $project->name }}
            </h1>

            <nav class="flex flex-col mb-8">
                <div role="button"
                    class="text-slate-800 flex gap-3 w-full items-center rounded-md p-1 transition-all bg-slate-100 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                    <strong>Project Category:</strong> {{ $project->category }}
                </div>
                <div role="button"
                    class="text-slate-800 flex gap-3 w-full items-center rounded-md p-1 transition-all bg-slate-100 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                    <strong>Project Start:</strong>
                    {{ \Carbon\Carbon::parse($project->date)->isoFormat('dddd, MMMM Do YYYY') }}
                </div>
                <div role="button"
                    class="text-slate-800 flex gap-3 w-full items-center rounded-md p-1 transition-all bg-slate-100 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                    <strong>Duration:</strong> {{ $project->duration }}
                </div>
                <div role="button"
                    class="mt-1 text-slate-800 flex gap-3 w-full items-center rounded-md p-1 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                    <strong>Location: </strong> {{ $project->location }}
                </div>

                <div role="button"
                    class="mt-1 text-slate-800 flex gap-3 w-full items-center rounded-md p-1 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
                    @if ($projectTeam != 0)
                        <h1 class="text-2xl headerFavFont">{{ $projectTeam }} member(s) assigned to this project.</h1>
                    @else
                        <strong>Project Team Members: </strong>
                        <p class="text-red-600 font-semibold">No team members have been assigned to this project yet.</p>
                    @endif
                </div>
            </nav>
            <p class="text-justify leading-relaxed favFont">{!! $project->description !!}</p>
            @if ($project->thumbnail != null)
                <div class="mt-6">
                    <img src="{{ asset('/images/projects/images/' . $project->thumbnail) }}"
                        class="object-cover object-center w-full max-h-[320px] rounded-lg transition-transform duration-150 scale-105"
                        alt="project thumbnail">
                </div>
            @endif

            <div class="flex justify-end items-center mt-8">
                <div class="flex items-center gap-4 mt-10">
                    @if ($project->pdf != null)
                        <a href=""
                            class="px-2 py-2 rounded-md border border-gray-600 bg-gray-900 hover:bg-gray-700 text-white text-md uppercase font-semibold flex items-center gap-1">
                            <i class="fas fa-file"></i> Attachment
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
