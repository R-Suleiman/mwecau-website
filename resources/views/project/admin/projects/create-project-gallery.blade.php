@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div class="text-gray-900 uppercase text-center rounded-md py-4 px-7 mt-7 bg-gray-100">
        <h1
            class="headerFavFont text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            Creating gallery for {{ $project->name }}
        </h1>
    </div>
    <hr class="my-4 border-t border-purple-500">

    <div class="text-end mt-10  mb-9">
        <div class="">

        </div>
        <a href="{{ route('admin.project.projects') }}"
            class="favFont py-2 px-4 text-xs font-semibold uppercase border border-gray-600 rounded-md bg-purple-800 text-white">
            <i class="fa fa-arrow-left"></i></a>
    </div>

    <div class="flex items-center justify-center p-7">
        <div class="w-full p-8 bg-white rounded-2xl shadow-2xl shadow-purple-200">
            <x-project-admin-messages />
            <div class="w-full">
                <form action="{{ route('admin.project.store-project-gallery') }}" method="POST"
                    enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('POST')

                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-3">

                        <!-- Project id -->
                        <div class="mb-4">
                            <input type="hidden" id="project_id" name="project_id" value="{{ $project->id }}"
                                class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition project_id-150 ease-in-out" />
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div>

                    </div>
                    <!-- images file -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm mb-4 font-medium text-gray-700">Select Images
                            <strong class="text-red-600">(if you are using FireFox Browser you will only be able to select 2
                                images at once, kindly use Chrome to select more than one image)</strong></label>
                        <input type="file" id="image" name="image[]"
                            class="w-full p-3 border border-purple-300 rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-150 ease-in-out"
                            id="image" multiple accept="image/*" onchange="previewImages(event)" />

                        <div class="flex mt-2" id="imagePreviewContainer"></div>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6 max-w-[180px]">
                <button type="submit"
                    class="w-full px-4 py-3 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition duration-150 ease-in-out">
                    Post Gallery
                </button>
            </div>
            </form>
        </div>

    </div>
    </div>

    <script>
        function previewImages(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('imagePreviewContainer');

            // Clear the container for fresh preview
            previewContainer.innerHTML = '';

            // Check if files are selected
            if (files.length === 0) {
                previewContainer.innerHTML = '<p>No images selected.</p>';
                return;
            }

            // Loop through each file and create a thumbnail preview
            Array.from(files).forEach(file => {
                if (!file.type.startsWith('image/')) return; // Only process image files

                const reader = new FileReader();

                reader.onload = function(e) {
                    // Create image element and set its source
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = "img-thumbnail m-2";
                    img.style.width = "150px";
                    img.style.height = "150px";

                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file); // Read file as data URL
            });
        }
    </script>
@endsection
