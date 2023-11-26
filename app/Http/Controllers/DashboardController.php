<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
         /** @var \App\Models\User */
        $user = Auth::user();
        if ($user->hasRole('user')) {
            return view('user.dashboard.index');
        } elseif ($user->hasRole('superadministrator')) {
            $events  = [];

        // Get BaptismalSchedule data
        $baptismalAppointments = BaptismalSchedule::where('approve', 1)->get();

        foreach ($baptismalAppointments as $appointment) {
            $events[] = [
                'title' => 'Baptismal (' . $appointment->desired_time . ')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }

        // Get WeddingSchedules data
        $weddingAppointments = WeddingSchedules::where('approve', 1)->get();

        foreach ($weddingAppointments as $appointment) {
            $events[] = [
                'title' => 'Wedding (' . $appointment->desired_time . ')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }


        $Burialappointments = BurialSchedule::where('approve', 1)->get();

        foreach ($Burialappointments as $appointment) {
            $events[] = [
                'title' => 'Burial' . ' ('.$appointment->desired_time.')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }

        $blessingAppointments = BlessingSchedule::where('approve', 1)->get();

        foreach ($blessingAppointments as $appointment) {
            $events[] = [
                'title' => 'Blessing' . ' ('.$appointment->desired_time.')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }

        $confirmationAppointments = ConfirmationSchedule::where('approve', 1)->get();

        foreach ($confirmationAppointments as $appointment) {
            $events[] = [
                'title' => 'Confirmation' . ' ('.$appointment->desired_time.')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }



            return view('superadministrator.dashboard.index', compact('events'));
        };
    }
}
