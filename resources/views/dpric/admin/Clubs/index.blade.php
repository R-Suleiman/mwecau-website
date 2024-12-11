@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <div class="w-full flex flex-col md:flex-row justify-between items-center">
                <h2 class="oswald my-4 text-3xl text-blue-800">Clubs Management</h2>
                <a href="{{ route('admin.dpric-clubs.create') }}"><button
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950 my-4 md:my-0">Register
                        Club</button></a>
            </div>
        </div>

        @if ($clubs->count() > 0)
            <div class="w-full md:w-11/12 mx-auto flex flex-wrap flex-col md:flex-row p-4">
                @foreach ($clubs as $club)
                    <div class="w-full md:w-1/3 my-4">
                        <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                            <div class="w-full h-36 overflow-hidden"><a href="{{ route('admin.dpric-clubs.show', $club) }}"><img
                                        src="{{  $club->primary_image ? asset('/storage/images/dpric/clubs/' . $club->primary_image) : '../../img/mwecau.png' }}"
                                        alt="" class="w-full object-cover object-center"></a></div>
                            <div class="w-full p-2 text-center">
                                <a href="{{ route('admin.dpric-clubs.show', $club) }}">
                                    <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">
                                        {{ $club->name }}</h3>
                                </a>
                            </div>

                            <div class="mt-2 w-fit mx-auto mb-2 flex">
                                <button class="py-1 px-2 text-white bg-green-700 hover:bg-green-900 mx-2 rounded-sm"><a
                                        href="{{ route('admin.dpric-clubs.edit', $club) }}">Edit</a></button>
                                <form action="{{ route('admin.dpric-clubs.destroy', $club) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="py-1 px-2 text-white bg-orange-700 hover:bg-orange-900 mx-2 rounded-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="my-4 p-4 w-full flex flex-col flex-wrap md:flex-row md:space-x-8">
                <div class="w-10/12 p-2 my-4 mx-auto border-l-4 border-blue-800 text-default-text bg-blue-100 text-lg">No
                    Club
                    Found</div>
            </div>
        @endif

    </section>
@endsection
