@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center">{{ 'Post Announcement' }}</h1>
            <hr>

            <div class="text-start m-3">
                <a href="{{ route('admin.announcement.list') }}">
                    <button class="btn btn-primary fw-bold">Back</button>
                </a>
            </div>
            <x-messages />
            <form action="{{ route('post.announcement') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row mt-4 ">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="name">{{ 'Announcement title' }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value=""
                            name="name" id="name" placeholder="Enter announcement title">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3 " for="posting_date">Posting Date</label>
                        <input type="date" class="form-control @error('posting_date') is-invalid @enderror"
                            name="posting_date" value="" id="posting_date" placeholder="Enter Course code">

                        @error('posting_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-12 mb-4">
                        <label class="mb-3 " for="description">Announcement Description</label>
                        <textarea class="form-control" id="editor" name="description" cols="50" rows="5"
                            placeholder="A brief about announcement"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 mb-4">
                        <label class="mb-3 mt-3" for="thumbnail">Announcement Thumbnail <strong
                                class="text-primary fs fw-bold">(Optional)</strong></label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" value=""
                            name="thumbnail" id="thumbnail">

                        @error('thumbnail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 mb-4">
                        <label class="mb-3 mt-3" for="attachment">{{ 'Announcement Attachment' }} <strong
                                class="text-primary fs fw-bold">(Optional)</strong></label>
                        <input type="file" class="form-control @error('attachment') is-invalid @enderror" value=""
                            name="attachment" id="attachment">

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
@endsection
