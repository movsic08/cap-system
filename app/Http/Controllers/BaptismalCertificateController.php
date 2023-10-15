<?php

namespace App\Http\Controllers;

use App\Models\BaptismalCertificate;
use Illuminate\Http\Request;

class BaptismalCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.request-certificate.baptismal-certificate.index');
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
            'mothers_name' => 'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'childs_birthdate' => 'required|string|max:255',
            'baptism_date' => 'required|string|max:255',
            'baptized_by' => 'required|string|max:255',
            'sponsors' => 'nullable|max:255',
        ]);

        BaptismalCertificate::create($formFields);

        return redirect()->back()->with('modal-certificate-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BaptismalCertificate $baptismalCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BaptismalCertificate $baptismalCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BaptismalCertificate $baptismalCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BaptismalCertificate $baptismalCertificate)
    {
        //
    }
}
