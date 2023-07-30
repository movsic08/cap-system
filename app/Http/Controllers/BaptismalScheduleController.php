<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\User;
use Illuminate\Http\Request;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'childs_name' =>  'required|string|max:255',
            'desired_date' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'mothers_contact_number' => 'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'fathers_contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
        ]);

         BaptismalSchedule::create($formFields);

        return redirect()->back();
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
