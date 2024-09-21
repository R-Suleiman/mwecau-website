@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="mt-5 mb-4">
            <div class="mb-5">
                <h1 class="favColor text-lg-center darkMode text-center">University Executive Management</h1>
            </div>
            <div class="row mb-5 ">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-12 text-center ">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/Pissa.jpeg') }}" alt=""
                        style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Rt. Rev. Wolfgang Pissa</label>
                        <label>Chancellor</label>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/Isaac.jfif') }}" alt=""
                        style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Most. Rev. Isaac Aman</label>
                        <label>Chaiman Audit Committee</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/Bishop_Ludovick_Joseph_Minde.jpg') }}"
                        alt="" style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Rt. Rev. Ludovick Joseph Minde</label>
                        <label>Chairman of University Council</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/Rt Rev Rogath Kimaryo.jpg') }}"
                        alt="" style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Rt. Rev. Rogath Kimaryo</label>
                        <label>Chairman Planning & Finance</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/HENRY-LASWAI.jpg') }}" alt=""
                        style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Prof. Henry Laswai</label>
                        <label>DVC-ARC</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="{{ asset('../img/staff profiles/VC-MWECAU.jpg') }}" alt=""
                        style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Prof. Phillbert Vumilia</label>
                        <label>Vice Chancellor</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4 text-center my-4">
                    <img class="img-fluid" src="" alt="" style="border-radius: 9px; width: 170px">
                    <div class="my-3 d-flex flex-column">
                        <label class="fw-bold">Prof. Didas Kimaro</label>
                        <label>DVC-PFA</label>
                    </div>
                </div>
            </div>

            <div class="favColor mb-5 darkMode">
                <h2 class="text-center">Administrative Staff</h2>
            </div>
            @php
                $counter = 1;
            @endphp
            <div class="list-table">
                <table class="myTable table table-bordered table-secondary table-responsive">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($faculties as $faculty)
                            @if ($faculty['faculty_id'] === '0')
                                @foreach ($faculty['departments'] as $department)
                                    @foreach ($department['staffs'] as $staff)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $staff['salutation'] }}. {{ $staff['first_name'] }}</td>
                                            <td>{{ $staff['other_name'] }}</td>
                                            <td>{{ $staff['last_name'] }}</td>
                                            <td>{{ $department['dept_short_name'] }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('staff-profile', [$staff['first_name'], $staff['last_name']]) }}"><button
                                                        class="btn btn-outline-secondary">view</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            const staffTable = document.querySelector('.staff-table')

            window.addEventListener('load', () => {
                staffTable.style.display = 'block'
            })
        </script>
    @endsection
