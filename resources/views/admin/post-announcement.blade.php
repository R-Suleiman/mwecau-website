@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h1 class="text-center">{{ 'Post Announcement' }}</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_title">{{ 'Announcement title' }}</label>
                            <input type="text" class="form-control @error('course_title') is-invalid @enderror"
                                value="" name="course_title" id="course_title" placeholder="Enter course title">

                            @error('course_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="course_code">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                value="" id="course_code" placeholder="Enter Course code">

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-12 mb-4">
                            <label class="fw-bolder mb-3 mt-3 favColor"
                                for="attachment">{{ 'Change course thumbnail' }}</label>
                            <input type="file" class="form-control @error('attachment') is-invalid @enderror"
                                value="" name="attachment" id="attachment" placeholder="Enter course duration">

                            @error('attachment')
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
