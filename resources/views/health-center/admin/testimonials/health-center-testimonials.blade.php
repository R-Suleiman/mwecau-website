@extends('layouts.health-center.admin.health-center-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-end">
        <a href="{{ route('health-center.create-testimonial') }}"
            class="favFont py-2 px-4 text-sm font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-plus"></i> Add New</a>
    </div>

    <div class="text-gray-900 uppercase rounded-md py-4 px-7 mt-7">
        <h1
            class="headerFavFont text-2xl bg-clip-text text-transparent bg-gradient-to-r from-gray-700 to-gray-200 font-bold">
            Testimonials</h1>
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
                        <th class="px-4 py-2 border">Testifie Name</th>
                        <th class="px-4 py-2 border">Testimonial</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @php
                        $counter = 1;
                    @endphp
                    @if ($testimonials->isNotEmpty())
                        @foreach ($testimonials as $testimonial)
                            <tr class="hover:bg-gray-100 border border-gray-400">
                                <td class="px-4 py-2 border-r text-center">{{ $counter++ }}</td>
                                <td
                                    class="px-4 py-2 border-r text-center font-semibold hover:text-blue-700 favFont text-wrap">
                                    <a
                                        href="{{ route('health-center.edit-testimonial', $testimonial->id) }}">{!! Str::limit($testimonial->testifier_name, '40') !!}</a>
                                </td>

                                <td class="px-4 py-2 border-r text-center font-semibold italic w-1/2">
                                    {{ $testimonial->testimonial_description }}</td>

                                <td class="px-4 py-2 flex items-center justify-center space-x-2">
                                    <a href="{{ route('health-center.edit-testimonial', $testimonial->id) }}"
                                        class="py-1 px-3 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-semibold rounded-md transition duration-150 ease-in-out">Edit</a>

                                    <form action="{{ route('health-center.destroy-testimonial', $testimonial->id) }}"
                                        method="POST">
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
