@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center fw-semibold favColor"> {{ 'Create Univeristy Gallery' }} </h1>

            <div class="text-start">
                <a href="{{ route('admin.gallery.show-gallery') }}">
                    <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </button></a>
            </div>
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row mt-4 ">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="name">{{ 'Gallery items' }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" name="name" id="name" placeholder="What is a gallery name"
                            multiple>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="date">{{ 'Date' }}</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror"
                            value="{{ old('date') }}" name="date" id="date" placeholder="Enter Date">

                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="thumbnail">{{ 'Gallery Cover Image' }}</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                            value="{{ old('thumbnail') }}" name="thumbnail" id="thumbnail" placeholder="Pick a Cover Image"
                            multiple>

                        @error('thumbnail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-3">{{ 'Create Gallery' }}</button>
            </form>
    </div>
@endsection
