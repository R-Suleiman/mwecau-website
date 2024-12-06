@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-3xl text-center font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Team Management Panel</h1>
    </div>
    <div class="text-end">
        <a href="{{ route('admin.project.team.create') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New Team Member</a>
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
                                <td
                                    class="px-4 py-2 border-r text-center hover:text-blue-600 font-semibold favFont text-wrap w-1/2">

                                    <a href="{{ route('admin.project.team.member-profile', $teamMember->name) }}">{{ $teamMember->initials }}
                                        {{ $teamMember->name }}<a>
                                </td>
                                <td class="px-4 py-2 border-r text-center"> {{ $teamMember->institute }}</td>
                                <td
                                    class="px-4 py-2 border-r text-center text-green-600 font-semibold uppercase text-xs tracking-widest">
                                    {{ $teamMember->position }}</td>
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.project.team.edit', $teamMember->name) }}"
                                        class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>

                                    <!-- Delete Button -->
                                    <form method="POST"
                                        action="{{ route('admin.project.team.destroy', $teamMember->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300"
                                            onclick="return confirm('Are you sure you want to delete this team member and related data?');">
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

        <div class="flex items-center justify-center mt-9">
            <div class="bg-blue-100 border-l-4 border-r-4 border-blue-500 text-blue-700 py-4 px-6 rounded-lg shadow-sm">
                <p class="font-semibold italic">
                    To add a new team member, select a project, click 'Add Member' from the dropdown, and add the member.
                    They will then appear in the team list.
                </p>
            </div>
        </div>

    </div>
@endsection
