@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center fw-semibold favColor"> {{ 'Library Edit Panel' }} </h1>

            <div class="text-start">
                <a href="{{ route('admin.library.index') }}">
                    <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </button></a>
            </div>
            <form action="{{ route('admin.library.update', $library->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mt-4 ">
                    @if ($library->category_name == 'objective' || $library->category_name == 'welcome')
                        <div class="col-12 col-md-6 col-lg-6 mb-4 d-none">
                            <label class="mb-3 " for="header">{{ 'Category Name' }}</label>
                            <select name="category_name" class="form-select @error('category_name') is-invalid @enderror"
                                id="category_name">
                                <option value="{{ $library->category_name }}">{{ $library->category_name }}</option>
                                <option value="e-resources">E-Resource</option>
                                <option value="open-access-resource">Open Access resource</option>
                            </select>

                            @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @else
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="header">{{ 'Category Name' }}</label>
                            <select name="category_name" class="form-select @error('category_name') is-invalid @enderror"
                                id="category_name">
                                <option value="{{ $library->category_name }}">{{ $library->category_name }}</option>
                                <option value="e-resources">E-Resource</option>
                                <option value="services">Services</option>
                                <option value="open-access-resource">Open Access resource</option>
                            </select>

                            @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif


                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="name">{{ 'Item Name' }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ $library->name }}" name="name" id="name" placeholder="Enter name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @if ($library->category_name == 'objective' || $library->category_name == 'welcome')
                        <div class="col-12 col-md-6 col-lg-6 mb-4 mt-3 d-none">
                            <label class="mb-3 " for="link">{{ 'Item link' }}</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                value="{{ $library->link }}" name="link" id="link"
                                placeholder="Enter partnets logo link (Optional)">

                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @else
                        <div class="col-12 col-md-6 col-lg-6 mb-4 mt-3">
                            <label class="mb-3 " for="link">{{ 'Item link' }}</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                value="{{ $library->link }}" name="link" id="link"
                                placeholder="Enter partnets logo link (Optional)">

                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif

                    <div>
                        <textarea name="description" id="editor" cols="50" rows="5"
                            class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ $library->description }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>
                <button type="submit" class="btn btn-success mt-3">{{ 'Save' }}</button>
            </form>
    </div>
@endsection
