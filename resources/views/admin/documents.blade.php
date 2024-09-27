@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <div class="text-end">
                    <a href="{{ route('admin.post.pdf') }}"> <button class="btn btn-primary btn-sm">New Document</button></a>
                </div>
                <h2 class="text-center">{{ 'University Documents' }}</h2>
                <hr>
                @if ($documents->isNotEmpty())
                    @foreach ($documents as $document)
                        <div class="">
                            <h4>{{ $document->header }}</h4>
                            <p>{{ $document->description }}</p>

                            <a target="_blank" href="{{ route('uni-pdf-preview', $document->file) }}">
                                <button class="btn favbg">Preview Attachment</button>
                            </a>

                            <form action="{{ route('admin.delete.pdf', $document->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <div class="mt-5">
                        <span class="alert alert-warning mt-5">There are no upcoming university events at the moment. Please
                            check back soon for new updates!</span>
                    </div>
                @endif

            </div>
        </div>
    </section>
@endsection
