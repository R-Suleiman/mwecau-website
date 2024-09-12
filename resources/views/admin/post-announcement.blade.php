@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h1 class="text-center">{{ 'Post Announcement' }}</h1>

                <x-messages />

                <form action="{{ route('post.announcement') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="name">{{ 'Announcement title' }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value=""
                                name="name" id="name" placeholder="Enter course title">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="posting_date">Posting Date</label>
                            <input type="date" class="form-control @error('posting_date') is-invalid @enderror"
                                name="posting_date" value="" id="posting_date" placeholder="Enter Course code">

                            @error('posting_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="description">Announcement Description</label>
                            <textarea class="form-control" id="description" name="description" cols="50" rows="5"
                                placeholder="A brief about announcement"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-12 mb-4">
                            <label class="fw-bolder mb-3 mt-3 favColor"
                                for="attachment">{{ 'Announcement Attachment' }}</label>
                            <input type="file" class="form-control @error('attachment') is-invalid @enderror"
                                value="" name="attachment" id="attachment">

                            @error('attachment')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success fw-bold ">{{ 'Post' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
