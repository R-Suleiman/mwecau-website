@extends('layouts.admin')
@section('content')
    <section class="main-section">
        <div class="main-content">
            <div class="">
                <img src="{{ asset('images/coursePhotos/' . $courseDetails->course_thumbnail) }}"
                    alt="{{ $courseDetails->course_thumbnail }}" class="w-100">
            </div>

            <div class="container  mt-2 mb-4">
                <div class="row g-5" style="text-align: justify;">
                    <div class="col-lg-4 mb-3">
                        <div class="card mt-5 ">
                            <h5 class="card-header favColor"> {{ $courseDetails->course_title }}</h5>
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="mb-3"> <strong>Level: </strong> {{ $courseDetails->course_category }}</h5>

                                    <h5 class="mb-3"> <strong>Course code:</strong> {{ $courseDetails->course_code }}</h5>
                                    <h5 class="mb-3"> <strong>Course duration:</strong>
                                        {{ $courseDetails->course_duration }}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        <h5 class="fw-bold favColor">{{ 'Description' }}</h5>
                        @php
                            $descriptionSentences = explode('.', $courseDetails->course_description);
                        @endphp

                        @foreach ($descriptionSentences as $sentence)
                            <p>{{ $sentence }}.</p>
                        @endforeach
                        </p>
                        <h5 class="fw-bold favColor">{{ 'Entry Qualification' }}</h5>
                        <p class="lh-3 ">
                            {{ $courseDetails->course_entry_qualification }}</p>

                        {{-- <p style="text-align:justify">{{ $courseDetails->course_description }}</p> --}}
                        <a href="{{ route('admin.course_update_form', $courseDetails->id) }}">
                            <button class="btn btn-warning fw-bold ">update course details</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
