@extends('layouts.web')
@section('content')
    <!-- corousel -->
    <div class="homeSlider">
        @if (count($images) > 0)
            @foreach ($images as $index => $image)
                @if ($image->page == 'home' && $image->image_section == 'homeslider')
                    <div class="{{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/pageImages/' . $image->image) }}" class="d-block w-100"
                            alt="{{ $image->header }}" />
                    </div>
                @endif
            @endforeach
        @endif
    </div>


    <div class="container">
        <h4>Researches</h4>
        <p class="fs-5">Visit our <a
                href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=mwecau.ac.tz&btnG="
                target="_blank" class="text-primary">Google Scholar</a> Account to view our Reseaches</p>

        <h4>Projects</h4>
        <p>List of Projects</p>

        <h4>Outreach Programs</h4>
        <p>List of Outreach Programs</p>
    </div>
@endsection
