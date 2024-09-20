@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events">
        <div class="row events-cont">
            <h1 class="fs-2 text-center favColor my-3">MWECAU Projects
            </h1>
            @php
                $counter = 1;
            @endphp
            @if ($projects->isEmpty())
            <span class="alert alert-warning">No outreach Programs Available</span>
            @else
            @if (count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="col-12 col-lg-10 col-md-9 event-content">
                        <h4>{{ $counter++ }}. {{ $project->header }}</h4>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3">
                        <a href="{{ route('research.project.details', $project->header) }}"><button
                                class="btn search-btn event-btn my-2">view more</button></a>
                    </div>
                    <hr>
                @endforeach
            @endif
            @endif

        </div>
    </div>
@endsection
