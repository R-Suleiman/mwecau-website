@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">{{ $regulations->title }}</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>


<div class=" w-11/12 mx-auto">
    <p class="my-4 text-lg text-default-text text-justify">{{ $regulations->description }}</p>
</div>

<div class="w-full md:w-10/12 mx-auto my-4 ">
    @if ($documents->count() > 0)
        @foreach ($documents as $document)
            <div><a href="{{ route('dpric.view-document', $document->name) }}"
                    class="text-lg text-default-head hover:underline"><i class="fa fa-download"></i> <span
                        class="ml-2">{{ $document->name }}</span></a></div>
        @endforeach
    @else
        <div class="w-2/3 mx-auto bg-blue-300 my-8 p-2 text-lg">No Documents Available!</div>
    @endif

</div>
    </section>
@endsection
