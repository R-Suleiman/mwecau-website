@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">ICT Club Innovation Projects</h2>
                <div class="w-4/5 border border-purple-500 mx-auto"></div>
            </div>
        </div>
    </section>

    <section class="w-full p-2 mb-8">
        <div class="w-full md:w-11/12 mx-auto flex flex-col lg:flex-row my-4">
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Technology</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU ICT CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Environment</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU PCCB CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/3 my-4">
                <a href="{{ route('dpric.innovations-project') }}">
                    <div
                        class="relative w-11/12 mx-auto h-80 bg-blue-800 border border-blue-500 shadow-md shadow-blue-800 hover:shadow-lg hover:shadow-blue-900">
                        <div class="img-bg relative rounded-br-full h-full">
                            <div class="px-6 py-4 flex flex-col  bg-white overlay3">
                                <span class="bg-blue-800 py-1 px-2 rounded-lg text-white w-fit">Agricluture</span>
                                <div class="mt-4 flex flex-col text-white">
                                    <h3 class="text-xl my-1">Title of the Project</h3>
                                    <span class="mb-1 text-lg">Participants: MWECAU Agriculture CLub</span>
                                    <span class="mb-1 text-lg">Location: MWECAU</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 m-6 w-fit">
                            <i class="fa fa-lightbulb text-4xl text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
