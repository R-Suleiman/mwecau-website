@extends('layouts.project.project-layout')

@section('content')

<section class="w-full  px-4 pt-10 md:py-10 my-4 flex flex-col items-center">
    <div class="flex flex-col items-center w-max mb-4 mx-auto my-8">
        <h2 class="uppercase text-2xl text-center text-blue-800">Contact Us</h2>
        <div class="mt-3 border border-purple-500 w-3/5"></div>
    </div>

    <div class="w-full p-4 md:w-10/12 md:p-0 mx-auto text-justify my-2">
    <h4 class="text-lg mb-2">Location</h4>
    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sit laborum, beatae labore dolorem veniam nisi ipsum soluta voluptatum rem voluptas! Alias consectetur pariatur beatae necessitatibus autem quae minus perspiciatis?Earum hic ipsum ipsa? Rem hic veritatis sequi impedit, animi delectus reiciendis. Architecto facilis sunt assumenda, placeat laudantium dolorum aliquam ullam, velit pariatur iure in rem obcaecati excepturi odio cupiditate.</p>
    </div>

    <div class="w-full p-2 md:w-8/12 flex flex-col md:flex-row my-8 mx-auto justify-between">
        <div class="w-full md:w-1/2 flex my-4 md:my-2">
            <i class="fa fa-house mx-4 text-xl text-purple-800"></i>
            <div class="flex flex-col text-gray-500">
                <label class="mb-2">Physical Address:</label>
                <span>Mwenge Catholic University</span>
                <span>PO.BOX 1226 Moshi.</span>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex my-4 md:my-2">
            <i class="fa fa-phone mx-4 text-xl text-purple-800"></i>
            <div class="flex flex-col text-gray-500">
                <label class="mb-2">Call Us:</label>
                <span>+255 27 297 4110</span>
                <span>+255 27 297 4110</span>
            </div>
        </div>
    </div>
</section>

@endsection
