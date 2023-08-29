<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use Illuminate\Http\Request;

class ApprovedSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 1)->where('reject', 0)->count();
        return view('superadministrator.approved-schedules.index', compact('baptismalCount'));
    }

    /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalApprovedSchedules = BaptismalSchedule::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.baptismal.index', compact('baptismalApprovedSchedules'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
