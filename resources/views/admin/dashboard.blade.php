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
                    <span>{{ $totalUniCourses }}</span>
                </div>
                <div class="stat">
                    <div class="top-label">
                        <i class="fa fa-users"></i>
                        <label>Staff</label>
                    </div>
                    <span>{{ $totalUnistaff }}+</span>
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
                    <table class="content-table">
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
                                            <i class="fa fa-eye actions-icon view"></i>
                                        </a>
                                        <a href="{{ route('admin.edit.event', [$allUniEvent->id]) }}">
                                            <i class="fa fa-pen actions-icon edit"></i>
                                        </a>
                                        <i class="fa fa-trash actions-icon delete"></i>
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
                    @php
                        $counter = 1;
                    @endphp
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th style="width: 5%">S/N</th>
                                <th style="width: 23%">First name</th>
                                <th style="width: 23%">Last Name</th>
                                <th style="width: 16%">Department</th>
                                <th style="width: 10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUniStaff as $allUniStaff)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $allUniStaff->firstName }}</td>
                                    <td>{{ $allUniStaff->lastName }}</td>
                                    <td>{{ $allUniStaff->department }}</td>
                                    <td class="actions-col">
                                        <a href="{{ route('staff-profile', [$allUniStaff->id]) }}">
                                            <i class="fa fa-eye actions-icon view"></i>
                                        </a>
                                        <a href="{{ route('edit.staff.profile', [$allUniStaff->id]) }}"> <i
                                                class="fa fa-pen actions-icon edit"></i></a>

                                        <form action="{{ route('staff.destroy', ['id' => $allUniStaff->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn deletetn" data-confirm-delete="true"
                                                id="deletebtn">
                                                <i class="fa fa-trash actions-icon delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{-- <div class="view-all-btn">
                        <a href="{{ route('admin.events.list') }}">
                            <button class="btn">View all >></button>
                        </a>
                    </div> --}}

                </div>
                {{-- programs --}}
                <div class="category-content prog-table">
                    @php
                        $programCounter = 1;
                    @endphp
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th style="width: 5%;">S/N</th>
                                <th style="width: 25%">Course title</th>
                                <th style="width: 18%">Course category</th>
                                <th style="width: 25%">Department</th>
                                <th style="width: 10%">Total students</th>
                                <th style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUniCourses as $allUniCourse)
                                <tr>
                                    <td>{{ $programCounter++ }}</td>
                                    <td>{{ $allUniCourse->course_title }}</td>
                                    <td>{{ $allUniCourse->course_category }}</td>
                                    <td>{{ $allUniCourse->course_code }}</td>
                                    <td>250</td>
                                    <td class="actions-col">
                                        <a href="{{ route('admin.course.details', [$allUniCourse->id]) }}"><i
                                                class="fa fa-eye actions-icon view"></i></a>
                                        <a href="{{ route('admin.course_update_form', [$allUniCourse->id]) }}"> <i
                                                class="fa fa-pen actions-icon edit"></i></a>

                                        <form action="{{ route('course.destroy', ['id' => $allUniCourse->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn deletetn" data-confirm-delete="true"
                                                id="deleebtn">
                                                <i class="fa fa-trash actions-icon delete"></i>
                                            </button>
                                        </form>

                                        <button type="submit" class="btn deletebtn" data-confirm-delete="true"
                                            id="deletetn">
                                            <i class="fa fa-trash actions-icon delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <div class="view-all-btn">
                        <a href="{{ route('programs-list') }}">
                            <button class="btn">View all >></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
