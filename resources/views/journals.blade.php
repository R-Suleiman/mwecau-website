@extends('layouts.web')
@section('content')
    <div class="container mt-5 shadow-lg">
        <div class="col-12 col-md mb-3 py-5">
            @if ($pdf->isNotEmpty())
                @foreach ($pdf as $document)
                    <h4>{{ $document->header }}</h4>
                    <p>{{ $document->description }}</p>
                    <div class="mb-5 mt-3">
                        <a target="_blank" href="{{ route('uni-pdf-preview', $document->file) }}">
                            <button class="btn favbg text-white">
                                Preview attachment <i class="fa fa-download" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div> 
                    <hr>
                @endforeach
            @else
                <span class="alert alert-warning">Currently, No Journal attachment is available</span>
            @endif
        </div>
    </div>

@endsection
