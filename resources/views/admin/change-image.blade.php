@extends('layouts.admin')

@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mt-5">
                <h2>Change Image</h2>
                <form action="{{ route('admin.change.image', $imageDetails->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mt-4 ">
                        @if ($imageDetails->image_section == 'homeprograms')
                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="header">{{ 'Header' }}</label>
                                <input type="text" class="form-control @error('header') is-invalid @enderror"
                                    value="{{ $imageDetails->header }}" name="header" id="header"
                                    placeholder="Enter header" readonly>

                                @error('header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="image">{{ 'Image' }}</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') }}" name="image" id="image"
                                    placeholder="Enter course duration">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        @else
                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="header">{{ 'Header' }}</label>
                                <input type="text" class="form-control @error('header') is-invalid @enderror"
                                    value="{{ $imageDetails->header }}" name="header" id="header"
                                    placeholder="Enter header">

                                @error('header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="image">{{ 'Image' }}</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') }}" name="image" id="image"
                                    placeholder="Enter course duration">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        @endif
                        <div class="col-md">
                            <button type="submit" class="btn btn-warning">Change</button>
                        </div>

                </form>
            </div>

        </div>
    </section>
@endsection
