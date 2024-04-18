<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF upload and preview</title>

    @include('links')
</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="col-md-6 mt-5">
            <form action="{{ route('pdf.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-title"></div>
                    <div class="card body">
                        <div class="card-text">
                            <input type="file" class="form-control @error('pdf_file') is-invalid @enderror"
                                id="pdf_file" name="pdf_file">

                            @error('pdf_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-4">Upload file</button>
            </form>

        </div>
    </div>

    <div class="container">
        <div class="col-md-6 mt-5">
            <!-- Display PDF links -->
            @foreach ($pdfs as $pdf)
                <div>
                    <a href="{{ route('pdf.preview', $pdf->file_path) }}" target="_blank">{{ $pdf->file_name }}</a>
                </div>
            @endforeach
        </div>
    </div>





</body>

</html>

{{--
User
successfully now what to list the on browser using this,     public function uploadPdfForm()
    {
        $pdfs = Pdf::first();
        return view('upload-pdf-form', compact('pdfs'));
    },    @foreach ($pdfs as $pdf)
        <h1>{{ $pdf->pdf_file }}</h1>
        @endforeach then when user click it user should preview --}}


        {{-- when i click link from the fetched pdfs it opens link like this, http://127.0.0.1:8000/preview-pdf/pdfs/xoS24ySNWrLUYqharVXRXNruJKvcSv3RfB9Jil0I.pdf, and its says on body
404
Not Found --}}
