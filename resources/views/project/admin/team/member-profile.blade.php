@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            {{ $teamMember->initials }} {{ $teamMember->name }}
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">
    <div class="text-end mt-10  mb-9">
        <a href="{{ route('admin.project.team.index') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                    <div
                        class="grid md:grid-cols-1 lg:grid-cols-2 border border-purple-500 rounded-2xl shadow-xl py-7 px-8 gap-9 bg-white">

                        <div class="flex flex-col items-center text-center">
                            @if ($teamMember->profile_picture != null)
                                <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-lg"
                                    src="{{ asset('/images/projects/images/team-member-profile-pictures/' . $teamMember->profile_picture) }}"
                                    alt="{{ $teamMember->name }} profile picture">
                            @else
                                <img class="rounded-full border-4 border-t-purple-500 border-b-pink-600 h-[150px] w-[150px] object-cover shadow-lg"
                                    src="{{ asset('img/projects/Male_Avatar.jpg') }}"
                                    alt="{{ $teamMember->name }} profile picture">
                            @endif
                            <div class="mt-5">
                                <h4 class="text-2xl font-semibold uppercase favFont">{{ $teamMember->initials }}
                                    {{ $teamMember->name }}</h4>
                            </div>

                            <div class="mt-9 flex gap-7">
                                <a href="{{ route('admin.project.team.edit', $teamMember->name) }}"
                                    class="block mx-4 mb-3 px-4 py-2 text-sm text-gray-900 font-semibold bg-emerald-400 hover:bg-emerald-300 border rounded-md">
                                    <i class="fa fa-pencil"></i> Edit</a>

                                <form action="{{ route('admin.project.team.destroy', $teamMember->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                        class="block mx-4 mb-3 px-4 py-2 text-sm text-white font-semibold bg-red-600 hover:bg-red-500 border rounded-md hover:border-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- General Information Section -->
                        <div class="flex flex-col items-start text-left p-5">
                            <h3 class="text-purple-500 text-xl font-semibold mb-4 favFont">General Information</h3>
                            <nav class="space-y-4">
                                <div class="bg-slate-100 p-3 rounded-md shadow-sm flex items-center gap-3">
                                    <strong class="text-slate-800">Institute:</strong>
                                    <span>{{ $teamMember->institute }}</span>
                                </div>
                                <div class="bg-slate-100 p-3 rounded-md shadow-sm flex items-center gap-3">
                                    <strong class="text-slate-800">Since:</strong>
                                    <span>{{ \Carbon\Carbon::parse($teamMember->created_at)->isoFormat('dddd, MMMM Do YYYY') }}</span>
                                </div>
                                <div class="bg-slate-100 p-3 rounded-md shadow-sm flex items-center gap-3">
                                    <strong class="text-slate-800">Position:</strong>
                                    <span>{{ $teamMember->position }}</span>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!-- Projects and Statistics Section -->
                    <div class="grid grid-cols-1 border border-purple-500 rounded-2xl shadow-xl py-7 px-8 bg-white">
                        <div class="flex flex-col items-center text-center">
                            <h1 class="text-2xl font-semibold text-purple-500 favFont mb-5">Projects</h1>
                            <div class="w-full h-[200px] flex justify-center items-center mb-8">
                                <svg class="w-24 h-24 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 17a4 4 0 100-8 4 4 0 000 8zm5 1h5m-1 4h-4m6-2h-6M5 11h5m-1-4H4m5 4H4" />
                                </svg>
                            </div>
                            <!-- Project Names -->
                            @php
                                $counter = 1;
                            @endphp
                            @if ($teamMember && $teamMember->projects->isNotEmpty())
                                <div class="w-full space-y-3">
                                    @foreach ($teamMember->projects as $project)
                                        <div class="bg-slate-100 p-3 rounded-md shadow-sm">
                                            {{ $counter++ }} : <span>Project: {{ $project->name }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-red-600 font-semibold">This team member is currently not assigned to any
                                    project. Consider assigning them to a project to utilize their skills.</p>
                            @endif

                            <div x-data="{ open: false }">
                                <!-- Trigger Button -->
                                <button @click="open = true" type="button"
                                    class="rounded-md bg-slate-800 py-2 px-4 text-white text-sm transition-all shadow-md hover:bg-slate-700 focus:bg-slate-700">
                                    Assign to Projects
                                </button>

                                <!-- Modal -->
                                <div x-show="open" @click.away="open = false"
                                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm transition-opacity duration-300"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 transform transition-all">
                                        <!-- Modal Header -->
                                        <div class="flex justify-between items-center pb-4 border-b border-slate-200">
                                            <h2 class="text-xl font-semibold text-slate-800">Assign to Project</h2>
                                            <button @click="open = false" class="text-slate-600 hover:text-slate-800">
                                                &times;
                                            </button>
                                        </div>

                                        <!-- Modal Body -->
                                        <div class="py-4 text-slate-600">
                                            <form action="{{ route('admin.project.team.assignProject') }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <label for="project_id"
                                                    class="block text-sm font-medium text-slate-700 mb-2">Project</label>
                                                <select name="project_id" id="project_id"
                                                    class="block w-full rounded-md border border-slate-300 bg-white py-2 px-3 text-slate-700 shadow-sm focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500">
                                                    <option value="">Select a Project to assign</option>
                                                    @if ($projects->isNotEmpty())
                                                        @foreach ($projects as $project)
                                                            <option value="{{ $project->id }}">{{ $project->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                                <!-- Hidden input for team_member_id -->
                                                <input type="hidden" name="team_member_id" value="{{ $teamMember->id }}">

                                                <!-- Modal Footer -->
                                                <div class="flex justify-end pt-4">
                                                    <button @click.prevent="open = false"
                                                        class="rounded-md border border-slate-300 py-2 px-4 text-sm text-slate-600 hover:bg-slate-100">
                                                        Cancel
                                                    </button>
                                                    <button type="submit"
                                                        class="ml-2 rounded-md bg-blue-600 py-2 px-4 text-white text-sm shadow-md hover:bg-blue-700 focus:bg-blue-700">
                                                        Confirm
                                                    </button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
