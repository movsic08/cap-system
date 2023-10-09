<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::latest()->paginate(6);
        $donation_total = Donation::sum('amount');
        return view('superadministrator.donations.index', compact('donations', 'donation_total'));
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
            'donor_name' => 'required|string|max:255',
            'donation_date' => 'required|string|max:255',
            'address' => 'string|max:255',
            'contact_number' => 'string|max:255',
            'amount' =>'required|string|max:255',
        ]);

         Donation::create($formFields);

        return redirect(route('donations.index'))->with('Donation added successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
