@extends('layouts.dpric.dpric-layout')

@section('content')
    <section>
        <div class="flex flex-col my-4 p-4 ">
            <div class="w-fit mx-auto">
                <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">News title</h2>
            </div>
        </div>

        <div class="w-full md:w-2/3 mx-auto h-96">
            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>

        <div class="my-8 w-full md:w-2/3 mx-auto">
            <span class="bg-purple-900 text-white p-2 text-md md:text-lg rounded-lg md:mx-4">Category</span>
            <span class="my-2 text-default-text text-md">11/12/2024</span>
        </div>

        <div class="w-11/12 mx-auto my-8">
            <p class="my-4 text-lg text-default-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sed, nostrum assumenda illo, ducimus laboriosam sapiente quam dicta necessitatibus corporis distinctio aut
                magni maxime officiis unde animi nesciunt! Molestias, voluptates consectetur. Lorem ipsum dolor sit, amet
                consectetur adipisicing elit. Nemo magni quidem inventore iste, doloribus exercitationem cupiditate sed eum
                corrupti libero reiciendis eos maxime nesciunt! At a accusamus unde provident ducimus.
                Deleniti reiciendis illo autem, officiis non modi molestias doloribus maiores accusantium voluptatum
                corrupti consequatur consectetur voluptates, pariatur ipsum neque harum assumenda fugiat ipsa commodi quam
                suscipit. Laudantium voluptatum sed consequuntur?
                Expedita iste ad unde harum reiciendis animi dolorum illum vel sed numquam aspernatur illo quia molestiae
                perferendis ex debitis eos consequatur id, corrupti pariatur doloremque dolor sapiente commodi similique.
                Accusantium?</p>
        </div>
    </section>
@endsection
