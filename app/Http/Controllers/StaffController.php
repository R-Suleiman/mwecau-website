<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function administrativeUnit()
    {
        return view('faculties.administrative-unit');
    }

    //return list of all staffs
    public function administrativeStaff()
    {
        return view('staff.mwecau-administrative-staff');
    }

    public function academicStaff()
    {
        return view('staff.mwecau-academic-staff');
    }

    // returning staff profile
    public function staffProfile($first_name, $last_name){

        return view('staff.mwecau-staff-profile', compact('first_name', 'last_name'));
    }

}
