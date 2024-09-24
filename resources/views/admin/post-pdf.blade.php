@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mb-4 mt-4">
                <div class="text-end">
                    <a href="{{route('admin.documents.pdf')}}"> <button class="btn btn-primary btn-sm">back</button></a>
                </div>
                <h2 class="text-center">{{ 'Post Universtiy Documents' }}</h2>
                <hr>

                <form action="{{ route('admin.new.pdf') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="header">{{ 'Title of the Document (Optional)' }}</label>
                            <input type="text" class="form-control @error('header') is-invalid @enderror"
                                value="{{ old('header') }}" name="header" id="header"
                                placeholder="Header if applicable">

                            @error('header')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="type">{{ 'Select Document Type' }}</label>
                            <select class="form-control form-select" name="type" id="type">
                                <option value="journal">Journal</option>
                                <option value="joining-instruction">Joining Instruction</option>
                                <option value="almanac">Almanac</option>
                                <option value="fee-structure">Fee Structure</option>
                            </select>

                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Additional Select for Undergraduate or Postgraduate -->
                        <div class="col-12 col-md-6 col-lg-6 mb-4" id="level-div" style="display: none;">
                            <label class="mb-3" for="level">{{ 'Select Level' }}</label>
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
                            <label class="mb-3"
                                for="description">{{ 'Brief Description of the Document (Optional)' }}</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                cols="30" rows="10" placeholder="Type in the description about the document of applicable">{{ old('description') }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-4">
                            <label class="mb-3 mt-3 favColor" for="file">{{ 'Upload PDF File' }}</label>
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
        </div>
    </section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('type');
        const levelDiv = document.getElementById('level-div');

        typeSelect.addEventListener('change', function() {
            if (this.value === 'joining-instruction') {
                levelDiv.style.display = 'block';
            } else {
                levelDiv.style.display = 'none';
            }
        });
    });
</script>
