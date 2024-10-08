@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="text-end">
            <a href="{{ route('admin.research.list') }}">
                <button class="btn btn-primary"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        </div>
        <div class="mt-5">
            @php
                $counter = 1;
            @endphp
            <div class="col-12">
                <a href="" class="link">
                    <h3>{{ $counter++ }} : {{ $details->header }}</h3>
                </a>
                <p>
                    {!! $details->description !!}
                </p>
            </div>
        </div>
    </div>
@endsection
