@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-3xl text-center font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Conferences panel</h1>
    </div>

    <div class="w-full">
        <x-project-admin-messages />
    </div>

    <div class="flex h-screen bg-gray-100">
        <main class="flex-1 p-6">
            <div class="mt-4">
                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('admin.project.conference.create') }}">
                    Add Conference
                </a>
            </div>
            <table class="min-w-full mt-4 bg-white">
                <thead>
                    <tr>
                        <th class="py-2">S/N</th>
                        <th class="py-2">Name</th>
                        <th class="py-2">Date</th>
                        <th class="py-2">Location</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @if ($conferences->isNotEmpty())
                        @foreach ($conferences as $conference)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2">{{ $counter++ }}</td>
                                <td class="py-2">{{ $conference->name }}</td>
                                <td class="py-2">
                                    {{ \Carbon\Carbon::parse($conference->date)->isoFormat('dddd, MMMM oD YYYY') }}</td>
                                <td class="py-2">{{ $conference->location }}</td>
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.project.conference.edit', $conference->name) }}"
                                        class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>
                                    <form action="{{ route('admin.project.conference.destroy', $conference->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                            class="block mx-4 mb-3 px-4 py-2 text-sm text-red-700 font-semibold hover:bg-gray-100 border rounded-md hover:border-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </main>
    </div>
@endsection
