<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

    public function staffPhoto(Request $request) {
        $id = $request->input('id');
        $staffPhoto = null;
        $response = Http::post('https://ums.mwecau.ac.tz/Api/user_photo', [
            "person_id" => $id,
    ]);

        if ($response->successful()) {
            $staffPhoto = $response->json();
        } else {
            Log::error('Failed to fetch photo from API: ' . $response->status());
            $staffPhoto = null;
        }

        return response($staffPhoto);
    }
}
