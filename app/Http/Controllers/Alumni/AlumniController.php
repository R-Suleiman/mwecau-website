<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        return view('alumni.index');
    }
}
