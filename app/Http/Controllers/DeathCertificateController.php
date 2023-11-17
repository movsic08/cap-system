<?php

namespace App\Http\Controllers;

use App\Models\DeathCertificate;
use Illuminate\Http\Request;

class DeathCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.request-certificate.death-certificate.index');
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
            'deceased_age' => 'required|string|max:255',
            'deceased_address' => 'required|string|max:255',
            'cause_of_death' => 'required|string|max:255',
            'interment_date' => 'required|string|max:255',
            'date_of_death' => 'nullable',
            'interment_location' => 'required|string|max:255',
        ]);

        DeathCertificate::create($formFields);

        return redirect()->back()->with('modal-certificate-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeathCertificate $deathCertificate)
    {
        //
    }
}
