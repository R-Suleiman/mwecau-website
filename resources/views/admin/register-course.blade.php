@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h2 class="text-center fw-bold favColor">  {{ 'Register new Course' }} </h1>
                <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    {{-- <a href="#"><button class="admissionBtn">{{ 'Add New Course' }}</button></a> --}}

                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_title">{{ 'Course title' }}</label>
                            <input type="text" class="form-control @error('course_title') is-invalid @enderror"
                                value="{{ old('course_title') }}" name="course_title" id="course_title"
                                placeholder="Enter course title">

                            @error('course_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        {{-- <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-3" for="course_entry_qualification">{{ 'Entry Qualification' }}</label>
                    <input type="text" class="form-control @error('course_entry_qualification') is-invalid @enderror"
                        value="{{ old('course_entry_qualification') }}" name="course_entry_qualification" id="course_entry_qualification"
                        placeholder="What's entry qualification for the course">

                    @error('course_entry_qualification')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div> --}}

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_code">Course Code</label>
                            <input type="text" class="form-control @error('course_code') is-invalid @enderror"
                                name="course_code" value="{{ old('course_code') }}" id="course_code"
                                placeholder="Enter Course code">

                            @error('course_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_duration">{{ 'Course Duration' }}</label>
                            <input type="text" class="form-control @error('course_duration') is-invalid @enderror"
                                value="{{ old('course_duration') }}" name="course_duration" id="course_duration"
                                placeholder="Enter course duration">

                            @error('course_duration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_category">{{ 'Course category' }}</label>
                            <input type="text" class="form-control @error('course_category') is-invalid @enderror"
                                value="{{ old('course_category') }}" name="course_category" id="course_category"
                                placeholder="Eg: undergraduate or postgraduate or non-degree">

                            @error('course_category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3"
                                for="course_entry_qualification">{{ 'Entry Qualification' }}</label>
                            <textarea name="course_entry_qualification" value="{{ old('course_entry_qualification') }}"
                                class="form-control @error('course_entry_qualification') is-invalid @enderror" id="course_entry_qualification"
                                cols="30" rows="10" placeholder="What's entry qualification for the course"></textarea>

                            @error('course_entry_qualification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_description">{{ 'Course description' }}</label>
                            <textarea name="course_description" class="form-control @error('course_description') is-invalid @enderror"
                                id="course_description" value="{{ old('course_description') }}" cols="30" rows="10"
                                placeholder="Detailed description for the course"></textarea>

                            @error('course_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_thumbnail">{{ 'Course Image' }}</label>
                            <input type="file" class="form-control @error('course_thumbnail') is-invalid @enderror"
                                value="{{ old('course_thumbnail') }}" name="course_thumbnail" id="course_thumbnail"
                                placeholder="Enter course duration">

                            @error('course_thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="admissionBtn">{{ 'Add New Course' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
