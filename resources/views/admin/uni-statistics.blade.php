@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="container mt-5">
                <h2>Manage Uni Statistics</h2>
                <form action="{{ route('admin.post.statistic') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="row mt-4 ">
                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="statistic_name">{{ 'Statistic Name' }}</label>
                            <input type="text" class="form-control @error('statistic_name') is-invalid @enderror"
                                value="{{ old('statistic_name') }}" name="statistic_name" id="statistic_name"
                                placeholder="Enter statistic name">

                            @error('statistic_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-4">
                            <label class="mb-3 " for="value">{{ 'Statistic Value' }}</label>
                            <input type="text" class="form-control @error('value') is-invalid @enderror"
                                value="{{ old('value') }}" name="value" id="value"
                                placeholder="Enter Statistic Value">

                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md">
                            <button type="submit" class="btn btn-success">Post Statistic</button>
                        </div>

                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
