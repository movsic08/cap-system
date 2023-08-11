<?php

use App\Http\Controllers\BaptismalScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestedSchedule;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
Route::get('/schedule-event', [LandingPageController::class, 'scheduleEvent'])->name('schedule-event.index');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ** Route for superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator', 'verified']], function() {
    Route::resource('/organizations', OrganizationController::class);
    Route::resource('/member', MemberController::class);
    Route::resource('/donations', DonationController::class);
    Route::get('/requested-schedules/baptism', [RequestedSchedule::class, 'baptism'])->name('requested-baptism.index');
    Route::resource('/requested-schedules', RequestedSchedule::class);
});

// ** Route for user
Route::group(['middleware' => ['auth', 'role:user', 'verified']], function() {
    Route::get('/schedule-event/baptism', [LandingPageController::class, 'baptism'])->name('baptism.schedule-form');
    Route::resource('/schedule-event/baptismal-schedule-form', BaptismalScheduleController::class)->only('store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
