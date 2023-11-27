<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class UserApprovedSchedulesController extends Controller
{
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $weddingCount = WeddingSchedules::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $burialCount = BurialSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $blessingCount = BlessingSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        $confirmationCount = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->count();
        return view('user.approved-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount', 'confirmationCount'));
    }

    /**
     * Display a listing of the resource.
     */
    public function baptism(Request $request)
    {
        $search = $request->input('search');

        $query = BaptismalSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest();

        if ($search) {
            $query->where('childs_name', 'like', '%' . $search . '%');
        }

        $baptismalApprovedSchedules = $query->paginate(8);

        // $baptismalApprovedSchedules = BaptismalSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.approved-schedules.baptismal.index', compact('baptismalApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function wedding(Request $request)
    {
        $search = $request->input('search');

        $query = WeddingSchedules::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest();

        if ($search) {
            $query->where('brides_name', 'like', '%' . $search . '%');
        }

        $weddingApprovedSchedules = $query->paginate(8);

        // $weddingApprovedSchedules = WeddingSchedules::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.approved-schedules.wedding.index', compact('weddingApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function burial(Request $request)
    {
        $search = $request->input('search');

        $query = BurialSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest();

        if ($search) {
            $query->where('deceased_name', 'like', '%' . $search . '%');
        }

        $burialApprovedSchedules = $query->paginate(8);

        // $burialApprovedSchedules = BurialSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.approved-schedules.burial.index', compact('burialApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function blessing(Request $request)
    {
        $search = $request->input('search');

        $query = BlessingSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest();

        if ($search) {
            $query->where('blessing_for', 'like', '%' . $search . '%');
        }

        $blessingApprovedSchedules = $query->paginate(8);
        // $blessingApprovedSchedules = BlessingSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.approved-schedules.blessing.index', compact('blessingApprovedSchedules'));
    }

    /**
     * Display a listing of the resource.
     */
    public function confirmation(Request $request)
    {
        $search = $request->input('search');

        $query = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest();

        if ($search) {
            $query->where('confirmation_name', 'like', '%' . $search . '%');
        }

        $confirmationApprovedSchedules = $query->paginate(8);

        // $confirmationApprovedSchedules = ConfirmationSchedule::where('approve', 1)->where('reject', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.approved-schedules.confirmation.index', compact('confirmationApprovedSchedules'));
    }
/*
    public function cancelBlessing(Request $request) {
        BlessingSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }

    public function cancelBurial(Request $request) {
        BurialSchedule::where('id', $request->id)->update([
              'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }

    public function cancelConfirmation(Request $request) {
        ConfirmationSchedule::where('id', $request->id)->update([
              'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }

    public function cancelWedding(Request $request) {
        WeddingSchedules::where('id', $request->id)->update([
              'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }

    public function cancelBaptism(Request $request) {
        BaptismalSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    } */
}
