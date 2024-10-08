@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="text-end">
            <a href="{{ route('admin.announcement.list') }}">
                <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        </div>
        <div class="mt-5">
            @php
                $counter = 1;
            @endphp
            <div class="col-12">
                <h3>{{ $counter++ }} : {{ $announcementDetails->name }}</h3>
                <p>
                    {!! $announcementDetails->description !!}
                </p>
            </div>

            <div class="row">
                @if ($announcementDetails)
                    @if ($announcementDetails->attachment == null)
                        <span class="alert alert-warning fst-italic fw-bold shadow-lg mb-5 mt-3">This Announcement has no
                            attachment Associated to
                            it.</span>
                    @else
                        <div class="mb-5 mt-3">
                            <a target="_blank"
                                href="{{ route('announcement.attachment.preview', $announcementDetails->attachment) }}">
                                <button class="btn favbg">
                                    Preview attachment <i class="fa fa-download" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
