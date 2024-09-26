@extends('layouts.web')
@section('content')
    <div class="container-fluid main-events">
        @if (count($event) > 0)
            @foreach ($event as $events)
                <div class="row events-cont">
                    <div class="col-12 col-lg-3 col-md-3 event-img">
                        @if ($events->event_image != null)
                            <img src="{{ asset('images/eventImages/' . $events->event_image) }}"
                                alt="{{ $events->event_image }}" class=" img-fluid ">
                        @else
                            <img src="{{ asset('img/mwecau.png') }}" alt="{{ $events->event_image }}" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-12 col-lg-7 col-md-6 event-content">
                        <label>{{ $events->event_category }}</label>
                        <a href="" class="link">
                            <h3>{{ $events->event_title }}</h3>
                        </a>
                        <p>
                            {{ $events->event_decription }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3">
                        <div class="stamps">
                            <i class="fa fa-clock"></i> <span>{{ $events->created_at }}</span>
                        </div>
                        <div class="stamps">
                            <i class="fa fa-calendar"></i> <span> April 19, 2024</span>
                        </div>
                        <div class="stamps">
                            <i class="fa fa-map-marker"></i> <span>{{ $events->event_location }}</span>
                        </div>
                        <a href="{{ route('event-details', $events->id) }}"><button class="btn search-btn event-btn">view
                                more</button></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
