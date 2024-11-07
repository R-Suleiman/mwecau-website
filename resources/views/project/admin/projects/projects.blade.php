@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-3xl text-center font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Project Dashboard</h1>
    </div>
    <div class="text-end">
        <div class="">

        </div>
        <a href="{{ route('admin.project.create') }}"
            class="favFont py-2 px-4 text-sm font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New project</a>
    </div>

    <div class="w-full">
        <x-project-admin-messages />
    </div>

    <div class="pt-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 text-gray-700">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="px-4 py-2 border">S/N</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Duration</th>
                        <th class="px-4 py-2 border">Category</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @php
                        $counter = 1;
                    @endphp
                    @if ($projects->isNotEmpty())
                        @foreach ($projects as $project)
                            <tr class="hover:bg-gray-100 border border-gray-400">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td
                                    class="px-4 py-2 border-r text-center font-semibold hover:text-blue-700 favFont text-wrap">
                                    <a
                                        href="{{ route('admin.project.details', $project->name) }}">{!! Str::limit($project->name, '40') !!}</a>
                                </td>
                                <td class="px-4 py-2 border-r text-center">{{ $project->duration }}</td>
                                <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">
                                    {{ $project->category }}</td>
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.project.edit', $project->name) }}"
                                        class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>

                                    <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                            class="py-1 px-3 bg-red-600 hover:bg-red-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">
                                            Delete
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <div class="flex justify-center items-center font-semibold uppercase">
                            No records found
                        </div>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
