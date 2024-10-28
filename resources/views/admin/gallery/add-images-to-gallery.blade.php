@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center">Add Stunning Images to <span class="favColor">{{ $gallery->name }}</span></h2>
        <form action="{{ route('admin.gallery.gallery-collection') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <x-messages />
            <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
            <div class="row mt-4">
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3" for="image">Gallery items</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image[]"
                        id="image" multiple accept="image/*" onchange="previewImages(event)">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mt-2" id="imagePreviewContainer"></div>

            <button type="submit" class="btn btn-success mt-3">{{ 'Add Images' }}</button>
        </form>
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
