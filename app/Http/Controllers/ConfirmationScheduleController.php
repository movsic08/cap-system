<?php

namespace App\Http\Controllers;

use App\Models\ConfirmationSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationScheduleController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'desired_start_date_time' => 'required|string|before_or_equal:desired_end_date_time|unique:baptismal_schedules|max:255',
            'desired_end_date_time' => 'required|string|after_or_equal:desired_start_date_time|unique:baptismal_schedules|max:255',
            'confirmation_name' => 'required|string|max:255',
            'confirmation_date' => 'required|string|max:255',
            'date_of_baptism' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
            'residence_of_parents' => 'nullable|string|max:255',
            'sponsors' => 'nullable|max:255',
        ]);

         ConfirmationSchedule::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'desired_start_date_time' => $request->input('desired_start_date_time'),
            'desired_end_date_time' => $request->input('desired_end_date_time'),
            'confirmation_name' =>  $request->input('confirmation_name'),
            'confirmation_date' =>  $request->input('confirmation_date'),
            'date_of_baptism' =>  $request->input('date_of_baptism'),
            'contact_number' =>  $request->input('contact_number'),
            'mother_name' =>  $request->input('mother_name'),
            'father_name' =>  $request->input('father_name'),
            'message' =>  $request->input('message'),
            'residence_of_parents' =>  $request->input('residence_of_parents'),
            'sponsors' =>  $request->input('sponsors'),
         ]);

        return redirect()->back()->with('modal-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ConfirmationSchedule $confirmationSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConfirmationSchedule $confirmationSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConfirmationSchedule $confirmationSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConfirmationSchedule $confirmationSchedule)
    {
        //
    }
}
