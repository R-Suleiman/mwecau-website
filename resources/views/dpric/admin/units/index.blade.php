@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <div class="w-11/12 mx-auto flex flex-col md:flex-row justify-between items-center">
        <h2 class="oswald my-4 text-3xl text-blue-800">Postgraduate Units</h2>
        <a href="{{ route('admin.dpric-units.create') }}"><button
                class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add
                Unit</button></a>
    </div>
    <div class="my-4 p-4 w-full flex flex-col lg:flex-row">
        @foreach ($units as $unit)
            <div class="w-full my-4 lg:my-0 lg:w-1/3">
                <a href="{{ route('admin.dpric-units.show', $unit) }}">
                    <div class="w-11/12 mx-auto border border-gray-300 rounded-lg">
                        <div class="w-full mb-2 h-52 overflow-hidden">
                            <img src="{{ $unit->image ? asset('/storage/images/dpric/units/' . $unit->image) : '../../img/mwecau.png' }}"
                                alt="unit image"
                                class="w-full object-center transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </div>
                        <div class="w-full mt-2 p-4 text-justify">
                            <h4 class="text-blue-800 hover:text-purple-600 mb-1 text-lg font-semibold">{{ $unit->title }}
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>
@endsection
