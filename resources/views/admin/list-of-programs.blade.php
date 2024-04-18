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
                <h3 class="title">Programs</h3>
            </div>

            <div class="content-box">
                <div class="text-end">
                    <a href="{{ route('register-course') }}"><button class="btn btn-primary text-end">Register new
                            course</button></a>
                </div>

                <div class="find-events">
                    <form class="event-form">
                        <!-- <div class="form-group">
                          <label for="date">Date from:</label><br />
                          <input type="date" name="date" id="date" style="width: 70%" />
                        </div> -->
                        <div class="form-group">
                            <select name="category">
                                <option value="All categories">All</option>
                                <option value="Academic">Undergraduate</option>
                                <option value="Entertainments">Post-Graduate</option>
                                <option value="Entertainments">Non-Degree</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="keywords" placeholder="search program" />
                        </div>
                        <div class="form-group" style="width: 15%; padding: 0;">
                            <button class="btn ">Search</button>
                        </div>
                    </form>
                </div>

                <div class="category-content">
                    @php
                        $counter = 1;
                    @endphp
                    <table class="content-table prog-table">
                        <thead>
                            <tr>
                                <th style="width: 5%;">S/N</th>
                                <th style="width: 25%">NAME</th>
                                <th style="width: 18%">category</th>
                                <th style="width: 25%">Department</th>
                                <th style="width: 10%">Students</th>
                                <th style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listOfPrograms as $listOfProgram)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $listOfProgram->course_title }}</td>
                                    <td>{{ $listOfProgram->course_category }}</td>
                                    <td>{{ $listOfProgram->course_title }}</td>
                                    <td>{{ $listOfProgram->course_title }}</td>
                                    <td class="actions-col">
                                        <a href="{{ route('admin.course.details', [$listOfProgram->id]) }}"><i
                                                class="fa fa-eye actions-icon view"></i></a>
                                        <a href="{{ route('admin.course_update_form', [$listOfProgram->id]) }}"> <i
                                                class="fa fa-pen actions-icon edit"></i></a>

                                        <form action="{{ route('course.destroy', ['id' => $listOfProgram->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn deletebtn" data-confirm-delete="true"
                                                id="deletebtn">
                                                <i class="fa fa-trash actions-icon delete"></i>
                                            </button>
                                        </form>

                                        <button type="submit" class="btn deleteBtn" data-confirm-delete="true"
                                            id="deletebtn">
                                            <i class="fa fa-trash actions-icon delete"></i>
                                        </button>
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
        const progTable = document.querySelector('.prog-table')

        window.addEventListener('load', () => {
            progTable.style.display = 'block'
        })
    </script>
@endsection
