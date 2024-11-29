<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricDocuments;
use Illuminate\Http\Request;
use Storage;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = DpricDocuments::query()->orderBy('created_at', 'desc')->get();
        return view('dpric.admin.documents.index', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dpric.admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $document = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'path' => 'required'
        ]);

        if($request->hasFile('path')) {
            $doc = $request->file('path');
            $docPath = 'documents/dpric/documents/';
            $docName = $doc->getClientOriginalName() . '-' . time();
            $doc->storeAs($docPath, $docName, 'public');
            $document['path'] = $docName;
        }

        DpricDocuments::create($document);
        return to_route('admin.dpric-documents.index')->with('message', 'Document added successfully!');
    }

    public function show(DpricDocuments $dpricDocument)
{
    $filePath = storage_path('app/public/documents/dpric/documents/' . $dpricDocument->path);

    if (!file_exists($filePath)) {
        abort(404, 'File not found.');
    }

    return response()->file($filePath);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DpricDocuments $dpricDocument)
    {
        return view('dpric.admin.documents.edit', ['document' => $dpricDocument]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DpricDocuments $dpricDocument)
    {
        $document = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'path' => 'required'
        ]);

        $docName = $dpricDocument->path;
        if($request->hasFile('path')) {
            $doc = $request->file('path');
            $docPath = 'documents/dpric/documents/';
            $docName = $doc->getClientOriginalName() . '-' . time();
            $doc->storeAs($docPath, $docName, 'public');

            // remove the existing document
            $existingDoc = $docPath . $dpricDocument->path;
            if($dpricDocument->path && Storage::disk('public')->exists($existingDoc)) {
                Storage::disk('public')->delete($existingDoc);
            }
        }
        $document['path'] = $docName;

        $dpricDocument->update($document);
        return to_route('admin.dpric-documents.index')->with('message', 'Document added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DpricDocuments $dpricDocument)
    {
        $docPath = 'documents/dpric/documents/';
        $existingDoc = $docPath . $dpricDocument->path;
            if($dpricDocument->path && Storage::disk('public')->exists($existingDoc)) {
                Storage::disk('public')->delete($existingDoc);
            }

            $dpricDocument->delete();
            return to_route('admin.dpric-documents.index')->with('message', 'Document deleted successfully');
    }
}
