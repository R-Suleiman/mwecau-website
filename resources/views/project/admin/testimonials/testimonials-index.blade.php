@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-3xl text-center font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            testmonial panel</h1>
    </div>
    <div class="text-end">
        <div class="">

        </div>
        <a href="{{ route('admin.project.testimonial.create-testimonial') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> New</a>
    </div>

    <x-project-admin-messages />

    <div class="pt-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 text-gray-700">
                <thead class="bg-purple-800 text-white">
                    <tr>
                        <th class="px-4 py-2 border">S/N</th>
                        <th class="px-4 py-2 border">Testifier Name</th>
                        <th class="px-4 py-2 border">Description</th>
                        <th class="px-4 py-2 border">Date Posted</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @php
                        $counter = 1;
                    @endphp
                    @if ($testimonials->isNotEmpty())
                        @foreach ($testimonials as $testimonial)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td
                                    class="px-4 py-2 border-r text-center hover:text-blue-600 font-semibold favFont text-wrap w-1/2">
                                    <a
                                        href="{{ route('admin.project.testimonial.about-testimonial', $testimonial->testifier_name) }}">{{ $testimonial->testifier_initials }}
                                        {{ $testimonial->testifier_name }}<a>
                                </td>
                                <td class="px-4 py-2 border-r text-center italic favFont text-wrap w-1/2">
                                    {{ Str::limit($testimonial->testimonial_description, 100) }}</td>
                                <td class="px-4 py-2 border-r text-center text-green-600 font-semibold">
                                    {{ $testimonial->created_at->isoFormat('dddd, MMMM Do YYYY') }}</td>
                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.project.testimonial.edit-testimonial', $testimonial->testifier_name) }}"
                                        class="block mx-4 mb-3 px-4 py-2 text-sm text-gray-900 font-semibold bg-emerald-400 hover:bg-emerald-300 border rounded-md">
                                        <i class="fa fa-pencil"></i> Edit</a>

                                    <form
                                        action="{{ route('admin.project.testimonial.destroy-testimonial', $testimonial->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure? This action can’t be reversed.');"
                                            class="block mx-4 mb-3 px-4 py-2 text-sm text-white font-semibold bg-red-600 hover:bg-red-500 border rounded-md hover:border-red-600">
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
