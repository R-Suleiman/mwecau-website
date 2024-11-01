@extends('layouts.project.project-layout')

@section('content')
{{-- hero --}}
<section class="relative w-full h-96 bg-center bg-cover"
    style="background-image: url('{{ asset('img/projects/cocoa.jpg') }}')">
    <div class="overlay">
        {{-- <img class="w-full object-cover object-center h-96" src="{{ asset('img/projects/cocoa.jpg') }}" alt="">
        --}}

        {{-- <div class="center-div">
            <div class="text-white text-center">
                <h1 class="uppercase text-4xl">mtu ni watu</h1>
            </div>
        </div> --}}
    </div>
</section>

<div class="flex flex-col bg-neutral-100">
    {{-- description --}}
    <section class="w-full px-4 pt-12 flex flex-col md:flex-row">
        <div class="w-full md:w-8/12 p-4">
            <h2 class="mb-2 text-4xl text-blue-800 FavFont">{{ $singleProject->name }}</h2>
            <p class="text-justify text-gray-500 text-lg my-4 favFont">This project aims to improve livelihoods,
                biodiversity and
                carbon sequestration in the mountainous environments of Northern Tanzania by building climate-smart,
                resilient and inclusive farming systems using indigenous trees. Moreover, we aim to improve the
                situation for vulnerable groups, in casu single headed households and special needs groups, by restoring
                ecosystem services and by improving and diversifying agroforestry production. The project is inspired by
                the outcomes of the VLIR-UOS SI LiveLabLink project and will strengthen research and outreach capacity
                and infrastructure at MWECAU by joint research, by development of demo's and digital tools, and by
                establishing networks with NGO’s for upscaling....</p>
            <p class="text-justify text-gray-500 text-lg my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Eos
                obcaecati voluptatum in asperiores nobis ducimus fugiat dignissimos. Hic sapiente aliquid odit obcaecati
                sunt. Asperiores sequi ex modi officia laborum? Nesciunt?Quisquam sunt, facilis fugit perspiciatis
                blanditiis reprehenderit consequuntur quia voluptate rem, quasi labore exercitationem. Numquam eligendi
                eveniet, exercitationem sit, voluptate accusamus sapiente nesciunt recusandae ipsam, officia facere
                autem
                minima consequuntur.</p>
        </div>

        <div class="w-full md:w-4/12 p-4">
            <div class="w-11/12 mx-auto p-8 rounded-lg project-desc1">
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Category</label>
                    <span class="text-xl">{{ $singleProject->category }}</span>
                </div>
                <div class="project-desc my-6 flex flex-col text-white">
                    <label class="text-md">Date</label>
                    <span class="text-xl">{{ $singleProject->date }}</span>
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
                    @if ($singleProject && $singleProject->projectTeam && $singleProject->projectTeam->isNotEmpty())
                        @foreach ($singleProject->projectTeam as $teamMember)
                            <tr>
                                <td class="px-4 py-4 text-sm text-gray-800">
                                    {{ $counter++ }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-800">
                                    {{ $teamMember->name }}
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
                            <img src="{{ asset('images/projects/images/' . $gallery->image) }}" alt="gallery photo"
                                class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                            <div class="overlay hidden group-hover:block"></div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{--
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/projects/project1.jpeg') }}" alt="gallery photo"
                        class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/projects/project3.webp') }}" alt="gallery photo"
                        class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div>
            <div class="w-1/2 my-4 lg:w-1/4">
                <div class="relative w-11/12 mx-auto overflow-hidden group">
                    <img src="{{ asset('img/projects/project2.webp') }}" alt="gallery photo"
                        class="w-full transition-transform duration-500 scale-100 group-hover:scale-105">
                    <div class="overlay hidden group-hover:block"></div>
                </div>
            </div> --}}

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
                    <img src="{{ asset('images/projects/images/' . $gallery->image) }}" alt="gallery photo"
                        class="w-full rounded-lg transition-transform duration-500 scale-100 group-hover:scale-105">
                </div>
            @endforeach
        @else
            <div class="w-full md:w-8/12 p-4">
                <div
                    class="flex flex-col items-center justify-center text-center p-8 rounded-xl bg-gray-100 border-2 border-dashed border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Gallery Coming Soon</h2>
                    <p class="text-gray-600 text-sm mb-4">We're working on adding some amazing images to showcase this
                        project. Stay tuned for updates!</p>
                    <i class="fas fa-photo-video text-blue-500 text-5xl"></i>
                </div>
            </div>
        @endif

        <div class="w-full md:w-4/12 p-4">
            <ul>
                <li
                    class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                    <a href="#" class="flex items-center justify-between">
                        <div class="w-fit flex gap-2 items-center"><i class="fa fa-microscope text-purple-500"></i><span
                                class="ml-8 text-gray-500">Bega Kwa Bega</span> </div><i
                            class="fa fa-arrow-right text-gray-500"></i>
                    </a>
                </li>
                <li
                    class="bg-white w-full p-2 my-3 text-lg border-2 border-purple-500 transition-transform  scale-100 hover:scale-105 duration-500">
                    <a href="#" class="flex items-center justify-between">
                        <div class="w-fit flex gap-2 items-center"><i class="fa fa-microscope text-purple-500"></i><span
                                class="ml-8 text-gray-500">Mtu ni Watu</span> </div><i
                            class="fa fa-arrow-right text-gray-500"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</div>
@endsection
