@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center fw-semibold favColor"> {{ 'Libray Panel' }} </h1>

            <div class="text-end m-3">
                <a href="{{ route('admin.library.create') }}">
                    <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New item</button>
                </a>
            </div>

            <x-messages />

            <div class="container">
                <div class="mb-4">
                    <div class="">
                        @if ($libraryIntroduction)
                            <div class="shadow p-4 rounded">
                                <h6 class="text-center favFont fw-bold">{{ $libraryIntroduction->name }}</h6>
                                <p>{!! $libraryIntroduction->description !!}</p>

                                <div>
                                    <a href="{{ route('admin.library.edit', $libraryIntroduction->id) }}"
                                        class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mb-4 text-center ">
                    <div class="">
                        @foreach ($libraryResources as $libraryResource)
                            @if ($libraryResource->category_name == 'objective')
                                <div class="text-center shadow p-4 rounded">
                                    <h6 class="text-center favFont fw-bold">{{ $libraryResource->name }}</h6>
                                    <p>{!! $libraryResource->description !!}</p>

                                    <div>
                                        <a href="{{ route('admin.library.edit', $libraryResource->id) }}"
                                            class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="mb-4">
                    <div class="">
                        @if ($libraryServices)
                            <div class="shadow p-4 rounded">
                                <h6 class="text-center favFont fw-bold">{{ $libraryServices->name }}</h6>
                                <p>{!! $libraryServices->description !!}</p>

                                <div>
                                    <a href="{{ route('admin.library.edit', $libraryServices->id) }}"
                                        class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <h3 class="text-center fs-5">Subscribed E-Resources</h3>
                    <div class="e-resouces">
                        <table class="myTable table table-bordered table-hover table-striped" style="width: 100%">
                            <thead class="thead-dark favbg">
                                <tr>
                                    <th scope="col">s/n</th>
                                    <th scope="col">Database Name</th>
                                    <th scope="col">Descriptions</th>
                                    <th scope="col">Link</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($libraryResources as $libraryResource)
                                    @if ($libraryResource->category_name == 'e-resources')
                                        <tr>
                                            <th scope="row">{{ $counter++ }}</th>
                                            <td>{{ $libraryResource->name }}</td>
                                            <td class="text-wrap">{!! $libraryResource->description !!}</td>
                                            @if ($libraryResource->link)
                                                <td><a href="{{ $libraryResource->link }}" target="_blank"><i
                                                            class="fa fa-link"></i></a></td>
                                            @else
                                                <td><a href="#"><i class="fa fa-link"></i></a></td>
                                            @endif
                                            <td class="text-center d-flex gap-1">
                                                <a href="{{ route('admin.library.edit', $libraryResource->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-pencil"></i></a>

                                                <form action="{{ route('admin.library.destroy', $libraryResource->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this item? This action cannot be undone.')"
                                                        type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-4 mb-4">
                    <h3 class="text-center fs-5">Open Access Resources</h3>
                    <div class="e-resouces">
                        <table class="myTable table table-bordered table-hover table-striped">
                            <thead class="favbg">
                                <tr>
                                    <th scope="col">s/n</th>
                                    <th scope="col">Descriptions</th>
                                    <th scope="col">Link</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($libraryResources as $libraryResource)
                                    @if ($libraryResource->category_name == 'open-access-resource')
                                        <tr>
                                            <th scope="row">{{ $counter++ }}</th>
                                            <td class="text-wrap">{!! $libraryResource->description !!}</td>
                                            @if ($libraryResource->link)
                                                <td><a href="{{ $libraryResource->link }}" target="_blank"><i
                                                            class="fa fa-link"></i></a></td>
                                            @else
                                                <td><a href="#"><i class="fa fa-link"></i></a></td>
                                            @endif
                                            <td class="text-center d-flex gap-1">
                                                <a href="{{ route('admin.library.edit', $libraryResource->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-pencil"></i></a>

                                                <form action="{{ route('admin.library.destroy', $libraryResource->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this item? This action cannot be undone.')"
                                                        type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection
