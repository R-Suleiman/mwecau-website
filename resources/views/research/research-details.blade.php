@extends('layouts.web')
@section('content')
    <!-- main content -->
    <div class="container-fluid main-events mt-5">
        <div class="row justify-content-center align-items-center lh-base">
            @if (count($research) > 0)
                @foreach ($research as $research)
                    <div class="col-12 col-lg-10 col-md-9 event-content">
                        <h3>{{ $research->header }}</h3>
                        <p>
                            {!! $research->description !!}
                        </p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
