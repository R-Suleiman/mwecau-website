@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <h1 class="text-center">{{ 'Edit Announcement' }}</h1>
                <hr>
                <div class="text-end m-3">
                    <a href="{{ route('admin.announcement.list') }}">
                        <button class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    </a>
                </div>
                <x-messages />

                <form action="{{ route('admin.update.announcement', $announcementDetails->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="name">{{ 'Announcement title' }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ $announcementDetails->name }}" name="name" id="name"
                                placeholder="Enter course title">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="posting_date">Posting Date</label>
                            <input type="date" class="form-control @error('posting_date') is-invalid @enderror"
                                name="posting_date" value="{{ $announcementDetails->posting_date }}" id="posting_date"
                                placeholder="Enter Course code">

                            @error('posting_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="fw-bold mb-3 " for="description">Announcement Description</label>
                            <textarea class="form-control" id="editor" name="description" cols="50" rows="5"
                                placeholder="A brief about announcement">{{ $announcementDetails->description }}</textarea>
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
                    <button type="submit" class="btn btn-success fw-bold ">{{ 'Save' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
