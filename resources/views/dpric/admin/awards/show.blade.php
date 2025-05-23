@extends('layouts.dpric.dpric-admin-layout')

@section('content')

<section class="w-11/12 mx-auto">
    <div class="flex flex-col my-4 p-4 ">
        <div class="w-fit mx-auto">
            <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $award->title }}</h2>
        </div>
    </div>

    <div class="w-full md:w-1/5 mx-auto h-48 border border-purple-500 rounded-full overflow-hidden">
        <img src="{{ $award->image ? asset('/storage/images/dpric/awards/' . $award->image) : '../../img/mwecau.png' }}" alt="" class="w-full rounded-md object-cover h-full">
    </div>

    <div class="my-8 w-full md:w-2/3 mx-auto text-center">
        <span class="text-md text-default-head mx-1">Date Awarded: </span> <span class="my-2 text-default-text text-md">{{ $award->date }}</span>
    </div>

    <div class="w-11/12 mx-auto my-8">
        <p class="my-4 text-lg text-default-text text-center">
            {{ $award->description }}
        </p>
    </div>

    <div class="w-fit mx-auto my-4 flex">
        <button class="bg-green-700 hover:bg-green-800 text-white py-2 px-8 rounded-md my-2 mx-4"><a href="{{ route('admin.dpric-awards.edit', $award) }}">Edit</a></button>
        <form action="{{ route('admin.dpric-awards.destroy', $award) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="bg-orange-700 hover:bg-orange-800 text-white py-2 px-8 rounded-md my-2 mx-4">Delete</button>
        </form>
    </div>
</section>
@endsection
