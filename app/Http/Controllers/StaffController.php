<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //return list of all staffs
    public function staff()
    {
        $staffs = staff::paginate(10);
        return view('mwecau-staffs', compact('staffs'));
    }
    // returning staff profile
    public function staffProfile($first_name, $last_name){

        return view('mwecau-staff-profile', compact('first_name', 'last_name'));
    }

}
