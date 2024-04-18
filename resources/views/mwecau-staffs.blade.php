<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mwecua staff list</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-3 mb-3">
        <h1 class="text-center fw-bold">MWECAU STAFF</h1>
        @php

            $counter = 1;
        @endphp
        <table class="table table-success table-stripped table-responsive table-hover">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>DEPARTMENT</th>
                    <th>PHONE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $staff->firstName }}</td>
                        <td>{{ $staff->lastName }}</td>
                        <td>{{ $staff->department }}</td>
                        <td>{{ $staff->phone }}</td>
                        <td><a href="{{ route('mwecau-staff-profile', [$staff->id]) }}"><i class="fa fa-eye favColor" aria-hidden="true"></i> </a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        @if ($staffs->isEmpty())
            <span class="aler alert-warning" role="alert">
                <strong class="fw-bold ">Currently No Staff staff has been registered</strong>
            </span>
        @endif
    </div>


    @include('partials.footer')
    @include('jslinks')
</body>

</html>
