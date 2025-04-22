@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Directorate Management</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-11/12 mx-auto">
            @foreach ($managementStaff as $staff)
                @if ($staff['rank'] == 1)
                    <div class="w-full md:w-1/3 my-2 mx-auto">
                        <div class="w-11/12">
                            <div class="w-full overflow-hidden h-72 rounded-full">
                                <img src="{{ asset('/storage/images/dpric/staff/' . $staff->photo) }}" alt=""
                                    class="w-full h-72 object-cover rounded-full">
                            </div>
                            <div class="p-2 flex flex-col items-center text-center">
                                <h3 class="text-xl text-gray-800">
                                    {{ $staff->initial . ' ' . $staff->first_name . ' ' . $staff->other_name . ' ' . $staff->last_name }}
                                </h3>
                                <span class="text-gray-700">{{ $staff->position }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="w-full flex flex-col md:flex-row flex-wrap">
                @foreach ($managementStaff as $staff)
                @if ($staff['rank'] != 1 && $staff['rank'] != 0)
                <div class="w-full md:w-1/3 my-2 mx-auto">
                    <div class="w-11/12">
                        <div class="w-full overflow-hidden h-72 rounded-full">
                            <img src="{{ asset('/storage/images/dpric/staff/' . $staff->photo) }}" alt=""
                                class="w-full h-72 object-cover rounded-full">
                        </div>
                        <div class="p-2 flex flex-col items-center text-center">
                            <h3 class="text-xl text-gray-800">
                                {{ $staff->initial . ' ' . $staff->first_name . ' ' . $staff->other_name . ' ' . $staff->last_name }}
                            </h3>
                            <span class="text-gray-700">{{ $staff->position }}</span>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>


            <div class="flex flex-col my-4 p-4 ">
                <div class="w-fit mx-auto">
                    <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Staff</h2>
                    <div class="w-4/5 border border-purple-500 mx-auto"></div>
                </div>
            </div>

            <div class="w-full flex flex-col md:flex-row flex-wrap">
                @foreach ($otherStaff as $staff)
                <div class="w-full md:w-1/3 my-2 mx-auto">
                    <div class="w-11/12">
                        <div class="w-full overflow-hidden h-72">
                            <img src="{{ asset('/storage/images/dpric/staff/' . $staff->photo) }}" alt=""
                                class="w-full h-72 object-cover">
                        </div>
                        <div class="p-2 flex flex-col items-center text-center">
                            <h3 class="text-xl text-gray-800">
                                {{ $staff->initial . ' ' . $staff->first_name . ' ' . $staff->other_name . ' ' . $staff->last_name }}
                            </h3>
                            <span class="text-gray-700">{{ $staff->position }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
