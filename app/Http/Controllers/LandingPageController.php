<?php

namespace App\Http\Controllers;

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
        return view('landingpage.schedule-events.baptism.schedule-form');
    }
}
