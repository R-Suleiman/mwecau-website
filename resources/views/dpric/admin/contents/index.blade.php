@extends('layouts.dpric.dpric-admin-layout')

@section('content')
    <section class="w-full">
        <div class="w-11/12 mx-auto">
            <h2 class="oswald my-4 text-3xl text-blue-800">Contents Management</h2>

            <div class="my-4">
                <h3 class="my-4 text-lg">Select a Page to view and manage it's contents</h3>

                <ul class="p-4">
                    @foreach ($pages as $page)
                    <a href="{{ route('admin.contents.get-page', ['page_name' => $page]) }}">
                        <li class="w-max p-2 my-2 bg-blue-100 border-l-4 border-blue-900 hover:bg-blue-300">
                            {{ $page }}
                        </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
