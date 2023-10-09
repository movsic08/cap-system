<?php

use App\Http\Controllers\ApprovedSchedulesController;
use App\Http\Controllers\BaptismalScheduleController;
use App\Http\Controllers\BlessingScheduleController;
use App\Http\Controllers\BurialScheduleController;
use App\Http\Controllers\CancelledScheduleController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MassController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RejectedSchedulesController;
use App\Http\Controllers\RequestedSchedule;
use App\Http\Controllers\UserRequestedScheduleController;
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
    // Requested Schedules
    Route::get('/requested-schedules/baptism', [RequestedSchedule::class, 'baptism'])->name('requested-baptism.index');
    Route::get('/schedules/baptism/{id}', [RequestedSchedule::class, 'baptismShow'])->name('requested-baptism.show');
    Route::get('/requested-schedules/wedding', [RequestedSchedule::class, 'wedding'])->name('requested-wedding.index');
    Route::get('/schedules/wedding/{id}', [RequestedSchedule::class, 'weddingShow'])->name('requested-wedding.show');
    Route::get('/requested-schedules/burial', [RequestedSchedule::class, 'burial'])->name('requested-burial.index');
    Route::get('/schedules/burial/{id}', [RequestedSchedule::class, 'burialShow'])->name('requested-burial.show');
    Route::get('/requested-schedules/blessing', [RequestedSchedule::class, 'blessing'])->name('requested-blessing.index');
    Route::get('/schedules/blessing/{id}', [RequestedSchedule::class, 'blessingShow'])->name('requested-blessing.show');
    // Baptism approve, reject, restore
    Route::post('/approve-baptism', [BaptismalScheduleController::class, 'approve'])->name('approve-appointment-baptism');
    Route::post('/reject-baptism', [BaptismalScheduleController::class, 'reject'])->name('reject-appointment-baptism');
    Route::post('/restore-baptism', [BaptismalScheduleController::class, 'restore'])->name('restore-appointment-baptism');
    // Wedding approve, reject, restore
    Route::post('/approve-wedding', [WeddingSchedulesController::class, 'approve'])->name('approve-appointment-wedding');
    Route::post('/reject-wedding', [WeddingSchedulesController::class, 'reject'])->name('reject-appointment-wedding');
    Route::post('/restore-wedding', [WeddingSchedulesController::class, 'restore'])->name('restore-appointment-wedding');
    // Burial approve, reject, restore
    Route::post('/approve-burial', [BurialScheduleController::class, 'approve'])->name('approve-appointment-burial');
    Route::post('/reject-burial', [BurialScheduleController::class, 'reject'])->name('reject-appointment-burial');
    Route::post('/restore-burial', [BurialScheduleController::class, 'restore'])->name('restore-appointment-burial');
    // Blessing approve, reject, restore
    Route::post('/approve-blessing', [BlessingScheduleController::class, 'approve'])->name('approve-appointment-blessing');
    Route::post('/reject-blessing', [BlessingScheduleController::class, 'reject'])->name('reject-appointment-blessing');
    Route::post('/restore-blessing', [BlessingScheduleController::class, 'restore'])->name('restore-appointment-blessing');
    Route::resource('/requested-schedules', RequestedSchedule::class);

    // Approved schedules
    Route::get('/approved-schedules/baptism', [ApprovedSchedulesController::class, 'baptism'])->name('approved-baptism.index');
    Route::get('/approved-schedules/wedding', [ApprovedSchedulesController::class, 'wedding'])->name('approved-wedding.index');
    Route::get('/approved-schedules/burial', [ApprovedSchedulesController::class, 'burial'])->name('approved-burial.index');
    Route::get('/approved-schedules/blessing', [ApprovedSchedulesController::class, 'blessing'])->name('approved-blessing.index');
    Route::resource('/approved-schedules', ApprovedSchedulesController::class);
    // Rejected Schedules
    Route::get('/rejected-schedules/baptism', [RejectedSchedulesController::class, 'baptism'])->name('rejected-baptism.index');
    Route::get('/rejected-schedules/wedding', [RejectedSchedulesController::class, 'wedding'])->name('rejected-wedding.index');
    Route::get('/rejected-schedules/burial', [RejectedSchedulesController::class, 'burial'])->name('rejected-burial.index');
    Route::get('/rejected-schedules/blessing', [RejectedSchedulesController::class, 'blessing'])->name('rejected-blessing.index');
    Route::resource('/rejected-schedules', RejectedSchedulesController::class);
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
    // requested schedules
    Route::get('/user-requested-schedules', [UserRequestedScheduleController::class, 'index'])->name('user.requested-schedules');
    Route::get('/schedules/baptism/', [UserRequestedScheduleController::class, 'baptism'])->name('user-requested-baptism.index');
    Route::get('/schedules/blessing/', [UserRequestedScheduleController::class, 'blessing'])->name('user-requested-blessing.index');
    Route::get('/schedules/burial/', [UserRequestedScheduleController::class, 'burial'])->name('user-requested-burial.index');
    Route::get('/schedules/wedding/', [UserRequestedScheduleController::class, 'wedding'])->name('user-requested-wedding.index');
    // cancel schedules
    Route::post('/cancel-baptism', [UserRequestedScheduleController::class, 'cancelBaptism'])->name('cancel-appointment-baptism');
    Route::post('/cancel-burial', [UserRequestedScheduleController::class, 'cancelBurial'])->name('cancel-appointment-burial');
    Route::post('/cancel-wedding', [UserRequestedScheduleController::class, 'cancelWedding'])->name('cancel-appointment-wedding');
    Route::post('/cancel-blessing', [UserRequestedScheduleController::class, 'cancelBlessing'])->name('cancel-appointment-blessing');
    // cancelled schedules
    Route::get('/cancelled-schedules/baptism/', [CancelledScheduleController::class, 'baptism'])->name('user-cancelled-baptism.index');
    Route::get('/cancelled-schedules/blessing/', [CancelledScheduleController::class, 'blessing'])->name('user-cancelled-blessing.index');
    Route::get('/cancelled-schedules/burial/', [CancelledScheduleController::class, 'burial'])->name('user-cancelled-burial.index');
    Route::get('/cancelled-schedules/wedding/', [CancelledScheduleController::class, 'wedding'])->name('user-cancelled-wedding.index');
    Route::resource('/cancelled-schedules', CancelledScheduleController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
