@extends('layouts.project.project-layout')

@section('content')
    {{-- hero --}}
    <section class="relative w-full h-96 bg-center">
        <div class="overlay">
            @if ($singleProject->thumbnail)
                <img class="w-full object-cover object-center h-96"
                    src="{{ asset($storagePath . $singleProject->thumbnail) }}" alt="">
                <div class="center-div absolute inset-0 z-30">
                    <div class="text-white text-center">
                        <h1 class="uppercase text-6xl font-bold italic">{{ $singleProject->name }}</h1>
                    </div>
                </div>
            @else
                <img class="w-full object-cover object-center h-96" src="{{ asset('img/projects/cocoa.jpg') }}"
                    alt="">
                <div class="center-div absolute inset-0">
                    <div class="text-white text-center">
                        <h1 class="uppercase text-4xl">{{ $singleProject->name }}</h1>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="flex flex-col bg-neutral-100">
        {{-- description --}}
        <section class="w-full px-4 pt-12 flex flex-col md:flex-row">
            <div class="w-full md:w-8/12 p-4">
                <h2 class="mb-2 text-4xl text-blue-800 FavFont">{{ $singleProject->name }}</h2>
                <p class="text-justify text-gray-500 text-lg my-4 favFont">{!! $singleProject->description !!}</p>

                <div class="w-full flex gap-10 mt-11">
                    @if ($singleProject->project_objectives)
                        <div class="w-1/2">
                            <h1 class="favFont text-center text-blue-800 text-3xl">Project Objectives</h1>
                            <p>{!! $singleProject->project_objectives ?? '<span class="text-red-600  italic">No records found.</span>' !!}</p>
                        </div>
                    @endif
                    @if ($singleProject->project_outputs)
                        <div class="w-1/2">
                            <h1 class="favFont text-center text-blue-800 text-3xl">Project Outputs</h1>
                            <p>{!! $singleProject->project_outputs ?? '<span class="text-red-600  italic">No records found.</span>' !!}</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="w-full md:w-4/12 p-4">
                <div class="w-11/12 mx-auto p-8 rounded-lg project-desc1">
                    <div class="project-desc my-6 flex flex-col text-white">
                        <label class="text-md">Category</label>
                        <span class="text-xl">{{ $singleProject->category }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col text-white">
                        <label class="text-md">Date</label>
                        <span
                            class="text-xl">{{ \Carbon\Carbon::parse($singleProject->date)->isoFormat('dddd, MMMM Do YYYY') }}<span>
                    </div>
                    <div class="project-desc my-6 flex flex-col text-white">
                        <label class="text-md">Duration</label>
                        <span class="text-xl">{{ $singleProject->duration }}</span>
                    </div>
                    <div class="project-desc my-6 flex flex-col text-white">
                        <label class="text-md">Location</label>
                        <span class="text-xl">{{ $singleProject->location }}</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scholarship Cards Grid -->
        @if ($singleProject->scholarships && $singleProject->scholarships->isNotEmpty())
            <section>
                <div class="w-full md:w-8/12 p-4">
                    <h2 class="mb-2 text-4xl text-blue-800 FavFont">Project scholarships</h2>
                </div>
                <div class="my-4 p-4 w-full flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                    <!-- Scholarship Card -->
                    @foreach ($singleProject->scholarships as $scholarship)
                        <div
                            class="w-full my-4 lg:my-0 lg:w-1/{{ $singleProject->count() }}  shadow-sm shadow-blue-800 rounded-lg">
                            {{-- <div class="bg-white shadow-lg rounded-lg overflow-hidden"> --}}
                            <div class="flex items-center space-x-4 p-4">
                                <!-- Profile Image -->
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800">{{ $scholarship->name }}
                                    </h2>
                                    <p class="text-sm text-gray-500">
                                    <ul class="space-y-2 mt-4">
                                        <li>
                                            <span class="font-semibold text-gray-800">Offered by:</span>
                                            {!! $scholarship->offred_by ?? '<span class="text-red-600 italic">Not specified</span>' !!}
                                        </li>

                                        <li class="text-gray-600"><span class="font-semibold text-gray-800">Status:</span>
                                            @if ($scholarship->status == 'Open')
                                                <strong class="text-green-500">Open</strong>
                                            @else
                                                <strong class="text-red-600">Closed</strong>
                                            @endif
                                        </li>
                                        <li class="text-gray-600"><span class="font-semibold text-gray-800">Country:</span>
                                            {{ $scholarship->country ?? 'Tanzania' }}</li>
                                        </li>


                                        <li class="text-gray-600"><span
                                                class="font-semibold text-gray-800">Description:</span>
                                            {!! $scholarship->description ?? 'Description' !!}</li>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="p-4">
                            <p class="text-lg font-semibold text-gray-800">Research Title: <span
                                    class="text-blue-500 italic">{{ $beneficiary->beneficiary_research_title ?? 'Null' }}</span>
                            </p>
                            <ul class="space-y-2 mt-4">
                                <li><span class="font-semibold text-gray-800">Duration:</span>
                                    {{ $beneficiary->scholarship_duration ?? 'Undefined' }}</li>
                                <li><span class="font-semibold text-gray-800">University:</span>
                                    {{ $beneficiary->university ?? 'Null' }}</li>
                                </li>
                            </ul>
                        </div> --}}
                            <div class="p-4 bg-gray-100 text-center">
                                <button
                                    class="bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">View
                                    Beneficiaries
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        {{-- Members --}}
        <section class="w-full px-4 pt-12">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">Project Participants</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="w-full overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-500 whitespace-nowrap">
                        <tr>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                s/n
                            </th>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                University
                            </th>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Category
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                        @php
                            $counter = 1;
                        @endphp
                        @if ($singleProject && $singleProject->projectTeam->isNotEmpty())
                            @foreach ($singleProject->projectTeam as $teamMember)
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        {{ $counter++ }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        <a href="{{ route('tema-member-profile-description', $teamMember->name) }}" class="hover:text-blue-700 hover:font-semibold">
                                            {{ $teamMember->name }}
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        {{ $teamMember->institute }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        {{ $teamMember->position }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @if ($singleProject->projectTeam->isEmpty())
                    <div class="container mx-auto">
                        <div
                            class="text-center p-5 py-2 shadow-md bg-blue-50 border border-dashed border-blue-200 mt-4 rounded-lg">
                            <p class="text-blue-700 font-semibold mb-2">
                                <i class="fas fa-info-circle text-blue-500 mr-2"></i>No team members have joined this
                                project
                                yet.
                            </p>
                            <p class="text-sm text-blue-600">Stay tuned! Team members will appear here once they join the
                                project.</p>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        {{-- gallery --}}
        <section class="w-full py-8">
            <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
                <h2 class="uppercase text-2xl text-center text-blue-800">Project's Gallery</h2>
                <div class="mt-3 border border-purple-500 w-3/5"></div>
            </div>

            <div class="w-fit  flex p-4 flex-wrap items-center">
                @if ($singleProject->gallery->isNotEmpty())
                    @foreach ($singleProject->gallery as $gallery)
                        <div class="w-1/2 my-4 lg:w-1/4">
                            <div class="relative w-11/12 mx-auto overflow-hidden group">
                                <img src="{{ asset('storage/images/projects/images/project-gallery/' . $gallery->image) }}"
                                    alt="gallery photo"
                                    class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                                <div class="overlay hidden group-hover:block"></div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            @if ($singleProject->gallery->isEmpty())
                <div class="container mx-auto">
                    <div
                        class="flex items-center justify-center p-5 py-4  h-full rounded-lg shadow-md bg-blue-50 border border-dashed border-blue-200 mt-4">
                        <div class="text-center">
                            <p class="text-blue-700 font-semibold mb-2">
                                <i class="fas fa-image text-blue-500 mr-2"></i>No Images Available
                            </p>
                            <p class="text-sm text-blue-600">This project's gallery is currently empty. Check back later for
                                updates!</p>
                        </div>
                    </div>
                </div>
            @endif
        </section>

        {{-- large banner --}}
        <section class="w-full px-4 pt-12 flex flex-col md:flex-row">
            @if ($singleProject->gallery->isNotEmpty())
                @foreach ($singleProject->gallery->take(1) as $gallery)
                    <div class="w-full md:w-8/12 p-4">
                        <img src="{{ asset('storage/images/projects/images/project-gallery/' . $gallery->image) }}"
                            alt="gallery photo"
                            class="w-full rounded-lg transition-transform duration-500 scale-100 group-hover:scale-105">
                    </div>
                @endforeach
            @else
                <div class="w-full md:w-8/12 p-4">
                    <div
                        class="flex flex-col items-center justify-center text-center p-8 rounded-xl bg-gray-100 border-2 border-dashed border-gray-200">
                        <h2 class="text-2xl font-bold text-blue-700 mb-2">Gallery Coming Soon</h2>
                        <p class="text-blue-600 text-sm mb-4">We're working on adding some amazing images to showcase this
                            project. Stay tuned for updates!</p>
                        <i class="fas fa-photo-video text-blue-500 text-5xl"></i>
                    </div>
                </div>
            @endif

            <div class="w-full md:w-4/12 p-4">
                <h5 class="text-xl mb-4 text-blue-800">Related Projects</h5>
                <ul>
                    @foreach ($otherProjects as $project)
                        <li
                            class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                            <a href="{{ route('single-project', $project->name) }}"
                                class="flex items-center justify-between">
                                <div class="w-fit flex gap-2 items-center"><i
                                        class="fa fa-microscope text-purple-500"></i><span
                                        class="ml-8 text-gray-500">{{ $project->name }}</span> </div><i
                                    class="fa fa-arrow-right text-gray-500"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
@endsection
