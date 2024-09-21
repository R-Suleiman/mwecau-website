@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events">
        <div class="row events-cont">
            <h1 class="fs-2 text-center favColor my-3">MWECAU Outreach Programs</h1>
            @php
                $counter = 1;
            @endphp
            @if ($outreach->isEmpty())
                <span class="alert alert-warning">No outreach Programs Available</span>
            @else
                @if (count($outreach) > 0)
                    @foreach ($outreach as $outreach)
                        <div class="col-12 col-lg-10 col-md-9 event-content">
                            <h4>{{ $counter++ }}. {{ $outreach->header }}</h4>
                        </div>
                        <div class="col-12 col-lg-2 col-md-3">
                            <a href="{{ route('research.project.details', rawurlencode($outreach->header)) }}"><button
                                    class="btn search-btn event-btn my-2">view more</button></a>
                        </div>
                        <hr>
                    @endforeach
                @endif
            @endif

        </div>
    </div>
@endsection
