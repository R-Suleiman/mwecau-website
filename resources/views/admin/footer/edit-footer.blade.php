@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h3 class="text-uppercase"><strong class="favColor">{{ $footerItem->name }}</strong></h2>
            <hr>
            <div class="text-end">
                <a href="{{ route('admin.footer.item.list.view') }}">
                    <button class="btn btn-primary"> <i class="fa fa-arrow-left"></i></button>
                </a>
            </div>
            <x-messages />
            <form action="{{ route('admin.update.footer.item', $footerItem->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mt-4 ">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="name">{{ 'Item Name' }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ $footerItem->name }}" name="name" id="name"
                            placeholder="Enter name of the item">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="category">{{ 'Select category of the Items' }} <small
                                class="text-danger"></small></label>
                        <select name="category" id="category"
                            class="form-control form-select @error('category') is-invalid @enderror">
                            <option value="{{ $footerItem->category }}">{{ $footerItem->category }}</option>
                            <option value="about-mwecau">Mwenge Catholic Univeristy</option>
                            <option value="popular-links">Popular Links</option>
                            <option value="contact">Contact</option>
                        </select>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="fw-bold mb-3 " for="description">Description</label>
                        <textarea id="editor" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description" cols="50" rows="5" placeholder="Describe the project">{!! $footerItem->description !!}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="link">{{ 'Item Link' }}</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror"
                            value="{{ $footerItem->link }}" name="link" id="link"
                            placeholder="Enter link of the item">

                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>

            </form>
    </div>
    </div>
@endsection