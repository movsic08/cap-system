<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::with('members')->latest()->get();
        return view('superadministrator.organizations.index', compact('organizations'));
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
        $validated = $request->validate([
            'organization_name' => 'required|string|max:255',
            'organization_details' => 'string',
        ]);

        Organization::create($validated);

        return redirect(route('organizations.index'))->with('success-message', 'Organization Created Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return view('superadministrator.organizations.show',[
                'organization' =>Organization::with('members')->findOrFail($organization->id)
                ]
            );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
