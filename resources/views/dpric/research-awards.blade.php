@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Research Awards</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>

        <div class="w-full md:w-11/12 mx-auto my-4 p-8 relative min-h-[350px] md:min-h-[200px] shadow-md shadow-blue-400">
            <div class="w-full text-center opacity-25">
                <i class="fa fa-award text-8xl text-default-head"></i>
            </div>
            <div class="text-center absolute top-0">
                <h2 class="text-default-head text-3xl my-4">{{ $researchAwards->title }}</h2>
                <p class="text-lg text-default-text my-2">
                    {{ $researchAwards->description }}
                </p>
            </div>
        </div>

        <div class="px-4 py-8 lg:p-4 my-8 w-full mx-auto flex flex-wrap flex-col lg:flex-row">
            @if ($awards->count() > 0)
                @foreach ($awards as $award)
                    <div class="w-full lg:w-1/3">
                        <div class="w-11/12 mx-auto flex flex-col  border border-blue-500  rounded-lg">
                            <div class="w-full overflow-hidden h-52">
                                <img src="{{ $award->image ? asset('/storage/images/dpric/awards/' . $award->image) : '../../img/mwecau.png' }}" alt=""
                                    class="w-full rounded-lg object-cover">
                            </div>
                            <div class="w-full lg:bg-blue-800 relative">
                                <div class="lg:rounded-br-full lg:rounded-bl-full h-full bg-white py-2 px-4 text-center">
                                    <h3 class="text-default-head text-xl my-2">{{ $award->title }}</h3>
                                    <p class="text-lg text-default-text my-2">{{ $award->description }}</p>
                                    <span class="text-default-text text-lg my-2">{{ explode(' ', $award->created_at)[0] }}</span>
                                </div>
                                <div class="w-fit m-4 p-2">
                                    <i
                                        class="fa fa-trophy text-5xl text-default-head lg:text-white absolute bottom-4 left-3"></i>
                                </div>
                                <div class="w-fit m-4 p-2">
                                    <i
                                        class="fa fa-award text-5xl text-default-head lg:text-white absolute bottom-4 right-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="w-2/3 mx-auto bg-blue-300 my-8 p-4 text-xl">No Awards found!</div>
            @endif
        </div>
    </section>
@endsection
