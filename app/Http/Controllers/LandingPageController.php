<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
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

        $appointments = BaptismalSchedule::get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Baptism' . ' ('.$appointment->first_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.baptism.schedule-form', compact('events'));
    }
}
