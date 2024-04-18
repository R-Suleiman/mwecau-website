@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <div class="text-end">
                    <a href="{{ route('admin.dashboard') }}"> <button class="btn btn-primary btn-sm">back</button></a>
                </div>
                <h1 class="text-center">{{ 'Update course informations' }}</h1>

                <form action="{{ route('admin.update.course', $courseData->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_title">{{ 'Course title' }}</label>
                            <input type="text" class="form-control @error('course_title') is-invalid @enderror"
                                value="{{ $courseData->course_title }}" name="course_title" id="course_title"
                                placeholder="Enter course title">

                            @error('course_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_code">Course Code</label>
                            <input type="text" class="form-control @error('course_code') is-invalid @enderror"
                                name="course_code" value="{{ $courseData->course_code }}" id="course_code"
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
                                value="{{ $courseData->course_duration }}" name="course_duration" id="course_duration"
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
                                value="{{ $courseData->course_category }}" name="course_category" id="course_category"
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
                            <textarea name="course_entry_qualification"
                                class="form-control @error('course_entry_qualification') is-invalid @enderror" id="course_entry_qualification"
                                cols="30" rows="10" placeholder="What's entry qualification for the course">{{ $courseData->course_entry_qualification }}</textarea>

                            @error('course_entry_qualification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_description">{{ 'Course description' }}</label>
                            <textarea name="course_description" class="form-control @error('course_description') is-invalid @enderror"
                                id="course_description" cols="30" rows="10" placeholder="Detailed description for the course">{{ $courseData->course_description }}</textarea>

                            @error('course_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-4">
                            <div class="">
                                <img src="{{ asset('images/coursePhotos/' . $courseData->course_thumbnail) }}"
                                    alt="{{ $courseData->course_thumbnail }}" class="w-100">
                            </div>
                            <label class="fw-bolder mb-3 mt-3 favColor" for="course_thumbnail">{{ 'Change course thumbnail' }}</label>
                            <input type="file" class="form-control @error('course_thumbnail') is-invalid @enderror"
                                value="{{ $courseData->course_thumbnail }}" name="course_thumbnail" id="course_thumbnail"
                                placeholder="Enter course duration">

                            @error('course_thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning fw-bold ">{{ 'update' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
