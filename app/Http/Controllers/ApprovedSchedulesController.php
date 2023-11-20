<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class ApprovedSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 1)->where('reject', 0)->count();
        $weddingCount = WeddingSchedules::where('approve', 1)->where('reject', 0)->count();
        $burialCount = BurialSchedule::where('approve', 1)->where('reject', 0)->count();
        $blessingCount = BlessingSchedule::where('approve', 1)->where('reject', 0)->count();
        $confirmationCount = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->count();
        return view('superadministrator.approved-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount', 'confirmationCount'));
    }

    /**
     * Display a listing of the resource.
     */
    public function baptism(Request $request)
    {
        $search = $request->input('search');

        $query = BaptismalSchedule::where('approve', 1)->where('reject', 0)->latest();

        if ($search) {
            $query->where('childs_name', 'like', '%' . $search . '%');
        }

        $baptismalApprovedSchedules = $query->paginate(8);

        // $baptismalApprovedSchedules = BaptismalSchedule::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.baptismal.index', compact('baptismalApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function wedding(Request $request)
    {
        $search = $request->input('search');

        $query = WeddingSchedules::where('approve', 1)->where('reject', 0)->latest();

        if ($search) {
            $query->where('brides_name', 'like', '%' . $search . '%');
        }

        $weddingApprovedSchedules = $query->paginate(8);

        // $weddingApprovedSchedules = WeddingSchedules::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.wedding.index', compact('weddingApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function burial(Request $request)
    {
        $search = $request->input('search');

        $query = BurialSchedule::where('approve', 1)->where('reject', 0)->latest();

        if ($search) {
            $query->where('deceased_name', 'like', '%' . $search . '%');
        }

        $burialApprovedSchedules = $query->paginate(8);

        // $burialApprovedSchedules = BurialSchedule::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.burial.index', compact('burialApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function blessing(Request $request)
    {
        $search = $request->input('search');

        $query = BlessingSchedule::where('approve', 1)->where('reject', 0)->latest();

        if ($search) {
            $query->where('blessing_for', 'like', '%' . $search . '%');
        }

        $blessingApprovedSchedules = $query->paginate(8);
        // $blessingApprovedSchedules = BlessingSchedule::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.blessing.index', compact('blessingApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function confirmation(Request $request)
    {
        $search = $request->input('search');

        $query = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->latest();

        if ($search) {
            $query->where('confirmation_name', 'like', '%' . $search . '%');
        }

        $confirmationApprovedSchedules = $query->paginate(8);

        // $confirmationApprovedSchedules = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-schedules.confirmation.index', compact('confirmationApprovedSchedules'));
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
