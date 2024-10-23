@extends('layouts.web')
@section('content')
    <div class="container-fluid my-5">
        <div>
            <h2 class="favColor text-center text-uppercase">Mwecau Gallery</h2>
            <p class="fs-5 text-center">Welcome to Mwenge Catholic University Gallery</p>
        </div>

        <div class="row p-2">
            <div class="col-12 col-md-6 col-lg-3 p-2">
                @foreach ($gallery as $index => $image)
                    @if ($index >= 0 && $index % 4 == 0)
                        <img src="{{ asset('/images/pageImages/' . $image->image) }}" alt="" class="my-2" style="max-width: 100%">
                    @endif
                @endforeach
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-2">
                @foreach ($gallery as $index => $image)
                    @if ($index >= 1 && ($index - 1) % 4 == 0)
                        <img src="{{ asset('/images/pageImages/' . $image->image) }}" alt="" class="my-2" style="max-width: 100%">
                    @endif
                @endforeach
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-2">
                @foreach ($gallery as $index => $image)
                    @if ($index >= 2 && ($index - 2) % 4 == 0)
                        <img src="{{ asset('/images/pageImages/' . $image->image) }}" alt="" class="my-2"
                            style="max-width: 100%">
                    @endif
                @endforeach
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-2">
                @foreach ($gallery as $index => $image)
                    @if ($index >= 3 && ($index - 3) % 4 == 0)
                        <img src="{{ asset('/images/pageImages/' . $image->image) }}" alt="" class="my-2"
                            style="max-width: 100%">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
