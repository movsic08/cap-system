<?php

namespace App\Http\Controllers;

use App\Mail\ApprovedBaptismalCertificate;
use App\Mail\ApprovedDeathCertificate;
use App\Models\BaptismalCertificate;
use App\Models\ConfirmationCertificate;
use App\Models\DeathCertificate;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestedCertificateController extends Controller
{
    public function index()
    {
        // add approve === 0
        $baptismalCertificateCount = BaptismalCertificate::where('approve', 0)->where('reject', 0)->count();
        $marriageCertificateCount = MarriageCertificate::where('approve', 0)->where('reject', 0)->count();
        $deathCertificateCount = DeathCertificate::where('approve', 0)->where('reject', 0)->count();
        $confirmationCertificateCount = ConfirmationCertificate::where('approve', 0)->where('reject', 0)->count();
        return view('superadministrator.requested-certificates.index', compact('baptismalCertificateCount', 'marriageCertificateCount', 'deathCertificateCount', 'confirmationCertificateCount'));
    }

    /* Baptismal */
    public function baptismalCertificate()
    {
        $requestedBaptismalCertificates = BaptismalCertificate::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-certificates.baptismal-certificate.index', compact('requestedBaptismalCertificates'));
    }

    public function baptismalCertificateShow($id)
    {
        $requestedBaptismalCertificate = BaptismalCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.baptismal-certificate.show', compact('requestedBaptismalCertificate'));
    }

    public function approveBaptismal(Request $request)
    {
        BaptismalCertificate::where('id', $request->id)->update([
            'approve' => 1,
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApprovedBaptismalCertificate($data));

        return redirect()->back()->with('success-message', 'Approved!');
    }

    public function rejectBaptismal(Request $request)
    {
        BaptismalCertificate::where('id', $request->id)->update([
            'reject' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('danger-message', 'Rejected!');
    }

    /* Marriage */

    public function marriageCertificate()
    {
        $requestedMarriageCertificates = MarriageCertificate::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-certificates.marriage-certificate.index', compact('requestedMarriageCertificates'));
    }

    public function marriageCertificateShow($id)
    {
        $requestedMarriageCertificate = MarriageCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.marriage-certificate.show', compact('requestedMarriageCertificate'));
    }

    public function approveMarriage(Request $request)
    {
        MarriageCertificate::where('id', $request->id)->update([
            'approve' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('success-message', 'Approved!');
    }

    public function rejectMarriage(Request $request)
    {
        MarriageCertificate::where('id', $request->id)->update([
            'reject' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('danger-message', 'Rejected!');
    }

    /* Death */

    public function deathCertificate()
    {
        $requestedDeathCertificates = DeathCertificate::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-certificates.death-certificate.index', compact('requestedDeathCertificates'));
    }

    public function deathCertificateShow($id)
    {
        $requestedDeathCertificate = DeathCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.death-certificate.show', compact('requestedDeathCertificate'));
    }

    public function approveDeath(Request $request)
    {
        DeathCertificate::where('id', $request->id)->update([
            'approve' => 1,
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApprovedDeathCertificate($data));

        return redirect()->back()->with('success-message', 'Approved!');
    }

    public function rejectDeath(Request $request)
    {
        DeathCertificate::where('id', $request->id)->update([
            'reject' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('danger-message', 'Rejected!');
    }

    /* Confirmation */
    public function confirmationCertificate()
    {
        $requestedConfirmationCertificates = ConfirmationCertificate::where('approve', 0)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.requested-certificates.confirmation-certificate.index', compact('requestedConfirmationCertificates'));
    }

    public function confirmationCertificateShow($id)
    {
        $requestedConfirmationCertificate = ConfirmationCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.confirmation-certificate.show', compact('requestedConfirmationCertificate'));
    }

    public function approveConfirmation(Request $request)
    {
        ConfirmationCertificate::where('id', $request->id)->update([
            'approve' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('success-message', 'Approved!');
    }

    public function rejectConfirmation(Request $request)
    {
        ConfirmationCertificate::where('id', $request->id)->update([
            'reject' => 1,
        ]);

/*         $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data)); */

        return redirect()->back()->with('danger-message', 'Rejected!');
    }
}
