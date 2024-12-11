@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Research Journals</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        {{-- REMOVE h-screen !!!!!!! --}}
        <div class="w-full md:w-10/12 mx-auto my-4 h-screen">
            @foreach ($journals as $journal)
                <div><a href="{{ route('uni-pdf-preview', $journal->file) }}" class="text-lg text-default-head hover:underline"><i class="fa fa-newspaper"></i> <span
                            class="ml-2">{{ $journal->header }}</span></a></div>
            @endforeach
        </div>
    </section>
@endsection
