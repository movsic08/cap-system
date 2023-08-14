<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Mass;
use Illuminate\Http\Request;

class MassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masses = Mass::latest()->get();
        return view('superadministrator.offertory.index', compact('masses'));
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
            'mass' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'details' =>'nullable',
        ]);

         Mass::create($formFields);

        return redirect(route('offertory.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mass $offertory)
    {
        $collection = Collection::where('mass_id', $offertory->id)->first();
        $mass = Mass::with('collections')->findOrFail($offertory->id);
        return view('superadministrator.offertory.collection', compact('mass', 'collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mass $mass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mass $mass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mass $mass)
    {
        //
    }
}
