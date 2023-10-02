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
    public function baptismShow($id)
    {
        $baptismalRequestedScheduleInformation = BaptismalSchedule::where('approve', 0)->where('reject', 0)->findOrFail($id);
        return view('superadministrator.requested-schedules.baptismal.show', compact('baptismalRequestedScheduleInformation'));
    }
    /**
     * Display a listing of the resource.
     */
    public function wedding()
    {
        $weddingRequestedSchedules = WeddingSchedules::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.wedding.index', compact('weddingRequestedSchedules'));
    }
    public function weddingShow($id)
    {
        $weddingRequestedScheduleInformation = WeddingSchedules::where('approve', 0)->where('reject', 0)->findOrFail($id);
        return view('superadministrator.requested-schedules.wedding.show', compact('weddingRequestedScheduleInformation'));
    }
    /**
     * Display a listing of the resource.
     */
    public function burial()
    {
        $burialRequestedSchedules = BurialSchedule::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.burial.index', compact('burialRequestedSchedules'));
    }
    public function burialShow($id)
    {
        $burialRequestedScheduleInformation = BurialSchedule::where('approve', 0)->where('reject', 0)->findOrFail($id);;
        return view('superadministrator.requested-schedules.burial.show', compact('burialRequestedScheduleInformation'));
    }
    /**
     * Display a listing of the resource.
     */
    public function blessing()
    {
        $blessingRequestedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-schedules.blessing.index', compact('blessingRequestedSchedules'));
    }
    public function blessingShow($id)
    {
        $blessingRequestedScheduleInformation = BlessingSchedule::where('approve', 0)->where('reject', 0)->findOrFail($id);
        return view('superadministrator.requested-schedules.blessing.show', compact('blessingRequestedScheduleInformation'));
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
