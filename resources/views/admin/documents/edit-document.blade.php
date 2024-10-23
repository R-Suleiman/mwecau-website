@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <div class="text-end">
            <a href="{{ route('admin.documents.pdf') }}"> <button class="btn btn-primary btn-sm"> <i
                        class="fa fa-arrow-left"></i> back</button></a>
        </div>
        <h2 class="text-center">{{ 'Update Document Details' }}</h2>
        <hr>

        <form action="{{ route('admin.update.pdf', $document->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mt-4 ">
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3 " for="header">{{ 'Title of the Document' }} <sup class="text-danger"><i
                                class="fa fa-asterisk"></i></sup></label>
                    <input type="text" class="form-control @error('header') is-invalid @enderror"
                        value="{{ $document->header }}" name="header" id="header"
                        placeholder="Enter title of the document">

                    @error('header')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3 " for="type">{{ 'Select Document Type' }} <sup class="text-danger"><i
                                class="fa fa-asterisk"></i></sup></label>
                    <select class="form-control form-select @error('type') is-invalid @enderror" name="type"
                        id="type">
                        <option value="{{ $document->type }}">{{ $document->type }}</option>
                        <option value="journal">Journal</option>
                        <option value="joining-instruction">Joining Instruction</option>
                        <option value="almanac">Almanac</option>
                        <option value="fee-structure">Fee Structure</option>
                        <option value="timetable">Timetable</option>
                    </select>

                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Additional Select for Undergraduate or Postgraduate -->
                <div class="col-12 col-md-6 col-lg-6 mb-4" id="level-div">
                    <label class="mb-3" for="level">{{ 'Select Level' }} </label>
                    <select class="form-control form-select" name="level" id="level">
                        <option value="{{ $document->level }}">{{ $document->level }}</option>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="postgraduate">Postgraduate</option>
                        <option value="non-degree">Non-Degree</option>
                    </select>

                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @if ($document->description != null)
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <label class="mb-3"
                            for="description">{{ 'Brief Description of the Document (Optional)' }}</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="editor"
                            cols="30" rows="10" placeholder="Type in the description about the document of applicable">{{ old('description') }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @endif

                <div class="col-12 mb-4">
                    <label class="mb-3 mt-3 favColor" for="file">{{ 'Upload PDF File' }} </label>
                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                        id="file">

                    @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-success fw-bold">{{ 'Save' }}</button>
        </form>

    </div>
@endsection
