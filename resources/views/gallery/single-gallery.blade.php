@extends('layouts.web')
@section('content')
    <div class="container-fluid my-5">
        @php
            use Carbon\Carbon;
        @endphp
        <div>
            <h2 class="favColor text-center text-uppercase">{{ $galleryDetails->name }}</h2>
            <p class="text-center fs-5 gallery-subh">{{ Carbon::parse($galleryDetails->date)->format('d-m-Y') }}</p>
        </div>
        <div class="row p-2">
            @if ($gallery2->galleryImages->isNotEmpty())
                <div class="col-12 col-md-6 col-lg-3 p-2">
                    @foreach ($gallery2->galleryImages as $index => $image)
                        @if ($index >= 0 && $index % 4 == 0)
                            <img src="{{ asset('images/Gallery/Collections/' . $image->image) }}" alt="Gallery Image"
                                class="my-2" style="max-width: 100%">
                        @endif
                    @endforeach
                </div>

                <div class="col-12 col-md-6 col-lg-3 p-2">
                    @foreach ($gallery2->galleryImages as $index => $image)
                        @if ($index >= 1 && ($index - 1) % 4 == 0)
                            <img src="{{ asset('images/Gallery/Collections/' . $image->image) }}" alt="Gallery Image"
                                class="my-2" style="max-width: 100%">
                        @endif
                    @endforeach
                </div>


                <div class="col-12 col-md-6 col-lg-3 p-2">
                    @foreach ($gallery2->galleryImages as $index => $image)
                        @if ($index >= 2 && ($index - 2) % 4 == 0)
                            <img src="{{ asset('images/Gallery/Collections/' . $image->image) }}" alt="Gallery Image"
                                class="my-2" style="max-width: 100%">
                        @endif
                    @endforeach
                </div>

                <div class="col-12 col-md-6 col-lg-3 p-2">
                    @foreach ($gallery2->galleryImages as $index => $image)
                        @if ($index >= 3 && ($index - 3) % 4 == 0)
                            <img src="{{ asset('images/Gallery/Collections/' . $image->image) }}" alt="Gallery Image"
                                class="my-2" style="max-width: 100%">
                        @endif
                    @endforeach

                </div>
            @else
                <div class="fw-bold d-flex align-items-center justify-content-center min-h-100">
                    <div class="alert alert-warning text-center">
                        <p class="mb-0">
                            Our gallery is being curated! New images will be added soon. Stay tuned for the latest updates
                            and beautiful collections!
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
