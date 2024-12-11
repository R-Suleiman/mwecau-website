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
                    @if ($scholarships && $scholarships->isNotEmpty())
                        @foreach ($scholarships as $scholarship)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td class="px-6 py-4 border-r border-t border-blue-800 text-center align-top">
                                    <div class="text-lg font-medium text-gray-900">
                                        {{ $scholarship->name }}
                                    </div>
                                    @if (optional($scholarship->beneficiaries)->isNotEmpty())
                                        <div class="mt-4">
                                            <span
                                                class="text-sm font-semibold text-blue-600 uppercase tracking-wide underline">
                                                Beneficiaries
                                            </span>
                                            <ul class="space-y-3 mt-3 text-left">
                                                @foreach ($scholarship->beneficiaries as $beneficiary)
                                                    <li
                                                        class="p-2 border rounded-lg bg-gray-50 shadow-sm flex justify-between items-center">
                                                        <div>
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800">Name:</span>
                                                            <span class="block text-sm text-gray-600 font-semibold">
                                                                {{ $beneficiary->beneficiary_name ?? 'Undefined' }}
                                                            </span>
                                                        </div>
                                                        <div class="flex space-x-2">
                                                            <!-- Edit Button -->
                                                            <a
                                                                href="{{ route('admin.project.scholarship.edit-project-scholarship-beneficiary', $beneficiary->beneficiary_name) }}">
                                                                <button type="button"
                                                                    class="px-3 py-1 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                                                                    <i class="fas fa-pencil"></i>
                                                                </button>
                                                            </a>
                                                            <!-- Delete Button -->
                                                            <form method="POST"
                                                                action="{{ route('admin.project.scholarship.destroy-beneficiary', $beneficiary->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="px-3 py-1 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300"
                                                                    onclick="return confirm('Are you sure you want to delete this beneficiary?');">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <span class="text-red-600 font-medium italic">Currently, this scholarship has no
                                            beneficiaries.</span>
                                    @endif
                                </td>

                                <td class="px-4 py-2 border-r border-t border-blue-800 text-center">
                                    {{ $scholarship->offerd_by }}</td>
                                <td
                                    class="px-4 py-2 border-r border-t border-blue-800 text-center text-green-600 font-semibold">
                                    @if ($scholarship->status == 'Open')
                                        <strong
                                            class="text-green-600 px-4 py-2 shadow-lg bg-gray-100 border border-gray-100 rounded-xl">Open</strong>
                                    @else
                                        <strong
                                            class="text-red-600 px-4 py-2 shadow-lg bg-gray-100 border border-gray-100 rounded-xl">Closed</strong>
                                    @endif
                                </td>
                                <td class="px-4 py-2 flex items-center border-t border-blue-800 justify-center space-x-2">
                                    @if ($scholarship->project_id)
                                        <a href="{{ route('admin.project.scholarship.create-project-beneficiary', $scholarship->name) }}"
                                            class="px-3 py-1 text-sm font-medium bg-gray-800 hover:bg-gray-700 text-white uppercase rounded-md transition duration-150 ease-in-out">Add
                                            Beneficiary</a>
                                    @else
                                        <a href="{{ route('admin.project.scholarship.scholarship-to-project', $scholarship->name) }}"
                                            class="px-3 py-1 text-sm font-medium bg-indigo-600 hover:bg-indigo-500 text-white uppercase rounded-md transition duration-150 ease-in-out">Add
                                            Project</a>
                                    @endif

                                    <a href="{{ route('admin.project.scholarship.edit', $scholarship->name) }}"
                                        class="px-3 py-1 text-sm font-medium bg-emerald-600 hover:bg-emerald-500 text-white uppercase rounded-md transition duration-150 ease-in-out">Edit</a>

                                    <!-- Delete Button -->
                                    <form method="POST"
                                        action="{{ route('admin.project.scholarship.destroy', $scholarship->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300"
                                            onclick="return confirm('Are you sure you want to delete this Scholarship?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
