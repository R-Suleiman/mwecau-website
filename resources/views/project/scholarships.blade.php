@extends('layouts.project.project-layout')
@section('content')
    <div class="container mx-auto">
        @if ($projectScholarships->isNotEmpty())
            <div class="container mx-auto px-6 py-10">
                <!-- Title-->
                <div class="text-center mb-10">
                    <h1 class="text-4xl font-bold text-blue-700 mb-4 headerFavFont">Available Project Scholarships</h1>
                    <p class="text-gray-500 italic">Explore and apply for scholarships suited to your needs and
                        qualifications.</p>
                </div>

                <!-- Scholarship Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Scholarship Card -->
                    @foreach ($projectScholarships as $scholarship)
                        <div
                            class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-800 mb-2">{!! $scholarship->name !!}</h2>
                                <p class="text-gray-500 mb-4">{!! $scholarship->description !!}</p>

                                <!-- Details with Icons -->
                                <ul class="text-gray-700 space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-graduation-cap text-green-500 mr-2"></i>
                                        <strong>Offred by: </strong> {!! $scholarship->offerd_by !!}
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-dollar-sign text-green-500 mr-2"></i>
                                        <strong>Duration:</strong> {!! $scholarship->duration !!}
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-user-check text-green-500 mr-2"></i>
                                        <strong>Status:</strong> {!! $scholarship->status !!}
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-calendar-alt text-green-500 mr-2"></i>
                                        <strong>Deadline:</strong>
                                        {{ Carbon\Carbon::parse($scholarship->end_date)->isoFormat('dddd, MMMM Do YYYY') }}
                                    </li>
                                </ul>

                                <!-- Apply Button -->
                                <div class="mt-4">
                                    @if ($scholarship->application_url)
                                        <a target="__blank" href="{{ $scholarship->application_url }}"
                                            class="block w-full text-center bg-blue-400 text-white py-2 rounded-lg hover:bg-purple-600">
                                        @else
                                            <a href="#"
                                                class="block w-full text-center bg-blue-400 text-white py-2 rounded-lg hover:bg-purple-600">
                                    @endif
                                    View & Apply
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div
                class="w-full p-4 flex flex-col items-center justify-center text-center bg-green-50 rounded-xl border border-dashed border-green-200">
                <h2 class="text-2xl font-bold text-green-700 mb-2">Scholarships Coming Soon!</h2>
                <p class="text-gray-600 text-sm">Stay tuned for upcoming scholarship opportunities. We're working to bring
                    you
                    options to support your academic journey.</p>
                <i class="fas fa-graduation-cap text-green-400 text-5xl mt-4"></i>
            </div>
        @endif
    </div>
@endsection
