@extends('layouts.admin')
@section('content')
    <div class="container-fluid main-events">
        <div class="text-lg-end">
            <a href="{{ route('admin.post.research') }}">
                <button class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add
                    New</button>
            </a>
        </div>
        <x-messages />
        <div class="row events-cont">
            @php
                $counter = 1;
            @endphp
            @if (count($research) > 0)
                @foreach ($research as $research)
                    <div class="col-12 col-lg-9 col-md-8 event-content">
                        <h4><strong>{{ $counter++ }} </strong> : {{ $research->header }}</h3>
                            <p>
                                {!! Str::limit($research->description, 300) !!}
                            </p>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 d-flex" style="justify-content: space-between">

                        <a href="{{ route('admin.research.details', $research->header) }}">
                            <button class="btn btn-secondary" style="height: fit-content; padding: 5px 20px"><i
                                    class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </a>

                        <a href="{{ route('admin.edit.resource', $research->id) }}">
                            <button class="btn btn-warning" style="height: fit-content; padding: 5px 20px"> <i
                                    class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </a>

                        <form action="{{ route('admin-destroy.resource', $research->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete the selected record, You won\'t be able to revert this action?')"
                                style="height: fit-content; padding: 5px 20px"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

@endsection
