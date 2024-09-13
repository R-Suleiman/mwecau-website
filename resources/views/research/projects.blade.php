@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events">
        <div class="row events-cont">
            @php
                $counter = 1;
            @endphp
            @if (count($research) > 0)
                @foreach ($research as $research)
                    <div class="col-12 col-lg-10 col-md-9 event-content">
                        <h4>{{ $counter++ }} : {{ $research->header }}</h4>
                        <p>
                            {!! Str::limit($research->description, 190) !!}
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3">
                        <a href="{{ route('research.project.details', $research->header) }}"><button
                                class="btn search-btn event-btn">view more</button></a>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>
@endsection
