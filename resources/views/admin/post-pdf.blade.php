@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center">{{ 'Post Universtiy Documents' }}</h2>
        <hr>
        <div class="text-start">
            <a href="{{ route('admin.documents.pdf') }}"> <button class="btn btn-primary btn-sm">Back</button></a>
        </div>
        <form action="{{ route('admin.new.pdf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="row mt-4 ">
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3 " for="header">{{ 'Title of the Document' }} <sup class="text-danger"><i
                                class="fa fa-asterisk"></i></sup></label>
                    <input type="text" class="form-control @error('header') is-invalid @enderror"
                        value="{{ old('header') }}" name="header" id="header" placeholder="Enter title of the document">

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
                        <option value="">Select Document Type</option>
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
                <div class="col-12 col-md-6 col-lg-6 mb-4" id="level-div" style="display: none;">
                    <label class="mb-3" for="level">{{ 'Select Level' }} <sup class="text-danger"><i
                                class="fa fa-asterisk"></i></sup></label>
                    <select class="form-control form-select" name="level" id="level">
                        <option value="">Select Level</option>
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

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="mb-3" for="description">{{ 'Brief Description of the Document (Optional)' }}</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                        cols="30" rows="10" placeholder="Type in the description about the document of applicable">{{ old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 mb-4">
                    <label class="mb-3 mt-3 favColor" for="file">{{ 'Upload PDF File' }} <sup class="text-danger"><i
                                class="fa fa-asterisk"></i></sup></label>
                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                        id="file">

                    @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-warning fw-bold">{{ 'Post' }}</button>
        </form>

    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('type');
        const levelDiv = document.getElementById('level-div');

        typeSelect.addEventListener('change', function() {
            if (this.value === 'joining-instruction' || this.value === 'fee-structure' || this.value ===
                'timetable') {
                levelDiv.style.display = 'block';
            } else {
                levelDiv.style.display = 'none';
            }
        });
    });
</script>
