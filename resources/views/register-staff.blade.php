<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Register</title>

    @include('links')
</head>

<body>

    @include('partials.navbar')
    @include('preloader')
    <div class="container mt-5 ">
        <form action="{{ route('registerStaff') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="row">
                <div class="mb-4">
                    <h2>{{ 'Mwecau staff registration panel' }}</h2>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1 " for="title">{{ 'Staff title' }}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" name="title" id="title" placeholder="eg, Dr. Erick Godfrey">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1 " for="staffID">{{ 'StaffID' }}</label>
                    <input type="text" class="form-control @error('staffID') is-invalid @enderror"
                        value="{{ old('staffID') }}" name="staffID" id="staffID" placeholder="eg, mwecau201jjh">

                    @error('staffID')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="firstName">{{ 'FIRST NAME' }}</label>
                    <input type="text" class="form-control @error('firstName') is-invalid @enderror"
                        value="{{ old('firstName') }}" id="firstName" name="firstName" placeholder="eg. Erick">

                    @error('firstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="lastName">{{ 'Last Name' }}</label>
                    <input type="text" class="form-control @error('lastName') is-invalid @enderror"
                        value="{{ old('lastName') }}" id="lastName" name="lastName" placeholder="eg, Godfrey">

                    @error('lastName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="department">{{ 'Department' }}</label>
                    <input type="text" class="form-control @error('department') is-invalid @enderror"
                        value="{{ old('department') }}" id="department" name="department" placeholder="eg, DNIST">

                    @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="email">{{ 'email' }}</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        id="email" name="email" placeholder="active email address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="phone">{{ 'Phone' }}</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                        id="phone" name="phone" placeholder="Active phone number">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="gender">{{ 'Gender' }}</label>
                    <input type="text" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}"
                        id="gender" name="gender" placeholder="male or female">

                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="nationality">{{ 'Nationality' }}</label>
                    <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                        value="{{ old('nationality') }}" id="nationality" name="nationality"
                        placeholder="country eg, Tanzania">

                    @error('nationality')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1" for="language">{{ 'Language' }}</label>
                    <input type="text" class="form-control @error('language') is-invalid @enderror"
                        value="{{ old('language') }}" id="language" name="language" placeholder="eg, swahili ">

                    @error('language')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1 " for="aboutStaff">{{ 'About staff' }}</label>
                    <textarea name="aboutStaff" class="form-control @error('aboutStaff') is-invalid @enderror" id="aboutStaff"
                        value="{{ old('aboutStaff') }}" cols="30" rows="10"
                        placeholder="Detailed description for the course"></textarea>

                    @error('aboutStaff')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1 " for="academicQualification">{{ 'Academic Qualifications' }}</label>
                    <textarea name="academicQualification" class="form-control @error('academicQualification') is-invalid @enderror"
                        id="academicQualification" value="{{ old('academicQualification') }}" cols="30" rows="10"
                        placeholder="Detailed description for the course"></textarea>

                    @error('academicQualification')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <label class="fw-bold mb-1 " for="staffProfile_picture">{{ 'Staff Profile picture' }}</label>
                    <input type="file" class="form-control @error('staffProfile_picture') is-invalid @enderror"
                        value="{{ old('staffProfile_picture') }}" name="staffProfile_picture"
                        id="staffProfile_picture" placeholder="Enter course duration">

                    @error('staffProfile_picture')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-success">{{ 'Register' }}</button>
            </div>
        </form>
    </div>
    @include('partials.footer')
    @include('jslinks')
</body>

</html>