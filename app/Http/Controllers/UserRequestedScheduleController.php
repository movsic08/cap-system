<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class UserRequestedScheduleController extends Controller
{
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $weddingCount = WeddingSchedules::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $burialCount = BurialSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $blessingCount = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        return view('user.requested-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount'));
    }
    /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalRequestedSchedules = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.baptismal.index', compact('baptismalRequestedSchedules'));
    }
    public function blessing()
    {
        $blessingRequestedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.blessing.index', compact('blessingRequestedSchedules'));
    }
    public function burial()
    {
        $burialRequestedSchedules = BurialSchedule::where('approve', 0)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.burial.index', compact('burialRequestedSchedules'));
    }

}
