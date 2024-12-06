<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use App\Models\DpricContent;
use Illuminate\Http\Request;

class DpricContentController extends Controller
{
 public function getPages() {
    $pages = DpricContent::select('page')->distinct()->pluck('page');

    return view('dpric.admin.contents.index', ['pages' => $pages]);
 }

 public function getPage($page_name) {
    $pageContents = DpricContent::where('page', $page_name)->get();

    return view('dpric.admin.contents.page-content', ['pageContents'=> $pageContents, 'page_name' => $page_name]);
 }

 public function getContent($page_name, $content_title) {
    $pageSingleContent = DpricContent::where('page', $page_name)->where('title', $content_title)->first();

    return view('dpric.admin.contents.page-single-content', ['pageSingleContent' => $pageSingleContent, 'page_name' => $page_name, 'content_title' => $content_title]);
 }

 public function editContent($page_name, $content_title) {
    $content = DpricContent::where('page', $page_name)->where('title', $content_title)->first();

    return view('dpric.admin.contents.edit-content', ['page_name' => $page_name, 'content_title' => $content->title, 'content' => $content]);
 }

 public function updateContent(Request $request, $page_name, $content_title) {
    $newContent = $request->validate([
        'page' => 'required',
        'section' => 'required',
        'title'=> 'required',
        'description' => 'required'
    ]);

    $content = DpricContent::where('page', $page_name)->where('title', $content_title)->first();

     $content->update($newContent);

    return to_route('admin.contents.get-content', ['pageSingleContent'=> $content,'page_name' => $page_name, 'content_title' => $content->title])->with('message', 'Content Updated Successfully');

    // return redirect()->back()->with('message', 'Content Updated Successfully');
 }

}
