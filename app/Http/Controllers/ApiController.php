<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function UniversityStructure()
    {
        // Make the API request
        $response = Http::get('https://ums.mwecau.ac.tz/Api/get_university_structure');
        if ($response->successful()) {
            $uniStructure = $response->json();
            return response()->json($uniStructure);
        } else {
            return redirect()->back();
        }
    }
}
