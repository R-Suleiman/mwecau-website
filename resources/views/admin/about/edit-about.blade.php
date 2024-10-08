<style>
    .main-container {
        width: 795px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h3 class="text-center text-uppercase">{{ 'Update the description on about page' }}</h3>
        <hr>

        <x-messages />

        {{-- <div class="text-end">
                    <a href="{{ route('admin.update.about', $about->id) }}">
                        <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                </div> --}}

        <form action="{{ route('admin.update.about', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mt-4 ">
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-3 " for="header">{{ 'Header' }}</label>
                    <input type="text" value="{{ $about->header }}"
                        class="form-control @error('header') is-invalid @enderror" value="" name="header"
                        id="header" placeholder="Enter Project Header">

                    @error('header')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 ">
                    <label class="fw-bold mb-3 " for="description">Description</label>
                    <textarea id="editor" class="form-control" id="description" name="description" cols="50" rows="5"
                        placeholder="Describe the project">{{ $about->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-success fw-bold ">{{ 'Save' }}</button>
        </form>
    </div>
@endsection
