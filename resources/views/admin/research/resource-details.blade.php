@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mt-5">
                <div class="text-end">
                    <a href="{{ route('admin.research.list') }}">
                        <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                </div>
                <div class="row events-cont">
                    @php
                        $counter = 1;
                    @endphp
                    <div class="col-12 col-lg-9 col-md-8 event-content">
                        <a href="" class="link">
                            <h3>{{ $counter++ }} : {{ $details->header }}</h3>
                        </a>
                        <p>
                            {{ $details->description }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 d-flex" style="justify-content: space-between">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
