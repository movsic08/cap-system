<?php

namespace App\Http\Controllers;

use App\Models\ConfirmationCertificate;
use Illuminate\Http\Request;

class ConfirmationCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.request-certificate.confirmation-certificate.index');
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
            'confirmation_name' =>  'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'confirmation_date' => 'required|string|max:255',
            'sponsors' => 'required|string|max:255',
        ]);

        ConfirmationCertificate::create($formFields);

        return redirect()->back()->with('modal-certificate-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ConfirmationCertificate $confirmationCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConfirmationCertificate $confirmationCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConfirmationCertificate $confirmationCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConfirmationCertificate $confirmationCertificate)
    {
        //
    }
}
