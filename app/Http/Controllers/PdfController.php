<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;


use RealRashid\SweetAlert\Facades\Alert;

class PdfController extends Controller
{
    //function to return view for Pdf's
    public function postPdfView()
    {
        return view('admin.post-pdf');
    }
    public function postPdf(Request $request)
    {
        // Validation logic
        $request->validate(
            [
                'header' => ['required', 'string'],
                'description' => ['nullable', 'string'],
                'type' => ['required', 'string'],
                'file' => ['required', 'mimes:pdf', 'max:5120'],
                'level' => ['required_if:type,joining-instruction,fee-structure,timetable', 'string'],
            ],
            [
                'header.required' => 'Kindly type in the title of the document',
                'type.required' => 'Kindly select type of the document',
                'file.required' => 'Please select file to attach',
            ]
        );

        // File processing
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('documents/pdfs'), $fileName);
        }

        $newPDF = new Document();
        $newPDF->header = $request->header;
        $newPDF->description = $request->description;
        $newPDF->type = $request->type;
        $newPDF->file = $fileName;

        if ($request->type == 'joining-instruction' || 'fee-structure') {
            $newPDF->level = $request->level;
        }

        Alert::success('Message', 'PDF uploaded successfully.');

        $newPDF->save();

        return redirect()->back();
    }
    public function documents()
    {
        $documents = Document::all();
        $types = Document::distinct()->pluck('type')->toArray();
        return view('admin.documents', compact('documents', 'types'));
    }
    public function edit($id)
    {
        $document = Document::find($id);
        return view('admin.documents.edit-document', compact('document'));
    }
    public function update(Request $request, $id)
    {
        $document = Document::find($id);

        // Check if a new file is uploaded
        if ($request->hasFile('file')) {

            $existingFile = public_path('/documents/pdfs/' . $document->file);
            if (File::exists($existingFile)) {
                File::delete($existingFile);
            }

            $newFileName = time() . '-' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('/documents/pdfs/'), $newFileName);

            $document->file = $newFileName;
        }

        // Update other fields
        $document->update($request->except('file'));

        return redirect()->route('admin.documents.pdf')->with('message', 'Updated successfully');
    }

    public function destroyDocument($id)
    {
        $destroyFile = Document::findOrFail($id);
        // Checking if the image exists, then deleting it
        $existingFile = public_path('/documents/pdfs/'  . $destroyFile->file);
        if (File::exists($existingFile)) {
            File::delete($existingFile);
        }
        $destroyFile->delete();

        Alert::success('Message', 'successfully deleted');
        return redirect()->back();
    }
    // public function generateAllPDF()
    // {
    //     // $courses = course::all(); // Retrieve all courses from the database

    //     $htmlContent = '<h1>All Courses</h1>';
    //     $htmlContent .= '<table border="1"><tr><th>ID</th><th>Title</th><th>Description</th><th>Duration</th></tr>';
    //     $counter = 1;
    //     foreach ($courses as $course) {
    //         // if ($course->course_category == 'undergraduate') {
    //         $htmlContent .= '<tr><td>' . $counter++ . '</td><td>' . $course->course_title . '</td><td>' . $course->course_description . '</td><td>' . $course->course_duration . '</tr>';
    //         // } else {
    //         //     '<h1>No course found</h1>';
    //         // }
    //     }

    //     $htmlContent .= '</table>';

    //     // Add text below the table
    //     $htmlContent .= '<p style="text-align: center; font-weight:bold;">Mwenge Catholic University</p>';

    //     $pdf = new Dompdf();
    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);
    //     $options->set('isRemoteEnabled', true);
    //     $pdf->setOptions($options);

    //     $pdf->loadHtml($htmlContent);

    //     $pdf->render();

    //     // Output the generated PDF file
    //     return $pdf->stream('Mwenge Catholic University all courses.pdf');
    // }
}
