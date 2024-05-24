<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mwecau | Course list</title>

    @include('links')
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <div class="mt-5 mb-4">
            <div class="mb-5">
                <h1 class="favColor text-lg-center darkMode">University Executive Management</h1>
            </div>
            <div class="row mb-5 ">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-12 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Arch. Nyaisonga</p>
                        <p>Chancellor</p>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Prof. Philibert Vumilia</p>
                        <p>Vice Chancellor</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Prof. Philibert Vumilia</p>
                        <p>Vice Chancellor</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px">
                    <div class="mt-3">
                        <p>Prof. Philibert Vumilia</p>
                        <p>Vice Chancellor</p>
                    </div>
                </div>
            </div>

            <div class="favColor mb-5 darkMode">
                <h2>{{ 'Staff/Employees' }}</h2>
            </div>
            {{--
            <div class="mb-4 text-center">
                <div class="">
                    <form class="event-form">
                        <div class="form-group">
                            <input type="text" name="fName" placeholder="First name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="sName" placeholder="Second Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="lName" placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="department" placeholder="Department" />
                        </div>
                        <div class="form-group" style="width: 15%; padding: 0">
                            <button class="btn">Search</button>
                        </div>
                    </form>
                </div>
            </div> --}}

            @php
                $counter = 1;
            @endphp
            <table class="table table-bordered table-secondary table-responsive">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $staff->firstName }}</td>
                            <td>{{ $staff->lastName }}</td>
                            <td>{{ $staff->department }}</td>
                            <td class="action">
                                <a href="{{ route('mwecau-staff-profile', [$staff->id]) }}">
                                    <i class="fa fa-eye actions-icon view"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $staffs->links() }}

        </div>

        <script>
            const staffTable = document.querySelector('.staff-table')

            window.addEventListener('load', () => {
                staffTable.style.display = 'block'
            })
        </script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
        @include('jslinks')
</body>

</html>
