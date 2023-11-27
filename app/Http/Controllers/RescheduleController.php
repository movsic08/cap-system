<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RescheduleController extends Controller
{
    public function rescheduleWedding(Request $request) {
        $request->validate([
            'desired_date' => [
                'required',
                'date',
                'after:' . Carbon::now()->toDateString(),
                'unique:wedding_schedules,desired_date,' . $request->id,
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the desired_date is not the same as the current value in the table
                    $existingDate = WeddingSchedules::where('id', $request->id)->value('desired_date');
                    if ($existingDate && $existingDate == $value) {
                        $fail('The desired date cannot be the same as the current date.');
                    }
                }
            ],
        ]);

        WeddingSchedules::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 0,
            'desired_date' => $request->desired_date,
        ]);

        return redirect()->back()->with('success-message', 'Rescheduled!');
    }



    public function rescheduleBaptism(Request $request) {
        $request->validate([
            'desired_date' => [
                'required',
                'date',
                'after:' . Carbon::now()->toDateString(),
                'unique:baptismal_schedules,desired_date,' . $request->id,
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the desired_date is not the same as the current value in the table
                    $existingDate = BaptismalSchedule::where('id', $request->id)->value('desired_date');
                    if ($existingDate && $existingDate == $value) {
                        $fail('The desired date cannot be the same as the current date.');
                    }
                }
            ],
        ]);


        BaptismalSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 0,
            'desired_date' => $request->desired_date,
        ]);

        return redirect()->back()->with('success-message', 'Rescheduled!');
    }

    public function rescheduleBurial(Request $request) {
        $request->validate([
            'desired_date' => [
                'required',
                'date',
                'after:' . Carbon::now()->toDateString(),
                'unique:burial_schedules,desired_date,' . $request->id,
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the desired_date is not the same as the current value in the table
                    $existingDate = BurialSchedule::where('id', $request->id)->value('desired_date');
                    if ($existingDate && $existingDate == $value) {
                        $fail('The desired date cannot be the same as the current date.');
                    }
                }
            ],
        ]);


        BurialSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 0,
            'desired_date' => $request->desired_date,
        ]);

        return redirect()->back()->with('success-message', 'Rescheduled!');
    }

    public function rescheduleBlessing(Request $request) {
        $request->validate([
            'desired_date' => [
                'required',
                'date',
                'after:' . Carbon::now()->toDateString(),
                'unique:blessing_schedules,desired_date,' . $request->id,
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the desired_date is not the same as the current value in the table
                    $existingDate = BlessingSchedule::where('id', $request->id)->value('desired_date');
                    if ($existingDate && $existingDate == $value) {
                        $fail('The desired date cannot be the same as the current date.');
                    }
                }
            ],
        ]);

        BlessingSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 0,
            'desired_date' => $request->desired_date,
        ]);

        return redirect()->back()->with('success-message', 'Rescheduled!');
    }

    public function rescheduleConfirmation(Request $request) {
        $request->validate([
            'desired_date' => [
                'required',
                'date',
                'after:' . Carbon::now()->toDateString(),
                'unique:confirmation_schedules,desired_date,' . $request->id,
                function ($attribute, $value, $fail) use ($request) {
                    // Check if the desired_date is not the same as the current value in the table
                    $existingDate = ConfirmationSchedule::where('id', $request->id)->value('desired_date');
                    if ($existingDate && $existingDate == $value) {
                        $fail('The desired date cannot be the same as the current date.');
                    }
                }
            ],
        ]);

        ConfirmationSchedule::where('id', $request->id)->update([
            'approve' => 0,
            'cancel' => 0,
            'desired_date' => $request->desired_date,
        ]);

        return redirect()->back()->with('success-message', 'Rescheduled!');
    }


}
