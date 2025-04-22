@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-dark text-center py-4 rounded-top">
                        <h2 class="mb-0">{{ $announcementDetails->name }}</h2>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3 text-start">
                            <a href="{{ route('admin.announcement.list') }}" class="btn btn-outline-primary fw-bold">
                                <i class="bi bi-arrow-left me-1"></i> Back
                            </a>
                        </div>

                        <x-messages />

                        <form action="{{ route('admin.update.announcement', $announcementDetails->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label fw-semibold">Announcement Title</label>
                                    <input type="text" name="name" id="name"
                                        value="{{ $announcementDetails->name }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Enter title">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="posting_date" class="form-label fw-semibold">Posting Date</label>
                                    <input type="date" name="posting_date" id="posting_date"
                                        value="{{ $announcementDetails->posting_date }}"
                                        class="form-control @error('posting_date') is-invalid @enderror">
                                    @error('posting_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-4">
                                    <label for="description" class="form-label fw-semibold">Announcement Description</label>
                                    <textarea name="description" id="editor" rows="5"
                                        class="form-control @error('description') is-invalid @enderror" placeholder="A brief about announcement">{{ $announcementDetails->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-4">
                                    <label for="thumbnail" class="form-label fw-semibold">Announcement Thumbnail <small
                                            class="text-muted">(Optional)</small></label>
                                    <input type="file" name="thumbnail" id="thumbnail"
                                        class="form-control @error('thumbnail') is-invalid @enderror">
                                    @error('thumbnail')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-4">
                                    <label for="attachment" class="form-label fw-semibold">Announcement Attachment <small
                                            class="text-muted">(Optional)</small></label>
                                    <input type="file" name="attachment" id="attachment"
                                        class="form-control @error('attachment') is-invalid @enderror">
                                    @error('attachment')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success fw-bold px-4">
                                    <i class="bi bi-save me-1"></i> Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
