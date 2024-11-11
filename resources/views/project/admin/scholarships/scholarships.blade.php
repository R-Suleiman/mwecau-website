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
        <a href="{{ route('admin.project.scholarship.create') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New Scholarship</a>
    </div>
    <x-project-admin-messages />
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
                    @php
                        $counter = 1;
                    @endphp
                    @if ($scholarships->isNotEmpty())
                        @foreach ($scholarships as $scholarship)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td class="px-4 py-2 border-r text-center">{{ $scholarship->name }}</td>
                                <td class="px-4 py-2 border-r text-center">{{ $scholarship->offerd_by }}</td>
                                @if ($scholarship->status = 'open')
                                    <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">
                                        {{ $scholarship->status }}</td>
                                @elseif ($scholarship->status = 'closed')
                                    <td class="px-4 py-2 border-r text-center text-red-600 font-semibold">
                                        {{ $scholarship->status }}</td>
                                @endif
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.project.scholarship.edit', $scholarship->name) }}"
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
