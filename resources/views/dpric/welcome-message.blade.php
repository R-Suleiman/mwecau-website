@extends('layouts.dpric.dpric-layout')

@section('content')

{{-- Welcome Message --}}
<section>
    <div class="flex flex-col my-4 p-4 ">
        <div class="w-fit mx-auto">
            <h2 class="uppercase text-xl lg:text-3xl text-center text-default-head">Welcome Message From The Director</h2>
            <div class="w-4/5 border border-purple-500 mx-auto"></div>
        </div>
    </div>

    <div class="w-11/12 mx-auto text-default-text text-lg">
        <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum praesentium quisquam nulla provident quasi illum animi error earum eligendi velit, dolore nostrum sapiente voluptatum ut eum! Minus tempore dignissimos excepturi.Sunt aut impedit, doloribus quam quod, repellat magni quae qui, velit pariatur necessitatibus aliquam vel iusto! Aliquid esse libero error modi aperiam ducimus repudiandae quis reiciendis unde consectetur! Neque, explicabo?</p>

        <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum praesentium quisquam nulla provident quasi illum animi error earum eligendi velit, dolore nostrum sapiente voluptatum ut eum! Minus tempore dignissimos excepturi.Sunt aut impedit, doloribus quam quod, repellat magni quae qui, velit pariatur necessitatibus aliquam vel iusto! Aliquid esse libero error modi aperiam ducimus repudiandae quis reiciendis unde consectetur! Neque, explicabo?</p>

        <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum praesentium quisquam nulla provident quasi illum animi error earum eligendi velit, dolore nostrum sapiente voluptatum ut eum! Minus tempore dignissimos excepturi.Sunt aut impedit, doloribus quam quod, repellat magni quae qui, velit pariatur necessitatibus aliquam vel iusto! Aliquid esse libero error modi aperiam ducimus repudiandae quis reiciendis unde consectetur! Neque, explicabo?</p>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="flex flex-col md:flex-row w-full md:w-11/12 mx-auto p-4 shadow-sm shadow-blue-700 my-8">
    <div class="w-full md:w-1/2 p-4 md:px-8 my-4 ">
        <div class="flex justify-between">
            <h3 class="text-xl lg:text-3xl text-default-head">Our Mission</h3>
            <i class="fa fa-bullseye text-xl lg:text-3xl text-default-head"></i>
        </div>
        <p class="text-default-text my-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsa aperiam laborum accusantium modi delectus pariatur. Doloremque qui sit voluptatem consequatur commodi adipisci? Aspernatur distinctio temporibus commodi, aliquid nulla accusamus!</p>
    </div>
    <div class="w-full md:w-1/2 p-4 md:px-8 my-4">
        <div class="flex justify-between">
            <h3 class="text-xl lg:text-3xl text-default-head">Our Vision</h3>
            <i class="fa fa-eye text-xl lg:text-3xl text-default-head"></i>
        </div>
        <p class="text-default-text my-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsa aperiam laborum accusantium modi delectus pariatur. Doloremque qui sit voluptatem consequatur commodi adipisci? Aspernatur distinctio temporibus commodi, aliquid nulla accusamus!</p>
    </div>
</section>

{{-- Core Value --}}

@endsection
