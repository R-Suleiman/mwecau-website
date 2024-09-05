@extends('layouts.admin')

@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mt-5">
                @foreach ($groupedImages as $page => $images)
                    <h2>{{ ucfirst($page) }}</h2>
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">{{ $image->header }}</div>
                                    <div class="card-body">
                                        <img src="{{ asset('/images/pageImages/' . $image->image) }}" class="img-fluid" alt="{{ $image->header }}">
                                        <div class="mt-3">
                                            <a href="{{ route('admin.update.image', [$image->id]) }}">
                                                <button class="btn btn-warning mt-2">Change</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
