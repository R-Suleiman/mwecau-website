@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Postgraduate Student Forms</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        {{-- REMOVE h-screen !!!!!!! --}}
        <div class="w-full md:w-10/12 mx-auto my-4 h-screen">
            @if ($studentForms->count() > 0)
                @foreach ($studentForms as $form)
                <div><a href="{{ route('dpric.view-document', $form->name) }}" class="text-lg text-default-head hover:underline"><i class="fa fa-download"></i> <span class="ml-2">{{ $form->name }}</span></a></div>
                @endforeach
            @else
            <div class="w-2/3 mx-auto bg-blue-300 my-8 p-2 text-lg">No Documents found!</div>
            @endif
        </div>
    </section>
@endsection
