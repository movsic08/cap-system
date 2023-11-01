<?php

namespace App\Http\Controllers;

use App\Mail\ApproveScheduleEmail;
use App\Mail\BaptismalApproveScheduleEmail;
use App\Mail\RejectScheduleEmail;
use App\Mail\RestoreScheduleEmail;
use App\Models\BaptismalSchedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BaptismalScheduleController extends Controller
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
     * Approve application
     */

     public function approve(Request $request)
     {
         BaptismalSchedule::where('id', $request->id)->update([
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
        BaptismalSchedule::where('id', $request->id)->update([
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
        BaptismalSchedule::where('id', $request->id)->update([
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'childs_name' =>  'required|string|max:255',
            'desired_start_date_time' => 'required|string|before_or_equal:desired_end_date_time|unique:baptismal_schedules|max:255',
            'desired_end_date_time' => 'required|string|after_or_equal:desired_start_date_time|unique:baptismal_schedules|max:255',
            'mothers_name' => 'required|string|max:255',
            'mothers_contact_number' => 'required|string|max:255',
            'childs_birthplace' => 'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'fathers_contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
            'childs_birthdate' => 'required|string|max:255',
            'godfather' => 'nullable|string|max:255',
            'godmother' => 'nullable|string|max:255',
            'parish_priest' => 'nullable|string|max:255',
            'sponsors' => 'nullable|max:255',
        ]);

         BaptismalSchedule::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'childs_name' => $request->input('childs_name'),
            'desired_start_date_time' => $request->input('desired_start_date_time'),
            'desired_end_date_time' => $request->input('desired_end_date_time'),
            'mothers_name' => $request->input('mothers_name'),
            'mothers_contact_number' => $request->input('mothers_contact_number'),
            'fathers_name' => $request->input('fathers_name'),
            'fathers_contact_number' => $request->input('fathers_contact_number'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
            'childs_birthdate' => $request->input('childs_birthdate'),
            'childs_birthplace' => $request->input('childs_birthplace'),
            'godfather' => $request->input('godfather'),
            'godmother' => $request->input('godmother'),
            'parish_priest' => $request->input('parish_priest'),
            'sponsors' => $request->input('sponsors'),
         ]);

        return redirect()->back()->with('modal-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BaptismalSchedule $baptismalSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BaptismalSchedule $baptismalSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BaptismalSchedule $baptismalSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BaptismalSchedule $baptismalSchedule)
    {
        //
    }
}
