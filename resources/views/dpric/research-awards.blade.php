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
                <h2 class="text-default-head text-3xl my-4">Honoring Achievement with Research Awards</h2>
                <p class="text-lg text-default-text my-2">
                    Our Research Awards celebrate exceptional work that advances knowledge and drives innovation. These
                    awards recognize researchers whose contributions have made a significant impact, inspiring the academic
                    community and beyond. Join us in acknowledging excellence and fostering a culture of discovery!
                </p>
            </div>
        </div>

        <div class="dpric-awards px-4 py-8 lg:p-4 my-8 w-full md:w-9/12 mx-auto">
            <div class="w-full">
                <div class="w-full mx-auto flex flex-col lg:flex-row border border-blue-500  rounded-lg">
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" alt=""
                            class="w-full mx-auto rounded-lg">
                    </div>
                    <div class="w-full lg:w-1/2 lg:bg-blue-800 relative">
                        <div class="lg:rounded-br-full lg:rounded-bl-full h-full bg-white py-2 px-4 text-center">
                            <h3 class="text-default-head text-xl my-2">Award Title</h3>
                            <p class="text-lg text-default-text my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum laudantium dolore quae culpa architecto commodi adipisci reprehenderit voluptate doloribus
                                iste sit recusandae voluptatem atque quas dignissimos, officia qui quis ipsa.</p>
                            <span class="text-default-text text-lg my-2">11/12/2023</span>
                        </div>
                        <div class="w-fit m-4 p-2">
                            <i class="fa fa-trophy text-5xl text-default-head lg:text-white absolute bottom-4 left-3"></i>
                        </div>
                        <div class="w-fit m-4 p-2">
                            <i class="fa fa-award text-5xl text-default-head lg:text-white absolute bottom-4 right-4"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="w-full mx-auto flex flex-col lg:flex-row border border-blue-500  rounded-lg">
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('img/campus-life/spirtual3.jpg') }}" alt=""
                            class="w-full mx-auto rounded-lg">
                    </div>
                    <div class="w-full lg:w-1/2 lg:bg-blue-800 relative">
                        <div class="lg:rounded-br-full lg:rounded-bl-full h-full bg-white py-2 px-4 text-center">
                            <h3 class="text-default-head text-xl my-2">Award Title</h3>
                            <p class="text-lg text-default-text my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum laudantium dolore quae culpa architecto commodi adipisci reprehenderit voluptate doloribus
                                iste sit recusandae voluptatem atque quas dignissimos, officia qui quis ipsa.</p>
                            <span class="text-default-text text-lg my-2">11/12/2023</span>
                        </div>
                        <div class="w-fit m-4 p-2">
                            <i class="fa fa-trophy text-5xl text-default-head lg:text-white absolute bottom-4 left-3"></i>
                        </div>
                        <div class="w-fit m-4 p-2">
                            <i class="fa fa-award text-5xl text-default-head lg:text-white absolute bottom-4 right-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
