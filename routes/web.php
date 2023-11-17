<?php

use App\Http\Controllers\ApprovedCertificatesController;
use App\Http\Controllers\ApprovedSchedulesController;
use App\Http\Controllers\BaptismalCertificateController;
use App\Http\Controllers\BaptismalScheduleController;
use App\Http\Controllers\BlessingScheduleController;
use App\Http\Controllers\BurialScheduleController;
use App\Http\Controllers\CancelledScheduleController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ConfirmationCertificateController;
use App\Http\Controllers\ConfirmationScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeathCertificateController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ExportCertificateController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MarriageCertificateController;
use App\Http\Controllers\MassController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RejectedSchedulesController;
use App\Http\Controllers\RequestedCertificateController;
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
Route::get('/about', [LandingPageController::class, 'about'])->name('about.index');
Route::get('/gallery-st-joseph-cathedral', [LandingPageController::class, 'gallery'])->name('gallery-st-joseph-cathedral.index');
Route::get('/schedule-event', [LandingPageController::class, 'scheduleEvent'])->name('schedule-event.index');
Route::get('/request-certificate', [LandingPageController::class, 'requestCertificate'])->name('request-certificate.index');
Route::get('/schedules', [LandingPageController::class, 'schedules'])->name('schedules.index');

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
    Route::get('/requested-schedules/confirmation', [RequestedSchedule::class, 'confirmation'])->name('requested-confirmation.index');
    Route::get('/schedules/confirmation/{id}', [RequestedSchedule::class, 'confirmationShow'])->name('requested-confirmation.show');
    // Baptism approve, reject, restore
    Route::post('/approve-baptism', [BaptismalScheduleController::class, 'approve'])->name('approve-appointment-baptism');
    Route::post('/approve-baptism', [BaptismalScheduleController::class, 'approve'])->name('approve-appointment-baptism');
    Route::post('/reject-baptism', [BaptismalScheduleController::class, 'reject'])->name('reject-appointment-baptism');
    Route::get('document/export-death-certificate/{id}', [ExportCertificateController::class, 'deathCertificate'])->name('export-death-certificate');
    Route::get('document/export-baptismal-certificate/{id}', [ExportCertificateController::class, 'baptismalCertificate'])->name('export-baptismal-certificate');
    Route::get('document/export-marriage-certificate/{id}', [ExportCertificateController::class, 'marriageCertificate'])->name('export-marriage-certificate');
    Route::get('document/export-confirmation-certificate/{id}', [ExportCertificateController::class, 'confirmationCertificate'])->name('export-confirmation-certificate');

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
    // Confirmation approve, reject, restore
    Route::post('/approve-confirmation', [ConfirmationScheduleController::class, 'approve'])->name('approve-appointment-confirmation');
    Route::post('/reject-confirmation', [ConfirmationScheduleController::class, 'reject'])->name('reject-appointment-confirmation');
    Route::post('/restore-confirmation', [ConfirmationScheduleController::class, 'restore'])->name('restore-appointment-confirmation');

    Route::resource('/requested-schedules', RequestedSchedule::class);

    // Approved schedules
    Route::get('/approved-schedules/baptism', [ApprovedSchedulesController::class, 'baptism'])->name('approved-baptism.index');
    Route::get('/approved-schedules/wedding', [ApprovedSchedulesController::class, 'wedding'])->name('approved-wedding.index');
    Route::get('/approved-schedules/burial', [ApprovedSchedulesController::class, 'burial'])->name('approved-burial.index');
    Route::get('/approved-schedules/blessing', [ApprovedSchedulesController::class, 'blessing'])->name('approved-blessing.index');
    Route::get('/approved-schedules/confirmation', [ApprovedSchedulesController::class, 'confirmation'])->name('approved-confirmation.index');
    Route::resource('/approved-schedules', ApprovedSchedulesController::class);

    // Approved schedules
    /* Baptismal */
    Route::get('/approved-certificates/baptismal-certificate', [ApprovedCertificatesController::class, 'baptism'])->name('approved-baptism-certificate.index');
    Route::post('/approve-baptismal-certificate', [RequestedCertificateController::class, 'approveBaptismal'])->name('approve-certificate-baptism');
    Route::post('/reject-baptismal-certificate', [RequestedCertificateController::class, 'rejectBaptismal'])->name('reject-certificate-baptism');
    /* Marriage */
    Route::get('/approved-certificates/marriage-certificate', [ApprovedCertificatesController::class, 'wedding'])->name('approved-wedding-certificate.index');
    Route::post('/approve-marrige-certificate', [RequestedCertificateController::class, 'approveMarriage'])->name('approve-certificate-marriage');
    Route::post('/reject-marrige-certificate', [RequestedCertificateController::class, 'rejectMarriage'])->name('reject-certificate-marriage');
    /* Death */
    Route::get('/approved-certificates/death-certificate', [ApprovedCertificatesController::class, 'burial'])->name('approved-burial-certificate.index');
    Route::post('/approve-death-certificate', [RequestedCertificateController::class, 'approveDeath'])->name('approve-certificate-death');
    Route::post('/reject-death-certificate', [RequestedCertificateController::class, 'rejectDeath'])->name('reject-certificate-death');
    /* Confirmation */
    Route::get('/approved-certificates/confirmation-certificate', [ApprovedCertificatesController::class, 'confirmation'])->name('approved-confirmation-certificate.index');
    Route::post('/approve-confirmation-certificate', [RequestedCertificateController::class, 'approveConfirmation'])->name('approve-certificate-confirmation');
    Route::post('/reject-confirmation-certificate', [RequestedCertificateController::class, 'rejectConfirmation'])->name('reject-certificate-confirmation');
    Route::resource('/approved-certificates', ApprovedCertificatesController::class);
    // Rejected Schedules
    Route::get('/rejected-schedules/baptism', [RejectedSchedulesController::class, 'baptism'])->name('rejected-baptism.index');
    Route::get('/rejected-schedules/wedding', [RejectedSchedulesController::class, 'wedding'])->name('rejected-wedding.index');
    Route::get('/rejected-schedules/burial', [RejectedSchedulesController::class, 'burial'])->name('rejected-burial.index');
    Route::get('/rejected-schedules/blessing', [RejectedSchedulesController::class, 'blessing'])->name('rejected-blessing.index');
    Route::get('/rejected-schedules/confirmation', [RejectedSchedulesController::class, 'confirmation'])->name('rejected-confirmation.index');
    Route::resource('/rejected-schedules', RejectedSchedulesController::class);
    // Requested Certificates
    Route::get('/requested-certificates', [RequestedCertificateController::class, 'index'])->name('requested-certificate.index');
    Route::get('/requested-certificates/baptismal-certificates', [RequestedCertificateController::class, 'baptismalCertificate'])->name('requested-baptismal-certificate.index');
    Route::get('/requested-certificates/baptismal-certificates/{id}', [RequestedCertificateController::class, 'baptismalCertificateShow'])->name('requested-baptismal-certificate.show');
    Route::get('/requested-certificates/marriage-certificates', [RequestedCertificateController::class, 'marriageCertificate'])->name('requested-marriage-certificate.index');
    Route::get('/requested-certificates/marriage-certificates/{id}', [RequestedCertificateController::class, 'marriageCertificateShow'])->name('requested-marriage-certificate.show');
    Route::get('/requested-certificates/death-certificates', [RequestedCertificateController::class, 'deathCertificate'])->name('requested-death-certificate.index');
    Route::get('/requested-certificates/death-certificates/{id}', [RequestedCertificateController::class, 'deathCertificateShow'])->name('requested-death-certificate.show');
    Route::get('/requested-certificates/confirmation-certificates', [RequestedCertificateController::class, 'confirmationCertificate'])->name('requested-confirmation-certificate.index');
    Route::get('/requested-certificates/confirmation-certificates/{id}', [RequestedCertificateController::class, 'confirmationCertificateShow'])->name('requested-confirmation-certificate.show');
    // Gallery
    Route::resource('/gallery', GalleryController::class);
});

// ** Route for user
Route::group(['middleware' => ['auth', 'role:user', 'verified']], function() {
    Route::get('/schedule-event/baptism', [LandingPageController::class, 'baptism'])->name('baptism.schedule-form');
    Route::get('/schedule-event/wedding', [LandingPageController::class, 'wedding'])->name('wedding.schedule-form');
    Route::get('/schedule-event/burial', [LandingPageController::class, 'burial'])->name('burial.schedule-form');
    Route::get('/schedule-event/blessing', [LandingPageController::class, 'blessing'])->name('blessing.schedule-form');
    Route::get('/schedule-event/confirmation', [LandingPageController::class, 'confirmation'])->name('confirmation.schedule-form');
    Route::resource('/schedule-event/baptismal-schedule-form', BaptismalScheduleController::class)->only('store');
    Route::resource('/schedule-event/wedding-schedule-form', WeddingSchedulesController::class)->only('store');
    Route::resource('/schedule-event/burial-schedule-form', BurialScheduleController::class)->only('store');
    Route::resource('/schedule-event/blessing-schedule-form', BlessingScheduleController::class)->only('store');
    Route::resource('/schedule-event/confirmation-schedule-form', ConfirmationScheduleController::class)->only('store');
    // requested schedules
    Route::get('/user-requested-schedules', [UserRequestedScheduleController::class, 'index'])->name('user.requested-schedules');
    Route::get('/schedules/baptism/', [UserRequestedScheduleController::class, 'baptism'])->name('user-requested-baptism.index');
    Route::get('/schedules/blessing/', [UserRequestedScheduleController::class, 'blessing'])->name('user-requested-blessing.index');
    Route::get('/schedules/burial/', [UserRequestedScheduleController::class, 'burial'])->name('user-requested-burial.index');
    Route::get('/schedules/wedding/', [UserRequestedScheduleController::class, 'wedding'])->name('user-requested-wedding.index');
    Route::get('/schedules/confirmation/', [UserRequestedScheduleController::class, 'confirmation'])->name('user-requested-confirmation.index');
    // cancel schedules
    Route::post('/cancel-baptism', [UserRequestedScheduleController::class, 'cancelBaptism'])->name('cancel-appointment-baptism');
    Route::post('/cancel-burial', [UserRequestedScheduleController::class, 'cancelBurial'])->name('cancel-appointment-burial');
    Route::post('/cancel-wedding', [UserRequestedScheduleController::class, 'cancelWedding'])->name('cancel-appointment-wedding');
    Route::post('/cancel-blessing', [UserRequestedScheduleController::class, 'cancelBlessing'])->name('cancel-appointment-blessing');
    Route::post('/cancel-confirmation', [UserRequestedScheduleController::class, 'cancelConfirmation'])->name('cancel-appointment-confirmation');
    // cancelled schedules
    Route::get('/cancelled-schedules/baptism/', [CancelledScheduleController::class, 'baptism'])->name('user-cancelled-baptism.index');
    Route::get('/cancelled-schedules/blessing/', [CancelledScheduleController::class, 'blessing'])->name('user-cancelled-blessing.index');
    Route::get('/cancelled-schedules/burial/', [CancelledScheduleController::class, 'burial'])->name('user-cancelled-burial.index');
    Route::get('/cancelled-schedules/wedding/', [CancelledScheduleController::class, 'wedding'])->name('user-cancelled-wedding.index');
    Route::get('/cancelled-schedules/confirmation/', [CancelledScheduleController::class, 'confirmation'])->name('user-cancelled-confirmation.index');
    Route::resource('/cancelled-schedules', CancelledScheduleController::class);
    // Request Certificate
    Route::resource('/request-baptismal-certificate', BaptismalCertificateController::class);
    Route::resource('/request-marriage-certificate', MarriageCertificateController::class);
    Route::resource('/request-death-certificate', DeathCertificateController::class);
    Route::resource('/request-confirmation-certificate', ConfirmationCertificateController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
