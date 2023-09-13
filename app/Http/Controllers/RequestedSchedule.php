<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\Donation;
use App\Models\User;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestedSchedule extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 0)->where('reject', 0)->count();
        $weddingCount = WeddingSchedules::where('approve', 0)->where('reject', 0)->count();
        $burialCount = BurialSchedule::where('approve', 0)->where('reject', 0)->count();
        $blessingCount = BlessingSchedule::where('approve', 0)->where('reject', 0)->count();
        return view('superadministrator.requested-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount'));
    }
    /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalRequestedSchedules = BaptismalSchedule::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.baptismal.index', compact('baptismalRequestedSchedules'));
    }
    /**
     * Display a listing of the resource.
     */
    public function wedding()
    {
        $weddingRequestedSchedules = WeddingSchedules::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.wedding.index', compact('weddingRequestedSchedules'));
    }
    /**
     * Display a listing of the resource.
     */
    public function burial()
    {
        $burialRequestedSchedules = BurialSchedule::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.burial.index', compact('burialRequestedSchedules'));
    }
    /**
     * Display a listing of the resource.
     */
    public function blessing()
    {
        $blessingRequestedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.blessing.index', compact('blessingRequestedSchedules'));
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
