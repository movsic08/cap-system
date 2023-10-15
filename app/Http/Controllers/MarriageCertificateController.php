<?php

namespace App\Http\Controllers;

use App\Models\MarriageCertificate;
use Illuminate\Http\Request;

class MarriageCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.request-certificate.marriage-certificate.index');
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
            'grooms_name' =>  'required|string|max:255',
            'brides_name' => 'required|string|max:255',
            'brides_father' => 'required|string|max:255',
            'brides_mother' => 'required|string|max:255',
            'grooms_father' => 'required|string|max:255',
            'grooms_mother' => 'required|string|max:255',
            'grooms_age' => 'required|string|max:255',
            'brides_age' => 'required|string|max:255',
            'marriage_date' => 'required|string|max:255',
            'officiated_by' => 'required|string|max:255',
            'sponsors' => 'nullable|max:255',
        ]);

        MarriageCertificate::create($formFields);

        return redirect()->back()->with('modal-certificate-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MarriageCertificate $marriageCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarriageCertificate $marriageCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarriageCertificate $marriageCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriageCertificate $marriageCertificate)
    {
        //
    }
}
