@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-3xl text-center font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Team Management Panel</h1>
    </div>
    <div class="text-end">
        <a href="#"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New Team Member</a>
    </div>

    <div class="pt-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 text-gray-700">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="px-4 py-2 border">S/N</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">University</th>
                        <th class="px-4 py-2 border">Position</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @php
                        $counter = 1;
                    @endphp
                    @if ($team)
                        @foreach ($team as $teamMember)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td class="px-4 py-2 border-r text-center font-semibold favFont text-wrap w-1/2">
                                    {{ $teamMember->name }}</td>
                                <td class="px-4 py-2 border-r text-center"> {{ $teamMember->institution }}</td>
                                <td class="px-4 py-2 border-r text-center text-green-600 font-semibold uppercase text-xs tracking-widest">
                                    {{ $teamMember->position }}</td>
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="#"
                                        class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                                    <a href="#"
                                        class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection
