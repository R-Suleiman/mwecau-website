@extends('layouts.project.project-layout')

@section('content')
    <section class="w-full  px-4 pt-10 md:py-10 my-4 flex flex-col items-center">
        <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
            <h2 class="uppercase text-2xl text-center text-blue-800">Scholarships</h2>
            <div class="mt-3 border border-purple-500 w-3/5"></div>
        </div>

    </section>
    <div class="container mx-auto">
        <div
            class="w-full p-4 flex flex-col items-center justify-center text-center bg-green-50 rounded-xl border border-dashed border-green-200">
            <h2 class="text-2xl font-bold text-green-700 mb-2">Scholarships Coming Soon!</h2>
            <p class="text-gray-600 text-sm">Stay tuned for upcoming scholarship opportunities. We're working to bring you
                options to support your academic journey.</p>
            <i class="fas fa-graduation-cap text-green-400 text-5xl mt-4"></i>
        </div>

    </div>
@endsection
