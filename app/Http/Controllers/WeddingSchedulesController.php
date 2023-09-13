<?php

namespace App\Http\Controllers;

use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class WeddingSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function approve(Request $request)
    {
        WeddingSchedules::where('id', $request->id)->update([
            'approve' => 1,
        ]);

        return redirect()->back()->with('success-message', 'Approved!');
    }

    /**
     * Reject application
     */

    public function reject(Request $request)
    {
       WeddingSchedules::where('id', $request->id)->update([
            'reject' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Rejected!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'brides_name' =>  'required|string|max:255',
            'grooms_name' =>  'required|string|max:255',
            'desired_start_date_time' => 'required|string|before_or_equal:desired_end_date_time|unique:baptismal_schedules|max:255',
            'desired_end_date_time' => 'required|string|after_or_equal:desired_start_date_time|unique:baptismal_schedules|max:255',
            'contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
        ]);

         WeddingSchedules::create($formFields);

         return redirect()->back()->with('modal-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeddingSchedules $weddingSchedules)
    {
        //
    }
}
