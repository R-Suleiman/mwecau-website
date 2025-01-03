@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <div class="w-11/12 mx-auto flex flex-col md:flex-row justify-between items-center">
        <h2 class="oswald my-4 text-3xl text-blue-800">Department's Management Images</h2>
        <a href="{{ route('admin.dpric-management.create') }}"><button
                class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Register
                Staff</button></a>
    </div>

    @if ($allStaff->count() > 0)
        <div class="w-full flex flex-col md:flex-row flex-wrap">
            @foreach ($allStaff as $staff)
                <div class="w-full md:w-1/4 my-2 mx-auto">
                    <div class="w-11/12">
                        <div class="w-full overflow-hidden h-56 bg-green-600">
                            <img src="{{ asset('/Storage/images/dpric/staff/' . $staff->photo) }}" alt="" class="w-full h-56 object-cover">
                        </div>
                        <div class="p-2 flex flex-col items-center">
                            <h3 class="text-lg text-gray-800 text-center">{{ $staff->initial . ' ' . $staff->first_name . ' ' . $staff->other_name . ' ' . $staff->last_name }}</a></h3>
                            <span class="text-gray-700 text-center">{{ $staff->position }}</span>
                        </div>

                        <div class="mt-2 w-full mx-auto">
                            <button class="w-full py-1 px-4 text-white bg-green-700 hover:bg-green-900 mx-2 rounded-sm"><a
                                    href="{{ route('admin.dpric-management.edit', $staff) }}">Edit</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="my-4 p-4 w-full flex flex-col flex-wrap md:flex-row md:space-x-8">
            <div class="w-10/12 p-2 my-4 mx-auto border-l-4 border-blue-800 text-default-text bg-blue-100 text-lg">No Staff
                Found</div>
        </div>
    @endif

@endsection
