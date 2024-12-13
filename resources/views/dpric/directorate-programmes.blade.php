@php
    $postgraduateProgrammes = [];

    foreach ($faculties as $faculty) {
        foreach ($faculty['departments'] as $department) {
            foreach ($department['programmes'] as $programme) {
                if ($programme['study_level_code'] === 'MAS' || $programme['study_level_code'] === 'PHD') {
                    array_push($postgraduateProgrammes, $programme);
                }
            }
        }
    }
    $counter = 1;
@endphp

@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('/storage/images/dpric/general/' . $bannerImg) }}')">
        <div class="overlay">
        </div>
    </section>

    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Directorate Programmes</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full lg:w-11/12 overflow-x-auto mx-auto my-4">
            <table class="min-w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-gray-500 whitespace-nowrap">
                    <tr>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            s/n
                        </th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Programme Name
                        </th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Duration
                        </th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                    @foreach ($postgraduateProgrammes as $programme)
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            {{ $counter++ }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                           {{ $programme['programme_name'] }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            {{ $programme['prog_duration'] }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            <a href="{{ route('course_details', ['post-graduate', $programme['programme_name']]) }}"><button
                                    class="border-2 border-purple-600 px-2 text-lg hover:bg-gray-600 hover:text-white rounded-lg">view</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
