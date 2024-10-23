@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="text-start mb-5">
            <a href="{{ route('admin.all.site.images') }}">
                <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button></a>
        </div>
        <h2>Update Image Details</h2>
        <form action="{{ route('admin.change.image', $imageDetails->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row mt-4 ">
                @if ($imageDetails->image_section == 'homeprograms')
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="header">{{ 'Header' }}</label>
                        <input type="text" class="form-control @error('header') is-invalid @enderror"
                            value="{{ $imageDetails->header }}" name="header" id="header" placeholder="Enter header"
                            readonly>

                        @error('header')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="image">{{ 'Image' }}</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            value="{{ old('image') }}" name="image" id="image" placeholder="Enter course duration">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @else
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        {{-- media header --}}
                        <label class="mb-3" for="header">{{ 'Header' }}</label>
                        <input type="text" class="form-control mb-3 @error('header') is-invalid @enderror"
                            value="{{ $imageDetails->header }}" name="header" id="header" placeholder="Enter header">

                        @error('header')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- //media sub header --}}
                        <label class="mb-3 " for="sub_header">{{ 'Sub header' }}</label>
                        <input type="text" class="form-control @error('sub_header') is-invalid @enderror"
                            value="{{ $imageDetails->sub_header }}" name="sub_header" id="sub_header"
                            placeholder="Enter sub_header">

                        @error('sub_header')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- select media type --}}
                        <label class="mb-3 mt-3" for="type">{{ 'Media Type' }}</label>
                        <select class="form-select mb-5 @error('type') is-invalid @enderror" name="type" id="type">
                            <option value="{{ $imageDetails->type }}">{{ $imageDetails->type }}</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>

                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            {{-- actual file --}}
                            <label class="mb-3 " for="image">{{ 'Image' }}</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                value="{{ old('image') }}" name="image" id="image"
                                placeholder="Enter course duration">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md">
                                <button type="submit" class="btn btn-warning">Change</button>
                            </div>
                    </div>
                @endif

        </form>
    </div>
@endsection
