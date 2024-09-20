@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events mt-5">
        <div class="row justify-content-center align-items-center lh-base">
            @if (count($outreach) > 0)
                @foreach ($outreach as $outreach)
                    <div class="col-12 col-lg-10 col-md-9 event-content">
                        <h3>{{ $outreach->header }}</h3>
                        <p>
                            {!! $outreach->description !!}
                        </p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
