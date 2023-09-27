<?php

namespace App\Http\Controllers;

use App\Models\BurialSchedule;
use Illuminate\Http\Request;

class BurialScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Approve application
     */

     public function approve(Request $request)
     {
         BurialSchedule::where('id', $request->id)->update([
             'approve' => 1,
         ]);

         return redirect()->back()->with('success-message', 'Approved!');
     }

     /**
      * Reject application
      */

     public function reject(Request $request)
     {
        BurialSchedule::where('id', $request->id)->update([
             'reject' => 1,
         ]);

         return redirect()->back()->with('danger-message', 'Rejected!');
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'deceased_name' =>  'required|string|max:255',
            'family_name' =>  'required|string|max:255',
            'desired_start_date_time' => 'required|string|before_or_equal:desired_end_date_time|unique:baptismal_schedules|max:255',
            'desired_end_date_time' => 'required|string|after_or_equal:desired_start_date_time|unique:baptismal_schedules|max:255',
            'contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',


            'deceased_age' =>  'required|string',
            'deceased_status' =>  'required|string|max:255',
            'cause_of_death' => 'string|max:255',
            'date_of_death' => 'string|max:255',
            'cemetery' => 'string|max:255',
            'minister' => 'string|max:255',
            'non_ut' => 'string|max:255',
            'certificate_of_death' => 'nullable',
            'cemetery_lease_contract' => 'nullable',
            'burial_permit' => 'nullable',
            'offering_ordinary' => 'nullable',
            'offering_with_mass' => 'nullable',
            'offering_candles' => 'nullable',
            'offering_lights' => 'nullable',
            'offering_video_coverage' => 'nullable',
            'offering_choir' => 'nullable',
            'offering_cemetery_lot' => 'nullable',
            'offering_etc' => 'nullable',
        ]);

         BurialSchedule::create($formFields);

         return redirect()->back()->with('modal-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BurialSchedule $burialSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BurialSchedule $burialSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BurialSchedule $burialSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BurialSchedule $burialSchedule)
    {
        //
    }
}
