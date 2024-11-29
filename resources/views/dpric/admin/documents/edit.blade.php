@extends('layouts.dpric.dpric-admin-layout')

@section('content')

    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <form action="{{ route('admin.dpric-documents.update', $document) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
            <h3 class="oswald text-center my-4 text-2xl text-blue-800">Edit Document</h3>
                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Document Name: </label>
                    <input type="text" name="name" value="{{ $document->name }}" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('name')
                        <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Document Type: </label>
                    <select name="type" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                        <option value="" class="text-default-text">-- select --</option>
                        <option value="Policy" {{ $document->type == 'Policy' ? 'selected' : '' }} class="text-default-text">Policy</option>
                        <option value="Joining Instruction" {{ $document->type == 'Joining Instruction' ? 'selected' : '' }} class="text-default-text">Joining Instruction</option>
                        <option value="Fee Structure" {{ $document->type == 'Fee Structure' ? 'selected' : '' }} class="text-default-text">Fee Structure</option>
                        <option value="Student Form" {{ $document->type == 'Student Form' ? 'selected' : '' }} class="text-default-text">Student Form</option>
                        <option value="Regulations and Guidelines" {{ $document->type == 'Regulations and Guidelines' ? 'selected' : '' }} class="text-default-text">Regulations and Guidelines</option>
                    </select>
                    @error('type')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror
                </div>

                <div class="flex flex-col w-full md:w-10/12 my-4">
                    <label for="title" class="text-default-text text-lg my-2">Attach Document: </label>
                    <input type="file" name="path" class="border border-blue-500 p-2 rounded-sm bg-blue-100 focus:outline-none focus:border-2 text-gray-700">
                    @error('path')
                    <p class="text-lg text-red-600 my-2">{{ $message }}</p>
                @enderror

                <div class="text-md my-4 text-orange-600">{{ $document->path }}</div>
                </div>

                <div class="w-full md:w-10/12 my-8">
                    <button type="file" class="border border-blue-500 p-2 rounded-sm bg-purple-800 text-white hover:bg-purple-950">Update Document</button>
                </div>
            </form>
        </div>
    </section>
@endsection
