@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">{{ $club_name }} Leaders</h2>
            <form action="{{ route('admin.leaders.update', ['club_name' => $club_name, 'leader' => $leader]) }}" method="POST" enctype="multipart/form-data"
                class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Leader</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="full_name" class="text-default-text text-lg my-2">Full Name: </label>
                    <input type="text" name="full_name" value="{{ $leader->full_name }}"
                    placeholder="eg. John Doe"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('full_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Title: </label>
                    <select name="title"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="Supervisor" {{ $leader->title == 'Supervisor' ? 'selected' : '' }} class="text-default-text">Supervisor</option>
                        <option value="Chairperson" {{ $leader->title == 'Chairperson' ? 'selected' : '' }} class="text-default-text">Chairperson</option>
                        <option value="Vice Chairperson" {{ $leader->title == 'Vice Chairperson' ? 'selected' : '' }} class="text-default-text">Vice Chairperson</option>
                        <option value="Secretary" {{ $leader->title == 'Secretary' ? 'selected' : '' }} class="text-default-text">Secretary</option>
                    </select>
                    @error('title')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="email" class="text-default-text text-lg my-2">Email: </label>
                    <input type="email" name="email" value="{{ $leader->email }}"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('email')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="phone_number" class="text-default-text text-lg my-2">Phone Number: </label>
                    <input type="text" name="phone_number" value="{{ $leader->phone_number }}"
                        placeholder="eg. 071#######"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('phone_number')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="image" class="text-default-text text-lg my-2">Photo: </label>
                    <input type="file" name="image"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('image')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror

                    <div class="w-full md:w-2/4 mx-auto h-64">
                        <img src="{{ asset('/storage/images/dpric/clubs/leaders/' . $leader->image) }}" alt="" class="w-full rounded-md object-cover h-full">
                    </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Edit
                        Leader</button>
                </div>
            </form>
        </div>
    </section>
@endsection
