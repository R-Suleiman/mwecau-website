<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Graduate</title>

    @include('links')

    <style>
        h1:hover {
            color: #513f83;
        }

        p{
            line-height: 30px;
        }
    </style>
</head>

<body>
    @include('partials.navbar')
    <div class="container text-center  mt-5 mb-4">
        <div class="col-12 ">
            <h1 class="text-lg-start">{{$showCourseDetails->course_title}}</h1>
            <p style="text-align:justify">{{ $showCourseDetails->course_description}}</p>
            <a href="https://uas.mwecau.ac.tz"><button class="courseBtn">Apply Now</button></a>
        </div>
    </div>

    @include('partials.footer')
    @include('jslinks')
</body>

</html>