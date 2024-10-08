@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
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
                        <a href="" class="link">
                            <h3>{{ $counter++ }} : {{ $announcementDetails->name }}</h3>
                        </a>
                        <p>
                            {!! $announcementDetails->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
