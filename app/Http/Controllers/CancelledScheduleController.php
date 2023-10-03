<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class CancelledScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->count();
        $weddingCount = WeddingSchedules::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->count();
        $burialCount = BurialSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->count();
        $blessingCount = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->count();
        return view('user.cancelled-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount'));
    }
    /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalRequestedSchedules = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.cancelled-schedules.baptismal.index', compact('baptismalRequestedSchedules'));
    }
    public function blessing()
    {
        $blessingRequestedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.cancelled-schedules.blessing.index', compact('blessingRequestedSchedules'));
    }
    public function burial()
    {
        $burialRequestedSchedules = BurialSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.cancelled-schedules.burial.index', compact('burialRequestedSchedules'));
    }
    public function wedding()
    {
        $weddingRequestedSchedules = WeddingSchedules::where('approve', 0)->where('reject', 0)->where('cancel', 1)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.cancelled-schedules.wedding.index', compact('weddingRequestedSchedules'));
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
