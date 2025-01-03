@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-between items-center">
                <h2 class="oswald my-4 text-3xl text-blue-800">{{ $club_name }} Activities</h2>
                <a href="{{ route('admin.activities.create', ['club_name' => $club_name]) }}"><button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add activity
                        </button></a>
            </div>
        </div>

            <div class="w-full lg:w-11/12 overflow-x-auto mx-auto my-4">
                <table class="min-w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-500 whitespace-nowrap">
                        <tr>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                s/n
                            </th>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                               Activity name
                            </th>
                            <th class="px-4 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                        @php
                            $count = 1;
                        @endphp
                        @if ($activities->count() > 0)
                            @foreach ($activities as $activity)
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        {{ $count++ }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800">
                                        {{ $activity->activity_name }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-800 flex items-center">
                                        <a href="{{ route('admin.activities.edit', ['club_name' => $club_name, 'activity' => $activity]) }}"><button
                                                class="bg-yellow-200 px-2 text-lg hover:bg-yellow-300 text-white rounded-lg mx-2"><i class="fa fa-edit mx-2 text-xl text-yellow-700 cursor-pointer"></i></button></a>
                                        <form action="{{ route('admin.activities.destroy', ['club_name' => $club_name, 'activity' => $activity]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="w-full bg-orange-200 hover:bg-orange-300 text-white py-1 px-4 rounded-md">
                                                <i class="fa fa-trash mx-2 text-xl text-orange-700 cursor-pointer"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-4 py-4 text-sm text-gray-800 text-center" colspan="4">
                                    No Activity Found!
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

    </section>
@endsection
