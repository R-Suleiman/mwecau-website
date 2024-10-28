<?php

namespace App\Http\Controllers\dpric;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DpricController extends Controller
{
    public function index() {
        return view('dpric.index');
    }
}
