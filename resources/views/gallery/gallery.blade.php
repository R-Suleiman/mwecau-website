@extends('layouts.web')

@section('content')
    <div class="container-fluid my-5">
        <div class="mt-5 mb-5">
            <h2 class="favColor text-center text-uppercase">Mwecau Gallery</h2>
            <p class="fs-5 text-center gallery-subh">Welcome to Mwenge Catholic University Gallery</p>
        </div>

        <div class="row mt-4 mb-4">
            @if ($gallery->isNotEmpty())
                @foreach ($gallery as $gallery)
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <a href="{{ route('university.single-gallery', $gallery->id) }}">
                            <div class="collection">
                                <div class="gall-cat-img">
                                    <img src="{{ asset('images/Gallery/thumbnail/' . $gallery->thumbnail) }}" alt="">
                                </div>
                                <h5>{{ $gallery->name }}</h5>
                                <p>{{ $gallery->date }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="fw-bold d-flex align-items-center justify-content-center min-h-100">
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="alert alert-primary text-center" role="alert">
                            <p>
                                Gallery Coming Soon. Please check back later!
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
