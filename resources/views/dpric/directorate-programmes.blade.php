@extends('layouts.dpric.dpric-layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/health-center/header.jpg') }}')">
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
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            1
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            Msc. Computer Science
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            3 Years
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            <a href="#"><button
                                    class="border-2 border-purple-600 px-2 text-lg hover:bg-gray-600 hover:text-white rounded-lg">view</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            1
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            Msc. Computer Science
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            3 Years
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-800">
                            <a href="#"><button
                                    class="border-2 border-purple-600 px-2 text-lg hover:bg-gray-600 hover:text-white rounded-lg">view</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
