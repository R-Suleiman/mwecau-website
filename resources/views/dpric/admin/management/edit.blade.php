@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <form action="{{ route('admin.dpric-management.update', $staff) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
                <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Staff</h3>

                <input type="text" name="rank" hidden value="{{ $staff->rank }}">

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="initial" class="text-default-text text-lg my-2">Initial: </label>
                    <input type="text" name="initial" value="{{ $staff->initial }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                    @error('initial')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="first_name" class="text-default-text text-lg my-2">First Name: </label>
                    <input type="text" name="first_name" value="{{ $staff->first_name }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                    @error('first_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="other_name" class="text-default-text text-lg my-2">Other Name: </label>
                    <input type="text" name="other_name" value="{{ $staff->other_name }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                    @error('other_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="last_name" class="text-default-text text-lg my-2">Last Name: </label>
                    <input type="text" name="last_name" value="{{ $staff->last_name }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                    @error('last_name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="position" class="text-default-text text-lg my-2">Position: </label>
                    <input type="text" name="position" value="{{ $staff->position }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">

                    @error('position')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="photo" class="text-default-text text-lg my-2">Photo: </label>
                    <input type="file" name="photo"
                        class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('photo')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror

                    <div class="w-full md:w-2/4 mx-auto h-64">
                        <img src="{{ asset('/storage/images/dpric/staff/' . $staff->photo) }}" alt="" class="w-full rounded-md object-cover h-full">
                    </div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file"
                        class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">save</button>
                </div>
            </form>
        </div>
    </section>
@endsection
