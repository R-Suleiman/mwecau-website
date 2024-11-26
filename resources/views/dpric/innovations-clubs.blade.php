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
        <div class="w-full md:w-10/12 mx-auto flex flex-wrap flex-col md:flex-row p-4">
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="{{ route('dpric.innovations-club') }}"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="{{ route('dpric.innovations-club') }}">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT Club
                            </h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mx-auto my-4">
                <div class="w-full md:w-11/12 mx-auto border border-default-text rounded-md">
                    <div class="w-full"><a href="#"><img src="{{ asset('img/campus-life/spirtual1.jpg') }}"
                                alt="" class="w-full"></a></div>
                    <div class="w-full p-2 text-center">
                        <a href="#">
                            <h3 class="text-3xl my-4 text-default-head hover:text-blue-950 uppercase oswald">MWECAU ICT
                                Club</h3>
                        </a>
                        <p class="text-md my-2 text-default-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis reiciendis architecto officiis suscipit, harum atque autem repudiandae. Praesentium,
                            sequi, dolor neque eius, laborum a aperiam cumque molestias corporis amet suscipit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
