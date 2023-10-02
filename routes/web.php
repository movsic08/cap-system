<?php

use App\Http\Controllers\ApprovedSchedulesController;
use App\Http\Controllers\BaptismalScheduleController;
use App\Http\Controllers\BlessingScheduleController;
use App\Http\Controllers\BurialScheduleController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MassController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestedSchedule;
use App\Http\Controllers\WeddingSchedulesController;
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
    Route::get('/requested-schedules/baptism/{id}', [RequestedSchedule::class, 'baptismShow'])->name('requested-baptism.show');
    Route::get('/requested-schedules/wedding', [RequestedSchedule::class, 'wedding'])->name('requested-wedding.index');
    Route::get('/requested-schedules/burial', [RequestedSchedule::class, 'burial'])->name('requested-burial.index');
    Route::get('/requested-schedules/burial/{id}', [RequestedSchedule::class, 'burialShow'])->name('requested-burial.show');
    Route::get('/requested-schedules/blessing', [RequestedSchedule::class, 'blessing'])->name('requested-blessing.index');
    Route::get('/requested-schedules/blessing/{id}', [RequestedSchedule::class, 'blessingShow'])->name('requested-blessing.show');
    Route::post('/approve-baptism', [BaptismalScheduleController::class, 'approve'])->name('approve-appointment-baptism');
    Route::post('/reject-baptism', [BaptismalScheduleController::class, 'reject'])->name('reject-appointment-baptism');
    Route::post('/approve-wedding', [WeddingSchedulesController::class, 'approve'])->name('approve-appointment-wedding');
    Route::post('/reject-wedding', [WeddingSchedulesController::class, 'reject'])->name('reject-appointment-wedding');
    Route::post('/approve-burial', [BurialScheduleController::class, 'approve'])->name('approve-appointment-burial');
    Route::post('/reject-burial', [BurialScheduleController::class, 'reject'])->name('reject-appointment-burial');
    Route::post('/approve-blessing', [BlessingScheduleController::class, 'approve'])->name('approve-appointment-blessing');
    Route::post('/reject-blessing', [BlessingScheduleController::class, 'reject'])->name('reject-appointment-blessing');
    Route::resource('/requested-schedules', RequestedSchedule::class);
    Route::resource('/offertory', MassController::class);
    Route::resource('/collection', CollectionController::class);
    Route::get('/approved-schedules/baptism', [ApprovedSchedulesController::class, 'baptism'])->name('approved-baptism.index');
    Route::get('/approved-schedules/wedding', [ApprovedSchedulesController::class, 'wedding'])->name('approved-wedding.index');
    Route::get('/approved-schedules/burial', [ApprovedSchedulesController::class, 'burial'])->name('approved-burial.index');
    Route::get('/approved-schedules/blessing', [ApprovedSchedulesController::class, 'blessing'])->name('approved-blessing.index');
    Route::resource('/approved-schedules', ApprovedSchedulesController::class);
});

// ** Route for user
Route::group(['middleware' => ['auth', 'role:user', 'verified']], function() {
    Route::get('/schedule-event/baptism', [LandingPageController::class, 'baptism'])->name('baptism.schedule-form');
    Route::get('/schedule-event/wedding', [LandingPageController::class, 'wedding'])->name('wedding.schedule-form');
    Route::get('/schedule-event/burial', [LandingPageController::class, 'burial'])->name('burial.schedule-form');
    Route::get('/schedule-event/blessing', [LandingPageController::class, 'blessing'])->name('blessing.schedule-form');
    Route::resource('/schedule-event/baptismal-schedule-form', BaptismalScheduleController::class)->only('store');
    Route::resource('/schedule-event/wedding-schedule-form', WeddingSchedulesController::class)->only('store');
    Route::resource('/schedule-event/burial-schedule-form', BurialScheduleController::class)->only('store');
    Route::resource('/schedule-event/blessing-schedule-form', BlessingScheduleController::class)->only('store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
