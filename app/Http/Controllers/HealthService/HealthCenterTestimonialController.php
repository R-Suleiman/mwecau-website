<?php

namespace App\Http\Controllers\HealthService;

use App\Http\Controllers\Controller;
use App\Models\HealthCenterTestimonial;
use Illuminate\Http\Request;

class HealthCenterTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function testimonials()
    {
        $testimonials = HealthCenterTestimonial::all();
        return view('health-center.admin.testimonials.health-center-testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTestimonial()
    {
        return view('health-center.admin.testimonials.health-center-create-testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'testifier_name' => ['nullable'],
            'testimonial_description' => ['nullable'],
        ]);

        $newNewsEvent = new HealthCenterTestimonial();

        $newNewsEvent->testifier_name = $request->testifier_name;
        $newNewsEvent->testimonial_description = $request->testimonial_description;

        if ($newNewsEvent->save()) {
            return redirect()->route('health-center.testimonials')->with('success', 'Successfully Posted');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, Please try again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editTestimonial(string $id)
    {
        $testimonial = HealthCenterTestimonial::findOrFail($id);
        return view('health-center.admin.testimonials.health-center-edit-testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTestimonial(Request $request, string $id)
    {

        $request->validate([
            'testifier_name' => ['nullable'],
            'testimonial_description' => ['required'],
        ]);

        $testimonial = HealthCenterTestimonial::findOrFail($id);

        $testimonial->testifier_name = $request->testifier_name;
        $testimonial->testimonial_description = $request->testimonial_description;

        if ($testimonial->update()) {
            return redirect()->route('health-center.testimonials')->with('success', 'Successfully Updated');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyTestimonial(string $id)
    {
        $testimonial = HealthCenterTestimonial::findOrFail($id);

        $testimonial->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');

    }
}
