@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="text-end">
            <a href="{{ route('site.images') }}">
                <button class="btn btn-primary"> Add New Image</button></a>
        </div>

        <x-messages />
        @foreach ($groupedImages as $page => $images)
            <h2>{{ ucfirst($page) }}</h2>
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-header">{{ $image->header }}</div>
                            <div class="card-body">
                                @if ($image->type == 'image')
                                    <img src="{{ asset('images/pageImages/' . $image->image) }}" class="d-block w-100"
                                        alt="{{ $image->header }}" />
                                @elseif ($image->type == 'video')
                                    <video width="100%" autoplay loop muted>
                                        <source src="{{ asset('images/pageImages/' . $image->image) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                                <div class="mt-3 d-flex mx-3">
                                    <a href="{{ route('admin.update.image', [$image->id]) }}">
                                        <button class="btn btn-warning mt-2 mx-2">Change</button>
                                    </a>

                                    <form action="{{ route('admin.delete.image', $image->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure want to delete this image?')"
                                            class="btn btn-danger mt-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
