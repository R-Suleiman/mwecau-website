@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div
        class="bg-gray-200 text-gray-900 uppercase flex items-center justify-center text-center rounded-md shadow-lg py-4 px-7 mt-7 mb-7">
        <h1
            class="text-3xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Manage Project Publications</h1>
    </div>
    <div class="text-end">
        <a href="{{ route('admin.project.publication.create') }}" class="py-3 bg-purple-700 rounded-full ">
            <i class="fa fa-plus text-white font-semibold text-xl p-4"></i></a>
    </div>

    {{-- admin messages --}}
    <x-project-admin-messages />
    <div class="pt-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 text-gray-700">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="px-4 py-2 border">S/N</th>
                        <th class="px-4 py-2 border">Publication Title</th>
                        <th class="px-4 py-2 border">Author</th>
                        <th class="px-4 py-2 border">Year</th>
                        <th class="px-4 py-2 border">Document 1</th>
                        <th class="px-4 py-2 border">Document 2</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @php
                        $counter = 1;
                    @endphp
                    @if ($publications && $publications->isNotEmpty())
                        @foreach ($publications as $publication)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td class="px-6 py-4 w-[25rem] border-r border-t border-blue-800 text-center align-top">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $publication->title }}
                                    </div>
                                </td>

                                <td class="px-4 py-2 border-r border-t border-blue-800 text-center">
                                    {{ $publication->author }}
                                </td>
                                <td
                                    class="px-4 py-2 border-r border-t border-blue-800 text-center text-green-600 font-semibold">
                                    {{ $publication->year }}
                                </td>

                                <td class="px-4 py-2 border-r border-t border-blue-800 text-center">
                                    {!! $publication->document1 ?? "<span class='italic'> Null</span>" !!}
                                </td>

                                <td class="px-4 py-2 border-r border-t border-blue-800 text-center">
                                    {!! $publication->document2 ?? "<span class='italic'> Null</span>" !!}
                                </td>

                                <td class="px-4 py-2 border-r border-t border-blue-800 text-center">
                                    <div class="flex space-x-2">
                                        <!-- Edit Button -->
                                        <a
                                            href="{{ route('admin.project.publication.edit', $publication->title) }}">
                                            <button type="button"
                                                class="px-3 py-1 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                        </a>
                                        <!-- Delete Button -->
                                        <form method="POST"
                                            action="{{ route('admin.project.scholarship.destroy-beneficiary', $publication->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300"
                                                onclick="return confirm('Are you sure you want to delete this project publication?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
