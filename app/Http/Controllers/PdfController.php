<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\course;

use Dompdf\Dompdf;
use Dompdf\Options;


use RealRashid\SweetAlert\Facades\Alert;

class PdfController extends Controller
{
    public function uploadPdfForm()
    {
        $pdfs = Pdf::all(); // Fetch all PDFs
        return view('upload-pdf-form', compact('pdfs'));
    }

    public function uploadPDF(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'pdf_file' => 'required|mimes:pdf,max:2048' // Adjust the max file size as needed
        ], [
            'pdf_file' => 'you can only upload pdf file and it should not be more than 2MB file size',
        ]);

        // Get the uploaded file
        $file = $request->file('pdf_file');

        // Generate a unique name for the file
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Store the file in the storage/app/public directory
        $file->storeAs('public', $fileName);

        // Save the file information to the database
        $pdf = new PDF();
        $pdf->file_name = $file->getClientOriginalName();
        $pdf->file_path = $fileName;
        $pdf->save();

        return redirect()->back()->with('success', 'PDF uploaded successfully');
    }

    public function previewPDF($fileName)
    {
        // Find the PDF record by file name
        $pdf = PDF::where('file_path', $fileName)->first();

        if (!$pdf) {
            return response()->json(['error' => 'PDF not found'], 404);
        }

        // Get the storage path for the PDF file
        $filePath = storage_path('app/public/' . $pdf->file_path);

        // Check if the file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'PDF file not found'], 404);
        }

        // Return a response to display the PDF in the browser
        return response()->file($filePath);
    }


    public function generateAllPDF()
    {
        $courses = course::all(); // Retrieve all courses from the database

        $htmlContent = '<h1>All Courses</h1>';
        $htmlContent .= '<table border="1"><tr><th>ID</th><th>Title</th><th>Description</th><th>Duration</th></tr>';
        $counter = 1;
        foreach ($courses as $course) {
            // if ($course->course_category == 'undergraduate') {
            $htmlContent .= '<tr><td>' . $counter++ . '</td><td>' . $course->course_title . '</td><td>' . $course->course_description . '</td><td>' . $course->course_duration . '</tr>';
            // } else {
            //     '<h1>No course found</h1>';
            // }
        }

        $htmlContent .= '</table>';

        // Add text below the table
        $htmlContent .= '<p style="text-align: center; font-weight:bold;">Mwenge Catholic University</p>';

        $pdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $pdf->setOptions($options);

        $pdf->loadHtml($htmlContent);

    //    // Add watermark as image
    //    $imagePath = public_path('img/mwecau.png'); // Adjust path to your watermark image
    //    $pdf->getCanvas()->image($imagePath, 100, 100, 100, 100); // Adjust parameters as needed



        $pdf->render();

        // Output the generated PDF file
        return $pdf->stream('Mwenge Catholic University all courses.pdf');
    }

    public function generatePostGraduatePDF()
    {
        $courses = course::all()->sortBy('course_title'); // Retrieve all undergraduate courses from the database

        $htmlContent = '<h1>All postgraduate Courses</h1>';
        $htmlContent .= '<table border="1"><tr><th>ID</th><th>Title</th><th>Description</th><th>Duration</th></tr>';
        $counter = 1;
        foreach ($courses as $course) {
            if ($course->course_category == 'postgraduate') {
                $htmlContent .= '<tr><td>' . $counter++ . '</td><td>' . $course->course_title . '</td><td>' . $course->course_description . '</td><td>' . $course->course_duration . '</tr>';
            } else {
                '<h1>No course found</h1>';
            }
        }

        $htmlContent .= '</table>';

        $pdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $pdf->setOptions($options);

        $pdf->loadHtml($htmlContent);
        $pdf->render();

        // Output the generated PDF file
        return $pdf->stream('Mwecau postgraduate courses.pdf');
    }

    public function generateUndergraduatePDF()
    {
        $courses = course::all()->sortBy('course_title'); // Retrieve all undergraduate courses from the database

        $htmlContent = '<h1>All undergraduate Courses</h1>';
        $htmlContent .= '<table border="1"><tr><th>ID</th><th>Title</th><th>Description</th><th>Duration</th></tr>';
        $counter = 1;
        foreach ($courses as $course) {
            if ($course->course_category == 'undergraduate') {
                $htmlContent .= '<tr><td>' . $counter++ . '</td><td>' . $course->course_title . '</td><td>' . $course->course_description . '</td><td>' . $course->course_duration . '</tr>';
            } else {
                '<h1>No course found</h1>';
            }
        }

        $htmlContent .= '</table>';

        $pdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $pdf->setOptions($options);

        $pdf->loadHtml($htmlContent);
        $pdf->render();

        // Output the generated PDF file
        return $pdf->stream('Mwecau undergraduate courses.pdf');
    }

    public function generateAllNonDegreePDF()
    {
        $courses = course::all()->sortByDesc('created_at'); // Retrieve all courses from the database

        $htmlContent = '<h1>All non-degree Courses</h1>';
        $htmlContent .= '<table border="1"><tr><th>ID</th><th>Title</th><th>Description</th><th>Duration</th></tr>';
        $counter = 1;
        foreach ($courses as $course) {
            if ($course->course_category == 'non-degree') {
                $htmlContent .= '<tr><td>' . $counter++ . '</td><td>' . $course->course_title . '</td><td>' . $course->course_description . '</td><td>' . $course->course_duration . '</tr>';
            } else {
                '<h1>No course found</h1>';
            }
        }
        // $htmlContent .= '<h6> Mwenge Catholic University</h6>'; i wanted this to be a university copyright
        $htmlContent .= '</table>';

        $pdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $pdf->setOptions($options);

        $pdf->loadHtml($htmlContent);
        $pdf->render();

        // Output the generated PDF file
        return $pdf->stream('Mwecau Non-degree courses.pdf');
    }
}
