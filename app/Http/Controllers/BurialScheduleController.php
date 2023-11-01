<?php

namespace App\Http\Controllers;

use App\Mail\ApproveScheduleEmail;
use App\Mail\RejectScheduleEmail;
use App\Mail\RestoreScheduleEmail;
use App\Models\BurialSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApproveScheduleEmail($data));

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

         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data));


         return redirect()->back()->with('danger-message', 'Rejected!');
     }

     /**
      * Restore application
      */

      public function restore(Request $request)
      {
         BurialSchedule::where('id', $request->id)->update([
              'approve' => 0,
              'reject' => 0,
          ]);

          $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RestoreScheduleEmail($data));


          return redirect()->back()->with('success-message', 'Restored!');
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
        ]);

         BurialSchedule::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'deceased_name' => $request->input('deceased_name'),
            'family_name' => $request->input('family_name'),
            'desired_start_date_time' => $request->input('desired_start_date_time'),
            'desired_end_date_time' => $request->input('desired_end_date_time'),
            'contact_number' => $request->input('contact_number'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
            'deceased_age' => $request->input('deceased_age'),
            'deceased_status' => $request->input('deceased_status'),
            'cause_of_death' => $request->input('cause_of_death'),
            'date_of_death' => $request->input('date_of_death'),
            'cemetery' => $request->input('cemetery'),
         ]);

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
