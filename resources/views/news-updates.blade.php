@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events">
        <div class="row events-cont">
            @if (count($newsUpdates) > 0)
                @foreach ($newsUpdates as $newsUpdate)
                    <div class="col-12 col-lg-10 col-md-9 event-content">
                        <h3>{{ $newsUpdate->name }}</h3>
                        <p>
                            {!! Str::limit($newsUpdate->description, '190') !!}
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3">
                        <a href="{{ route('announcement-details', $newsUpdate->name) }}"><button
                                class="btn search-btn event-btn">view more</button></a>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>
@endsection
