@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Directorate News</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>


    </section>

    <section class="w-full p-2 mb-8">
        <div class="w-full mx-auto flex flex-col lg:flex-row flex-wrap">
            <div class="w-full lg:w-1/2 my-4">
                <div class="w-full lg:w-11/12 mx-auto relative img-bg h-96">
                    <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                        <div class="w-full lg:w-2/6 bg-transparent">
                        </div>
                        <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                            <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                            <div class="p-2 text-white w-full">
                                <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="{{ route('dpric.single-news') }}">Title of the
                                        News/Announcement/Article</a></h3>
                                <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Blanditiis, a
                                    repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                                <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 my-4">
                <div class="w-full lg:w-11/12 mx-auto relative img-bg h-96">
                    <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                        <div class="w-full lg:w-2/6 bg-transparent">
                        </div>
                        <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                            <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                            <div class="p-2 text-white w-full">
                                <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="{{ route('dpric.single-news') }}">Title of the
                                        News/Announcement/Article</a></h3>
                                <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Blanditiis, a
                                    repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                                <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 my-4">
                <div class="w-full lg:w-11/12 mx-auto relative img-bg h-96">
                    <div class="w-full flex flex-col justify-between lg:flex-row border border-purple-500 overlay2 h-96">
                        <div class="w-full lg:w-2/6 bg-transparent">
                        </div>
                        <div class="w-full lg:w-4/6 bg-blue-800 opacity-85 bg-blend-multiply p-4 h-fit lg:h-96">
                            <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
                            <div class="p-2 text-white w-full">
                                <h3 class="my-4 text-lg md:text-xl lg:text-2xl"><a href="">Title of the
                                        News/Announcement/Article</a></h3>
                                <p class="text-sm md:text-lg my-2 hidden lg:block">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Blanditiis, a
                                    repellendus nemo voluptatibus atque debitis rem vitae itaque aliquid iste.</p>
                                <span class="my-2 text-gray-300 text-md">11/12/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
