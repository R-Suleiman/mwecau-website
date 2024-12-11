@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <div class="w-11/12 mx-auto flex flex-col md:flex-row justify-between items-center">
        <h2 class="oswald my-4 text-3xl text-blue-800">Department's Awards and Honors</h2>
        <a href="{{ route('admin.dpric-awards.create') }}"><button
                class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Add
                Award</button></a>
    </div>
    <div class="my-4 p-4 w-full flex flex-col flex-wrap md:flex-row md:space-x-8">
        @if ($awards->count() > 0)
            @foreach ($awards as $award)
                <div class="w-full md:w-1/4 flex flex-col items-center my-8 shadow-sm shadow-blue-800 p-2 rounded-md">
                    <div class="w-2/5 rounded-full border border-purple-500 h-28 overflow-hidden">
                        <img src="{{ $award->image ? asset('/storage/images/dpric/awards/' . $award->image) : '../../img/mwecau.png' }}" alt=""
                            class="w-full object-cover mx-auto border-2 border-white h-full">
                    </div>
                    <h4 class="mt-4 text-xl hover:text-default-head text-center"><a href="{{ route('admin.dpric-awards.show', $award) }}">{{ $award->title }}</a></h4>
                </div>
            @endforeach
        @else
            <div class="w-10/12 p-2 my-4 mx-auto border-l-4 border-blue-800 text-default-text bg-blue-100 text-lg">No Awards
                Found</div>
        @endif
    </div>
@endsection
