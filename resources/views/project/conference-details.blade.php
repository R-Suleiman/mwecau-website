@extends('layouts.project.project-layout')

@section('content')
    <div class="container mx-auto">
        <!-- Conference Header -->
        <section class="container mx-auto px-6 py-12 lg:py-20">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-purple-600 headerFavFont">{{ $conference->name }}</h2>
                <p class="mt-4 text-lg text-gray-600 font-extrabold">Join leading experts and innovators for a week of
                    inspiration,
                    learning, and networking.</p>
            </div>
        </section>

        <!-- Conference Description -->
        <section class="container mx-auto px-6 py-8 lg:py-16">
            <div class="grid gap-8 lg:grid-cols-3">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- About the Conference -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4 favFont">About the Conference</h3>
                        <p class="text-gray-600 leading-relaxed">{!! $conference->description !!}</p> <br>
                    </div>
                </div>

                <aside class="space-y-8">
                    <!-- Event Details -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4 favFont">Event Details</h3>
                        <p><strong>Date:</strong>
                            {{ \Carbon\Carbon::parse($conference->date)->isoFormat('dddd, MMMM od YYYY') }}</p>
                        <p><strong>Location:</strong> {{ $conference->location }}</p>

                        @if ($conference->pdf != null)
                            <div class="flex flex-col items-start space-y-3 mt-6">
                                <div class="flex items-center space-x-3 text-gray-700">
                                    <i class="fas fa-file-pdf text-red-600 text-2xl"></i>
                                    <h5 class="text-lg font-medium">PDF for conference is available</h5>
                                </div>
                                <a target="_blank" href="{{ route('conference-attachment-preview', $conference->pdf) }}"
                                    class="text-center bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-200 flex items-center space-x-2">
                                    <i class="fas fa-eye"></i>
                                    <span>Preview</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </aside>
            </div>
        </section>
    </div>
@endsection
