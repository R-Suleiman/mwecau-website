<style>
    .main-container {
        width: 795px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h3 class="text-center text-uppercase">{{ 'Manage the description on about page' }}</h3>
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
                            <label class="fw-bold mb-3 " for="header">{{ 'Header' }}</label>
                            <input type="text" class="form-control @error('header') is-invalid @enderror" value=""
                                name="header" id="header" placeholder="Enter Project Header">

                            @error('header')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 ">
                            <label class="fw-bold mb-3 " for="description">Description</label>
                            <textarea id="editor" class="form-control" id="description" name="description" cols="50" rows="5"
                                placeholder="Describe the project"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success fw-bold ">{{ 'Post' }}</button>
                </form>


                <div class="col-12 col-10 mt-5">
                    <h3 class="text-center text-uppercase"> Current about content </h3>
                    <hr>
                    <p>
                    <h2 class="text-uppercase">{{ $about->header }}</h2>
                    </p>
                    <div class="d-flex">
                        <p>{!! Str::limit($about->description, 400) !!}
                            <a href="{{ route('admin.edit.about', $about->id) }}">
                                <button class="btn btn-warning"> <i class="fa fa-pencil" aria-hidden="true"></i></button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
