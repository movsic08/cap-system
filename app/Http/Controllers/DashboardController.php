<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
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
            return view('superadministrator.dashboard.index');
        };
    }
}
