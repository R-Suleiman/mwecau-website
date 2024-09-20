@php
    $staff = 0;
    $program = 0;
    foreach ($faculties as $faculty) {
        foreach ($faculty['departments'] as $department) {
            $staffCount = count($department['staffs']);
            $programCount = count($department['programmes']);
            $program = $program + $programCount;
            $staff = $staff + $staffCount;
        }
    }
@endphp

@extends('layouts.admin')
@section('content')
    <section class="main-section">

        <div class="main-content">
            <div class="stats-box">
                <div class="stat">
                    <div class="top-label">
                        <i class="fa fa-university"></i>
                        <label>Programmes</label>
                    </div>
                    <span>{{ $program }}</span>
                </div>
                <div class="stat">
                    <div class="top-label">
                        <i class="fa fa-users"></i>
                        <label>Staff</label>
                    </div>
                    <span>{{ $staff }}</span>
                </div>
                <div class="stat">
                    <div class="top-label">
                        <i class="fa fa-calendar"></i>
                        <label>Events</label>
                    </div>
                    <span>{{ $totalUnievents }}</span>
                </div>
            </div>


            <div class="content-box">
                <div class="category">
                    <button class="btn btn-events">
                        <i class="fa fa-calendar favColor"></i> Events
                    </button>
                    <button class="btn btn-staff">
                        <i class="fa fa-users favColor"></i> Staff
                    </button>
                    <button class="btn btn-prog">
                        <i class="fa fa-graduation-cap favColor"></i> Programmes
                    </button>
                </div>
                {{-- events --}}
                <div class="category-content events-table">
                    @php
                        $eventCounter = 1;
                    @endphp
                    <table class="myTable content-table">
                        <thead>
                            <tr>
                                <th style="width: 5%">S/N</th>
                                <th style="width: 27%">Event name</th>
                                <th style="width: 27%">Event Category</th>
                                <th style="width: 19%">Location</th>
                                <th style="width: 15%">Date</th>
                                <th style="width: 19%">Host</th>
                                <th style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUniEvents as $allUniEvent)
                                <tr>
                                    <td>{{ $eventCounter++ }}</td>
                                    <td>{{ $allUniEvent->event_title }}</td>
                                    <td class="favColor">{{ $allUniEvent->event_category }}</td>
                                    <td>{{ $allUniEvent->event_location }}</td>
                                    <td>{{ $allUniEvent->event_date }}</td>
                                    <td class="text-uppercase favColor">{{ $allUniEvent->event_organizer }}</td>
                                    <td class="actions-col">
                                        <a href="{{ route('admin.event-details', [$allUniEvent->id]) }}">
                                            <button class="btn btn-secondary"> <i class="fa fa-eye"
                                                    aria-hidden="true"></i></button>
                                        </a>

                                        <a href="{{ route('admin.edit.event', $allUniEvent->id) }}">
                                            <button class="btn btn-warning mx-3"> <i class="fa fa-pencil"
                                                    aria-hidden="true"></i></button>
                                        </a>

                                        <form action="{{ route('admin.destroy.event', $allUniEvent->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button class="btn btn-danger"> <i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="view-all-btn">
                        <a href="{{ route('admin.event') }}">
                            <button class="btn">View all >></button>
                        </a>
                    </div>
                </div>
                {{-- staff --}}
                <div class="category-content staff-table">

                    <table class="myTable content-table">
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
                                                    href="{{ route('staff-profiles', [$staff['first_name'], $staff['last_name']]) }}"><button
                                                        class="btn btn-outline-secondary">view</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>

                </div>
                {{-- programs --}}
                <div class="category-content prog-table">
                    @php
                        $programCounter = 1;
                    @endphp
                    <table class="myTable content-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Programme ID</th>
                                <th>Program Name</th>
                                <th>Duration</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $postgraduatecounter = 1;
                            @endphp
                            @foreach ($faculties as $faculty)
                                @foreach ($faculty['departments'] as $department)
                                    @foreach ($department['programmes'] as $programme)
                                        <tr>
                                            <td>{{ $postgraduatecounter++ }}</td>
                                            <td>{{ $programme['programme_id'] }}</td>
                                            <td>{{ $programme['programme_name'] }}</td>
                                            <td>{{ $programme['prog_duration'] }} years</td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.course.details', $programme['programme_name']) }}"><button
                                                        class="btn btn-outline-secondary">view</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
