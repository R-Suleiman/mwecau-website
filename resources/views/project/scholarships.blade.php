@extends('layouts.project.project-layout')
@section('content')
    <div class="container mx-auto">
        @if ($scholarshipBeneficiaries->isNotEmpty())
            <div class="container mx-auto px-6 py-10">
                <!-- Title-->
                <div class="text-center mb-10">
                    <!-- Header -->
                    <h1 class="text-4xl font-bold text-blue-700 mb-4 headerFavFont">
                        Beneficiaries of Our Projects
                    </h1>
                    <!-- Description -->
                    <p class="text-gray-500 italic text-lg">
                        Discover the transformative power of our initiatives through stories of hope and change. Be part of
                        a journey that empowers lives and builds a brighter future for all.
                    </p>
                </div>

                <div class="my-4 p-4 w-full flex flex-col items-center lg:flex-row lg:space-x-8">
                    {{-- loop here --}}
                    @foreach ($scholarshipBeneficiaries as $beneficiary)
                        <div
                            class="w-full my-4 lg:my-0 lg:w-1/{{ $beneficiary->count() }}  shadow-sm shadow-blue-800 rounded-lg">
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                <div class="flex items-center space-x-4 p-4">
                                    <!-- Profile Image -->
                                    @if ($beneficiary->beneficiary_photo)
                                        <img class="w-20 h-20 rounded-full border-2 border-gray-300"
                                            src="{{ asset($storagePath . $beneficiary->beneficiary_photo) }}"
                                            alt="Profile Image">
                                    @else
                                        <img class="w-16 h-16 rounded-full border-2 border-gray-300"
                                            src="{{ asset('img/mwecau.png') }}" alt="Profile Image">
                                    @endif

                                    <div>
                                        <h2 class="text-xl font-semibold text-gray-800">{{ $beneficiary->beneficiary_name }}
                                        </h2>
                                        <p class="text-sm text-gray-500">Funded under: <span
                                                class="font-semibold text-blue-600">{{ $beneficiary->scholarship->name }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-lg font-semibold text-gray-800">Research Title: <span
                                            class="text-blue-500 italic">{!! $beneficiary->beneficiary_research_title ??
                                                '<span class="text-red-600 italic">No Research title provided</span>' !!}</span>
                                    </p>
                                    <ul class="space-y-2 mt-4">
                                        <li><span class="font-semibold text-gray-800">Duration:</span>
                                            {{ $beneficiary->scholarship_duration ?? 'Undefined' }}</li>
                                        <li><span class="font-semibold text-gray-800">University:</span>
                                            {{ $beneficiary->university ?? 'Null' }}</li>
                                        </li>
                                    </ul>
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
