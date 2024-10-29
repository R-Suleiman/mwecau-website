<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@extends('layouts.admin')
@section('content')
    <div class="mt-5 py-5 text-center">
        <h1 class="favColor">Active University Galleries</h1>
        <div class="text-end m-3">
            <a href="{{ route('admin.gallery.create') }}">
                <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New Gallery</button>
            </a>
        </div>

        <x-messages />

        <div class="category d-inline-block mb-2">
            @if ($galleries->isNotEmpty())
                @foreach ($galleries as $gallery)
                    <button class="btn favbg gallery-button" data-gallery-id="{{ $gallery->id }}">
                        <i class="fa fa-calendar favColor"></i> {{ $gallery->name }}
                    </button>
                @endforeach
            @else
                <div class="alert alert-primary" role="alert">
                    <p>
                        Create New Gallery
                    </p>
                </div>
            @endif

        </div>
    </div>

    <!-- Modal Structure -->
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gallery Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="galleryImagesContainer">
                    <!-- Images will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.gallery-button').on('click', function() {
                var galleryId = $(this).data('gallery-id');

                // Fetch images via AJAX
                $.ajax({
                    url: '/admin/gallery/' + galleryId + '/images', // Adjust the URL as necessary
                    method: 'GET',
                    success: function(data) {
                        var imagesHtml = '';
                        data.images.forEach(function(image) {
                            imagesHtml += '<img src="../images/Gallery/Collections/' +
                                image
                                .thumbnail + '" class="img-fluid" alt="Gallery Image">';
                        });
                        $('#galleryImagesContainer').html(imagesHtml);
                        $('#galleryModal').modal('show'); // Show the modal
                    },
                    error: function() {
                        alert('Failed to load images.');
                    }
                });
            });
        });
    </script>
@endsection
