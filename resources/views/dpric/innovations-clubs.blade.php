@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Our Innovations clubs</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>


    </section>

    <section class="w-full p-2 mb-8">
        @if ($clubs->count() > 0)
            <div class="w-full md:w-10/12 mx-auto flex flex-wrap flex-col md:flex-row p-4">
                @foreach ($clubs as $club)
                    <div class="w-full md:w-1/2 my-4">
                        <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                            <div class="w-full h-60 overflow-hidden"><a href="{{ route('dpric.innovations-club', $club->name) }}"><img
                                        src="{{ $club->primary_image ? asset('/storage/images/dpric/clubs/' . $club->primary_image) : '../../img/mwecau.png' }}"
                                        alt="" class="w-full object-cover object-center"></a></div>
                            <div class="w-full p-2 text-center">
                                <a href="{{ route('dpric.innovations-club', $club->name) }}">
                                    <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">
                                        {{ $club->name }}</h3>
                                </a>
                                <p class="text-md my-2 text-default-text">{{ Str::words($club->description, 50, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Club found!</div>
        @endif

    </section>
@endsection
