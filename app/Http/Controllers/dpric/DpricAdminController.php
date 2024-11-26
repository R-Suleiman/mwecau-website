<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DpricAdminController extends Controller
{
    public function index() {
        return view('dpric.admin.index');
    }

    public function news() {
        return view('dpric.admin.news');
    }

    public function addNews() {
        return view('dpric.admin.add-news');
    }

    public function editNews() {
        return view('dpric.admin.edit-news');
    }

    public function viewNews() {
        return view('dpric.admin.view-news');
    }

}
