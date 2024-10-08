@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h1 class="text-center">{{ 'New Project' }}</h1>
        <hr>
        <div class="text-end">
            <a href="{{ route('admin.research.list') }}">
                <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        </div>

        <x-messages />
        <form action="{{ route('admin.post.new.research') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="row mt-4 ">
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3 " for="header">{{ 'Header' }}</label>
                    <input type="text" class="form-control @error('header') is-invalid @enderror"
                        value="{{ old('header') }}" name="header" id="header" placeholder="Enter Project Header">

                    @error('header')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3 " for="category">{{ 'Select Category' }}</label>
                    <select class="form-select @error('category') is-invalid @enderror" name="category" id="category">
                        <option value="">Select Category</option>
                        <option value="project">Projects</option>
                        <option value="outreach">Outreach</option>
                    </select>

                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md mb-4">
                    <label class="mb-3 " for="description">Description</label>
                    <textarea id="editor" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" cols="50" rows="5" placeholder="Describe the project"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <textarea id="ckeditor"></textarea>

            </div>
            <button type="submit" class="btn btn-success fw-bold ">{{ 'Post' }}</button>
        </form>
    </div>
@endsection
