<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
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

       $request->validate([
            'mass_id' => 'required',
            'first_collection' => 'nullable',
            'second_collection' => 'nullable',
            'special_collection' =>'nullable',
        ]);

        $data = Collection::updateOrCreate(['mass_id' => $request->mass_id]);
        $data->mass_id = $request->mass_id;
        $data->first_collection = $request->first_collection;
        $data->second_collection = $request->second_collection;
        $data->special_collection = $request->special_collection;
        $data->save();


     /*    $validated = $request->validate([
            'mass_id' => 'required',
            'first_collection' => 'nullable',
            'second_collection' => 'nullable',
            'special_collection' =>'nullable',
        ]);

         Collection::create($validated); */

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
