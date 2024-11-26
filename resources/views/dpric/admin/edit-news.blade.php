@extends('layouts.dpric.dpric-admin-layout')

@section('content')

    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">News Management</h2>
            <form action="" class="w-full">
            <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit News</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">News Title: </label>
                    <input type="text" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">News Category: </label>
                    <select name="" id="" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">Technology</option>
                        <option value="" class="text-default-text">Sports</option>
                    </select>
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Description: </label>
                    <textarea name="" id="" cols="30" rows="10" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700"></textarea>
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Image: </label>
                    <input type="file" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file" class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Post News</button>
                </div>
            </form>
        </div>
    </section>
@endsection
