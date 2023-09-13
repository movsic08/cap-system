<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BurialSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function scheduleEvent()
    {
        return view('landingpage.schedule-event');
    }

    public function baptism()
    {
        $events = [];

        $appointments = BaptismalSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Baptism' . ' ('.$appointment->first_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.baptism.schedule-form', compact('events'));
    }

    public function wedding()
    {
        $events = [];

        $appointments = WeddingSchedules::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Wedding' . ' ('.$appointment->grooms_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.wedding.schedule-form', compact('events'));
    }

    public function burial()
    {
        $events = [];

        $appointments = BurialSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Burial' . ' ('.$appointment->deceased_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.burial.schedule-form', compact('events'));
    }
}
