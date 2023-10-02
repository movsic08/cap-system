<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class RejectedSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 0)->where('reject', 1)->count();
        $weddingCount = WeddingSchedules::where('approve', 0)->where('reject', 1)->count();
        $burialCount = BurialSchedule::where('approve', 0)->where('reject', 1)->count();
        $blessingCount = BlessingSchedule::where('approve', 0)->where('reject', 1)->count();
        return view('superadministrator.rejected-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount'));
    }
        /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalRejectedSchedules = BaptismalSchedule::where('approve', 0)->where('reject', 1)->latest()->paginate(8);
        return view('superadministrator.rejected-schedules.baptismal.index', compact('baptismalRejectedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function wedding()
    {
        $weddingRejectedSchedules = WeddingSchedules::where('approve', 0)->where('reject', 1)->latest()->paginate(8);
        return view('superadministrator.rejected-schedules.wedding.index', compact('weddingRejectedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function burial()
    {
        $burialRejectedSchedules = BurialSchedule::where('approve', 0)->where('reject', 1)->latest()->paginate(8);
        return view('superadministrator.rejected-schedules.burial.index', compact('burialRejectedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function blessing()
    {
        $blessingRejectedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 1)->latest()->paginate(8);
        return view('superadministrator.rejected-schedules.blessing.index', compact('blessingRejectedSchedules'));
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
