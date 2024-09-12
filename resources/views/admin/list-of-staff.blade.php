@extends('layouts.admin')

@section('content')
    <section class="main-section">
        <div class="main-content">
            {{-- <div class="header">
                <div class="nav-toggle show-nav">
                    <i class="fa fa-bars"></i>
                </div>
                <h2>MWENGE CATHOLIC UNIVERSITY | DASHBOARD</h2>
            </div> --}}
            <div class="stats-box">
                <h3 class="title">Staff</h3>
            </div>

            <div class="content-box">
                <a href="{{ route('register-staff') }}"><button class="btn btn-primary text-end">Register new
                        staff</button></a>

                <div class="find-events">
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

                <div class="category-content">
                    <table class="content-table staff-table" style="color: black">
                        @php
                            $counter = 1;
                        @endphp
                        <thead>
                            <tr>
                                <th style="width: 5%">S/N</th>
                                <th style="width: 23%">First name</th>
                                <th style="width: 23%">Second Name</th>
                                <th style="width: 23%">Last Name</th>
                                <th style="width: 16%">Department</th>
                                <th style="width: 10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listOfStaff as $listOfStaff)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $listOfStaff->firstName }}</td>
                                    <td>{{ $listOfStaff->lastName }}</td>
                                    <td>{{ $listOfStaff->firstName }}</td>
                                    <td>{{ $listOfStaff->department }}</td>
                                    <td class="actions-col">
                                        <a href="{{ route('staff-profile', [$listOfStaff->id]) }}">
                                            <i class="fa fa-eye actions-icon view"></i>
                                        </a>
                                        <a href="{{ route('edit.staff.profile', [$listOfStaff->id]) }}"> <i
                                                class="fa fa-pen actions-icon edit"></i></a>
                                        <i class="fa fa-trash actions-icon delete"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- pagination here -->

                    <!-- <div class="view-all-btn">
                          <button class="btn">View all >></button>
                        </div> -->
                </div>
            </div>
        </div>
    </section>

    <script>
        const staffTable = document.querySelector('.staff-table')

        window.addEventListener('load', () => {
            staffTable.style.display = 'block'
        })
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
