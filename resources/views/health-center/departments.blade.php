@extends('layouts.health-center.health-center-layout')
@section('content')
    @php
        $pageId = null;
    @endphp

    {{-- //other departments --}}
    @if ($allDepartments)
        <section>
            <div class="container mx-auto mt-16 pb-32">
                <div class="w-max flex flex-col pb-8 items-center">
                    <h2 class="favFont text-purple-700 font-semibold tracking-wide text-2xl  ">
                        Departments</h2>
                    <div class="border-2 border-purple-500 m-5 w-2/3"></div>
                </div>

                <div class=" w-full grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($allDepartments as $department)
                        <div>
                            <div class="shadow-lg rounded-xl">
                                <div class="flex justify-center items-center">
                                    {{-- <img class="w-[400px] text-center rounded-xl object-cover overflow-hidden object-center"
                                        src="{{ asset('/storage/images/health-center/department-images/' . $department->thumbnail) }}"
                                        alt=""> --}}
                                </div>
                                <div class="mx-3 favFont p-4">
                                    <h4 class="text-purple-500 font-semibold">
                                        <a
                                            href="{{ route('health-center.department', $department['dept_name']) }}">{{ $department['dept_name'] }}</a>
                                    </h4>
                                    <p class="text-justify">
                                        {{-- {{ $department['dept_description'] }} --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif
@endsection
