<?php

namespace App\Http\Controllers\Libray;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibraryRequest;
use App\Http\Requests\UpdateLibraryRequest;
use App\Models\Image;
use App\Models\Library;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraryResources = Library::all();
        $libraryServices = Library::where('category_name', 'services')->first();
        $libraryIntroduction = Library::where('category_name', 'welcome')->first();
        $library = Library::where('category_name', 'objective')->first();
        $ictBanner = Image::where('image_section', '=', 'ict-banner')->first();
        return view('library', compact('ictBanner', 'library', 'libraryResources', 'libraryIntroduction', 'libraryServices'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibraryRequest $request)
    {
        $libray = Library::create($request->validated());
        return redirect()->route('admin.library.index')->with('message', 'Successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Library $libray)
    {
        $libraryResources = Library::all();
        $libraryServices = Library::where('category_name', 'services')->first();
        $libraryIntroduction = Library::where('category_name', 'welcome')->first();
        return view('admin.library.index', compact('libraryResources', 'libraryServices', 'libraryIntroduction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the library resource by name
        $library = Library::findOrFail($id)->firstOrFail();
        return view('admin.library.edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibraryRequest $request, $id)
    {
        // Find the library instance by ID
        $library = Library::findOrFail($id);
        $validatedData = $request->validated();
        $library->update($validatedData);

        return redirect()->route('admin.library.index')->with('message', 'Item successfully updated');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroyResource = Library::findOrFail($id);
        $destroyResource->delete();

        if ($destroyResource) {
            return redirect()->back()->with('message', 'Successfully removed');
        } else
            return redirect()->back()->with('fail', 'Something went Wrong, Operation Failed');

    }
}
