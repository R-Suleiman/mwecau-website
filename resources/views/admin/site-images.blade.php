@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h2 class="text-center fw-semibold favColor"> {{ 'Site Image Management' }} </h1>
                    <form action="{{ route('upload.page.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="row mt-4 ">
                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="header">{{ 'Header' }}</label>
                                <input type="text" class="form-control @error('header') is-invalid @enderror"
                                    value="{{ old('header') }}" name="header" id="header" placeholder="Enter header">

                                @error('header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="sub_header">{{ 'Sub header' }}</label>
                                <input type="text" class="form-control @error('sub_header') is-invalid @enderror"
                                    value="{{ old('sub_header') }}" name="sub_header" id="sub_header"
                                    placeholder="Enter sub_header">

                                @error('sub_header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3" for="page">
                                    {{ 'Page' }}</label>
                                <select class="form-select @error('page') is-invalid @enderror" name="page"
                                    id="page">
                                    <option value="home">Homepage</option>
                                    <option value="course">Course</option>
                                    <option value="courses">Courses</option>
                                    <option value="about">About Page</option>
                                    <option value="academics">Academics</option>
                                    <option value="undergraduate">undergraduate Banner Programmes</option>
                                    <option value="postgraduate">postgraduate Banner Programmes</option>
                                    <option value="non-degree">NonD-Degree Banner Programmes</option>
                                    <option value="ict">ICT</option>
                                    <option value="campus_life">Campus life</option>
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 mb-4">
                                <label class="mb-3 " for="Imagesection">{{ 'Image section' }}</label>
                                <select class="form-select @error('page') is-invalid @enderror" name="image_section"
                                    id="page">
                                    <option value="homeslider">Home slider</option>
                                    <option value="homeprograms">Home programs</option>
                                    <option value="homeVc">Home VC</option>
                                    <option value="aboutslider">About silder</option>
                                    <option value="homeprograms">Home programs</option>
                                    <option value="course-banner">Course banner</option>
                                    <option value="courses-banner">Courses banner</option>
                                    <option value="ict-banner">ICT Banner</option>
                                </select>

                                @error('image_section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <textarea name="description" id="description" cols="50" rows="5"
                                class="form-control darkMode @error('description') @enderror is-invalid" placeholder="Event Description"></textarea>

                            <div>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
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
                        </div>
                        <button type="submit" class="admissionBtn">{{ 'Post Image' }}</button>
                    </form>
            </div>

            <div class="text-center">
                <h3>AVAILABLE PAGE POSTED IMAGES</h3>

                {{-- <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        {{ $siteImages->content }}
                        <img src="{{ asset('images/pageImages/' . $siteImages->image) }}" alt="{{ $siteImages->image }}"
                            class="img-fluid w-25 w-md-75">
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
@endsection

{{-- MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=06526e0805ffa8
MAIL_PASSWORD=444b53b8a5ad66 --}}