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
            'banns1' => 'nullable|string|max:255',
            'banns2' => 'nullable|string|max:255',
            'banns3' => 'nullable|string|max:255',
            'date_of_interrogation' => 'nullable|string|max:255',
            'interrogation_by' => 'nullable|string|max:255',
            'pre_nuptial_counseling' => 'nullable|string|max:255',
            'nuptial_counseling_at' => 'nullable|string|max:255',
            'nuptial_counseling_by' => 'nullable|string|max:255',
            'confession_on' => 'nullable|string|max:255',
            'confession_at' => 'nullable|string|max:255',
            'confession_by' => 'nullable|string|max:255',
            'rite_to_be_conducted_in' => 'nullable|string|max:255',
            'grooms_baptismal_certificate' => 'nullable|string|max:255',
            'brides_baptismal_certificate' => 'nullable|string|max:255',
            'grooms_confirmation_certificate' => 'nullable|string|max:255',
            'brides_confirmation_certificate' => 'nullable|string|max:255',
            'offering_mariage_fee' => 'nullable|string|max:255',
            'offering_sponsors_fee' => 'nullable|string|max:255',
            'offering_banns' => 'nullable|string|max:255',
            'offering_dispensation' => 'nullable|string|max:255',
            'offering_baptism' => 'nullable|string|max:255',
            'offering_confirmation' => 'nullable|string|max:255',
            'offering_choir' => 'nullable|string|max:255',
            'offering_lights' => 'nullable|string|max:255',
            'offering_video_coverage' => 'nullable|string|max:255',
            'offering_etc' => 'nullable|string|max:255',
            'dispense' => 'nullable|string|max:255',
        ]);

         WeddingSchedules::create([
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'brides_name' => $request->input('brides_name'),
            'grooms_name' => $request->input('grooms_name'),
            'desired_start_date_time' => $request->input('desired_start_date_time'),
            'desired_end_date_time' => $request->input('desired_end_date_time'),
            'contact_number' => $request->input('contact_number'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
            'banns1' => $request->input('banns1'),
            'banns2' => $request->input('banns2'),
            'banns3' => $request->input('banns3'),
            'date_of_interrogation' => $request->input('date_of_interrogation'),
            'interrogation_by' => $request->input('interrogation_by'),
            'pre_nuptial_counseling' => $request->input('pre_nuptial_counseling'),
            'nuptial_counseling_at' => $request->input('nuptial_counseling_at'),
            'nuptial_counseling_by' => $request->input('nuptial_counseling_by'),
            'confession_on' => $request->input('confession_on'),
            'confession_at' => $request->input('confession_at'),
            'confession_by' => $request->input('confession_by'),
            'rite_to_be_conducted_in' => $request->input('rite_to_be_conducted_in'),
            'grooms_baptismal_certificate' =>  $request->grooms_baptismal_certificate === 'on',
            'brides_baptismal_certificate' => $request->brides_baptismal_certificate === 'on',
            'grooms_confirmation_certificate' => $request->grooms_confirmation_certificate === 'on',
            'brides_confirmation_certificate' => $request->brides_confirmation_certificate === 'on',
            'offering_mariage_fee' => $request->input('offering_mariage_fee'),
            'offering_sponsors_fee' => $request->input('offering_sponsors_fee'),
            'offering_banns' => $request->input('offering_banns'),
            'offering_dispensation' => $request->input('offering_dispensation'),
            'offering_baptism' => $request->input('offering_baptism'),
            'offering_confirmation' => $request->input('offering_confirmation'),
            'offering_choir' => $request->input('offering_choir'),
            'offering_lights' => $request->input('offering_lights'),
            'offering_video_coverage' => $request->input('offering_video_coverage'),
            'offering_etc' => $request->input('offering_etc'),
            'dispense' => $request->input('dispense'),
         ]);

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
