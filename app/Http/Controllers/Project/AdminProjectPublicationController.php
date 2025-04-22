<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectPublication;
use Illuminate\Http\Request;

class AdminProjectPublicationController extends Controller
{
    public function index()
    {
        $publications = ProjectPublication::all();
        return view('project.admin.publications.index', compact('publications'));
    }
    public function create()
    {
        return view('project.admin.publications.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'author' => ['required'],
            'about_publication' => ['nullable'],
            'year' => ['required'],
            'document1' => ['nullable'],
            'link' => ['nullable'],
        ]);

        $newPublication = new ProjectPublication();

        // document1 processing
        if ($request->hasFile('document1')) {
            $document1 = $request->file('document1');
            $document1OriginalFileName = pathinfo($document1->getClientOriginalName(), PATHINFO_FILENAME); //document original filename
            $document1FileExtension = $document1->getClientOriginalExtension(); //document1 FIlename extension
            $random_numbers = substr(uniqid(), 0, 4);
            $document1FileName = $document1OriginalFileName . '-' . $random_numbers . '.' . $document1FileExtension;
            $storagePath = 'documents/projects/projectDocuments/project-publication-docs'; //document storage path
            $document1->move(public_path($storagePath . $document1FileName));
            $newPublication->document1 = $document1FileName;
        }

        $newPublication->title = $request->title;
        $newPublication->author = $request->author;
        $newPublication->about_publication = $request->about_publication;
        $newPublication->year = $request->year;
        $newPublication->link = $request->link;

        if ($newPublication->save()) {
            return redirect()->back()->with('success', 'Publication has been posted successfully');
        } else {
            return redirect()->back()->with('fail', 'Failed to posted new project publication');
        }
    }
    public function edit($title)
    {
        $publication = ProjectPublication::where('title', $title)->firstOrFail();
        return view('project.admin.publications.edit', compact('publication'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => ['required'],
            'author' => ['required'],
            'about_publication' => ['nullable'],
            'year' => ['required'],
            'link' => ['nullable'],
        ]);

        $publication = ProjectPublication::findOrFail($id);

        $publication->title = $request->title;
        $publication->author = $request->author;
        $publication->about_publication = $request->about_publication;
        $publication->year = $request->year;
        $publication->link = $request->link;

        if ($publication->update()) {
            return redirect()-> route('admin.project.publication.edit', $publication->title)->with('success', "{$publication->title} has been Updated Successfully");
        } else {
            return redirect()->back()->with('fail', "Something went wrong failed to update {$publication->title}");
        }

    }
    public function destroy($id)
    {
        $publication = ProjectPublication::findOrFail($id);
        $publication->delete();
        return redirect()->back()->with('success', 'Selected project publication has been deleted successfully');
    }
}
