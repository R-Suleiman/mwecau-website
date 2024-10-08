@extends('layouts.web')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="col-12">
                <h3 class="text-center favColor mb-3 fw-bold fs-1 lh-base">{{ $announcementDetails->name }}</h3>
                <div class="text-start">
                    <p style="line-height: 32px">{!! $announcementDetails->description !!}</p>
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
                                    <button class="btn favbg text-white">
                                        Preview attachment <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
