@extends('layouts.admin')

@section('content')
<section class="main-section py-5">
    <div class="container">
        {{-- Back button --}}
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.announcement.list') }}" class="btn btn-primary shadow-sm">
                <i class="fa fa-arrow-left me-1"></i> Back
            </a>
        </div>

        {{-- Announcement Content --}}
        <div class="card shadow-sm">
            <div class="card-body">
                @php
                    $counter = 1;
                @endphp
                <div class="mb-3">
                    <h3 class="fw-bold text-primary">
                        {{ $counter++ }} : {{ $announcementDetails->name }}
                    </h3>
                </div>

                <div class="announcement-description">
                    <p class="fs-5">
                        {!! $announcementDetails->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
