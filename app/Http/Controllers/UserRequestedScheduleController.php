<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class UserRequestedScheduleController extends Controller
{
    public function index()
    {
        $baptismalCount = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->count();
        $weddingCount = WeddingSchedules::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->count();
        $burialCount = BurialSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->count();
        $blessingCount = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->count();
        $confirmationCount = ConfirmationSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->count();
        return view('user.requested-schedules.index', compact('baptismalCount', 'weddingCount', 'burialCount', 'blessingCount', 'confirmationCount'));
    }
    /**
     * Display a listing of the resource.
     */
    public function baptism()
    {
        $baptismalRequestedSchedules = BaptismalSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.baptismal.index', compact('baptismalRequestedSchedules'));
    }
    public function cancelBaptism(Request $request) {
        BaptismalSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }
    public function blessing()
    {
        $blessingRequestedSchedules = BlessingSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.blessing.index', compact('blessingRequestedSchedules'));
    }
    public function cancelBlessing(Request $request) {
        BlessingSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }
    public function burial()
    {
        $burialRequestedSchedules = BurialSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.burial.index', compact('burialRequestedSchedules'));
    }
    public function cancelBurial(Request $request) {
        BurialSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }
    public function wedding()
    {
        $weddingRequestedSchedules = WeddingSchedules::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.wedding.index', compact('weddingRequestedSchedules'));
    }
    public function cancelWedding(Request $request) {
        WeddingSchedules::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }
    public function confirmation()
    {
        $confirmationRequestedSchedules = ConfirmationSchedule::where('approve', 0)->where('reject', 0)->where('cancel', 0)->where('user_id', auth()->user()->id)->latest()->paginate(8);
        return view('user.requested-schedules.confirmation.index', compact('confirmationRequestedSchedules'));
    }
    public function cancelConfirmation(Request $request) {
        ConfirmationSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 1,
        ]);

        return redirect()->back()->with('danger-message', 'Cancelled!');
    }


    public function baptismShow($id)
    {
        $baptismalRequestedScheduleInformation = BaptismalSchedule::findOrFail($id);
        return view('user.requested-schedules.baptismal.show', compact('baptismalRequestedScheduleInformation'));
    }

    public function weddingShow($id)
    {
        $weddingRequestedScheduleInformation = WeddingSchedules::findOrFail($id);
        return view('user.requested-schedules.wedding.show', compact('weddingRequestedScheduleInformation'));
    }

    public function burialShow($id)
    {
        $burialRequestedScheduleInformation = BurialSchedule::findOrFail($id);;
        return view('user.requested-schedules.burial.show', compact('burialRequestedScheduleInformation'));
    }

    public function blessingShow($id)
    {
        $blessingRequestedScheduleInformation = BlessingSchedule::findOrFail($id);
        return view('user.requested-schedules.blessing.show', compact('blessingRequestedScheduleInformation'));
    }

    public function confirmationShow($id)
    {
        $confirmationRequestedScheduleInformation = ConfirmationSchedule::findOrFail($id);
        return view('user.requested-schedules.confirmation.show', compact('confirmationRequestedScheduleInformation'));
    }
}
