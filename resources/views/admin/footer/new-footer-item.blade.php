@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mt-5">
                <h2>Add New Footer Item</h2>
                <form action="{{ route('admin.post.statistic') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="name">{{ 'Item Name' }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" id="name"
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
                            <select name="category" id="category" class="form-control form-select">
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
                            <textarea id="editor" class="form-control" id="description" name="description" cols="50" rows="5"
                                placeholder="Describe the project"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="link">{{ 'Item Name' }}</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                value="{{ old('link') }}" name="link" id="link"
                                placeholder="Enter link of the item">

                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md">
                            <button type="submit" class="btn btn-success">Post Statistic</button>
                        </div>

                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
