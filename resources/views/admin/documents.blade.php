@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center">{{ 'University Documents' }}</h2>
        <hr>
        <div class="text-end mb-5">
            <a href="{{ route('admin.post.pdf') }}"> <button class="btn btn-primary"> <i class="fas fa-plus fw-bold"></i> New
                    Document</button></a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Documents</h2>
                <div class="mb-3">
                    <label for="type">Type:</label>
                    <select id="type" class="form-control">
                        <option value="">All</option>
                        @foreach ($types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-5 mt-3 mb-5">
                <button class="btn btn-danger" onclick="resetFilters()">Reset Filters</button>
            </div>
            <table class="myTable table table-active table-hover text-dark table-responsive table-striped">
                <thead>
                    <tr class="favbg">
                        <th>Header</th>
                        <th>Type</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="document-list">
                    @if ($documents->isNotEmpty())
                        @foreach ($documents as $document)
                            <tr>
                                <td>{{ $document->header }}</td>
                                <td>{{ $document->type }}</td>
                                <td class="justify-content-evenly d-lg-flex">
                                    <a target="_blank" href="{{ route('uni-pdf-preview', $document->file) }}">
                                        <button class="btn btn-primary">Preview Attachment</button>
                                    </a>

                                    <form action="{{ route('admin.delete.pdf', $document->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this document?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No documents found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
