@extends('layouts.admin')
@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="text-center">{{ 'Active Footer Items' }}</h2>
    </div>
    <hr>
    <div class="text-end">
        <a href="{{ route('admin.footer.store.view') }}">
            <button class="btn btn-primary"> <i class="fa fa-plus"></i> New Item</button>
        </a>
    </div>
    <div class="">
        @php
            $counter = 1;
        @endphp
        <x-messages />
        <table class="myTable table table-hover table-bordered table-stripped">
            <thead>
                <tr class="favbg">
                    <th>S/N</th>
                    <th>Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footer as $item)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.edit.footer.item.view', $item->name) }}">
                                <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                        aria-hidden="true"></i></button>
                            </a>

                            <form action="{{ route('admin.destroy.footer.item', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are sure you want to delete this item! This action can\'t be reversed')">
                                    <i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
