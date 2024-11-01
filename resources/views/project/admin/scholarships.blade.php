@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div
        class="bg-gray-200 text-gray-900 uppercase flex items-center justify-center text-center rounded-md shadow-lg py-4 px-7 mt-7 mb-7">
        <h1
            class="text-3xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Scholarships Panel</h1>
    </div>
    <div class="text-end">
        <a href="#"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New Scholarship</a>
    </div>

    <div class="pt-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 text-gray-700">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="px-4 py-2 border">S/N</th>
                        <th class="px-4 py-2 border">Scholarship Name</th>
                        <th class="px-4 py-2 border">Offerd By</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-r text-center">1</td>
                        <td class="px-4 py-2 border-r text-center">Full Funded Scholarships</td>
                        <td class="px-4 py-2 border-r text-center">Nelson Mandele African Institute Of Science and
                            Technology</td>
                        <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">Active</td>
                        <td class="px-4 py-2 flex items-center justify-center space-x-2">
                            <a href="#"
                                class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                            <a href="#"
                                class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-r text-center">2</td>
                        <td class="px-4 py-2 border-r text-center">Arch Bishop Izack Aman Scholarships</td>
                        <td class="px-4 py-2 border-r text-center">Mwenge Catholic University</td>
                        <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">Active</td>
                        <td class="px-4 py-2 flex items-center justify-center space-x-2">
                            <a href="#"
                                class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                            <a href="#"
                                class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-r text-center">3</td>
                        <td class="px-4 py-2 border-r text-center">Full Funded Scholarships</td>
                        <td class="px-4 py-2 border-r text-center">University Of Kisubi</td>
                        <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">Active</td>
                        <td class="px-4 py-2 flex items-center justify-center space-x-2">
                            <a href="#"
                                class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                            <a href="#"
                                class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-r text-center">4</td>
                        <td class="px-4 py-2 border-r text-center">Full Funded Scholarships</td>
                        <td class="px-4 py-2 border-r text-center">University of Kleuven</td>
                        <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">Active</td>
                        <td class="px-4 py-2 flex items-center justify-center space-x-2">
                            <a href="#"
                                class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                            <a href="#"
                                class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-r text-center">5</td>
                        <td class="px-4 py-2 border-r text-center">Full Funded Scholarships</td>
                        <td class="px-4 py-2 border-r text-center">University of Georgia (UGA)</td>
                        <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">Active</td>
                        <td class="px-4 py-2 flex items-center justify-center space-x-2">
                            <a href="#"
                                class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                            <a href="#"
                                class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
