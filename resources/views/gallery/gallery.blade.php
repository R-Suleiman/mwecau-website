@extends('layouts.web')

@section('content')
<div class="container-fluid my-5">
    <div class="mt-5 mb-5">
        <h2 class="favColor text-center text-uppercase">Mwecau Gallery</h2>
        <p class="fs-5 text-center gallery-subh">Welcome to Mwenge Catholic University Gallery</p>
    </div>

        <div class="row mt-4 mb-4">
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <a href="{{ route('university.single-gallery') }}">
                    <div class="collection">
                    <div class="gall-cat-img">
                        <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="">
                    </div>
                    <h5>Graduation Ceremony</h5>
                    <p>November, 2024</p>
                </div>
            </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <a href="{{ route('university.single-gallery') }}">
                    <div class="collection">
                        <div class="gall-cat-img">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="">
                        </div>
                        <h5>5th Internation Conference</h5>
                        <p>07-08.11.2024</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mb-4">
                <a href="{{ route('university.single-gallery') }}">
                    <div class="collection">
                        <div class="gall-cat-img">
                            <img src="{{ asset('img/campus-life/spirtual2.jpg') }}" alt="">
                        </div>
                        <h5>MWECAU Cafeteria</h5>
                        <p>-</p>
                    </div>
                </a>
            </div>
        </div>
</div>
@endsection
