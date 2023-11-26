<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportController extends Controller
{
    public function index(Request $request) {
        return view('superadministrator.reports.index');
    }
    public function monthly() {
        $monthlyAppointments = [];

        for ($month = 1; $month <= 12; $month++) {
            $baptismalAppointments = BaptismalSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
            $weddingAppointments = WeddingSchedules::where('approve', 1)->whereMonth('desired_date', $month)->get();
            $burialAppointments = BurialSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
            $blessingAppointments = BlessingSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
            $confirmationAppointments = ConfirmationSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();

            $monthlyAppointments[$month]['baptismal'] = $baptismalAppointments;
            $monthlyAppointments[$month]['wedding'] = $weddingAppointments;
            $monthlyAppointments[$month]['burial'] = $burialAppointments;
            $monthlyAppointments[$month]['blessing'] = $blessingAppointments;
            $monthlyAppointments[$month]['confirmation'] = $confirmationAppointments;
        }

        return view('superadministrator.reports.monthly.index', compact('monthlyAppointments'));
    }

   public function showByMonth($month)
    {
        // Assuming $month is a valid month (1 to 12)

        // Retrieve appointments for the specified month
        $baptismalAppointments = BaptismalSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
        $weddingAppointments = WeddingSchedules::where('approve', 1)->whereMonth('desired_date', $month)->get();
        $burialAppointments = BurialSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
        $blessingAppointments = BlessingSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();
        $confirmationAppointments = ConfirmationSchedule::where('approve', 1)->whereMonth('desired_date', $month)->get();

        // Pass the data to the view
        return view('superadministrator.reports.by-month', compact('month' ,'baptismalAppointments', 'weddingAppointments', 'burialAppointments', 'blessingAppointments', 'confirmationAppointments'));
    }

}
