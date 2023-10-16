<?php

namespace App\Http\Controllers;

use App\Models\BaptismalCertificate;
use App\Models\ConfirmationCertificate;
use App\Models\DeathCertificate;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;

class RequestedCertificateController extends Controller
{
    public function index()
    {
        // add approve === 0
        $baptismalCertificateCount = BaptismalCertificate::count();
        $marriageCertificateCount = MarriageCertificate::count();
        $deathCertificateCount = DeathCertificate::count();
        $confirmationCertificateCount = ConfirmationCertificate::count();
        return view('superadministrator.requested-certificates.index', compact('baptismalCertificateCount', 'marriageCertificateCount', 'deathCertificateCount', 'confirmationCertificateCount'));
    }

    public function baptismalCertificate()
    {
        $requestedBaptismalCertificates = BaptismalCertificate::latest()->paginate(8);
        return view('superadministrator.requested-certificates.baptismal-certificate.index', compact('requestedBaptismalCertificates'));
    }

    public function baptismalCertificateShow($id)
    {
        $requestedBaptismalCertificate = BaptismalCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.baptismal-certificate.show', compact('requestedBaptismalCertificate'));
    }

    public function marriageCertificate()
    {
        $requestedMarriageCertificates = MarriageCertificate::latest()->paginate(8);
        return view('superadministrator.requested-certificates.marriage-certificate.index', compact('requestedMarriageCertificates'));
    }

    public function marriageCertificateShow($id)
    {
        $requestedMarriageCertificate = MarriageCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.marriage-certificate.show', compact('requestedMarriageCertificate'));
    }

    public function deathCertificate()
    {
        $requestedDeathCertificates = DeathCertificate::latest()->paginate(8);
        return view('superadministrator.requested-certificates.death-certificate.index', compact('requestedDeathCertificates'));
    }

    public function deathCertificateShow($id)
    {
        $requestedDeathCertificate = DeathCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.death-certificate.show', compact('requestedDeathCertificate'));
    }
    public function confirmationCertificate()
    {
        $requestedConfirmationCertificates = ConfirmationCertificate::latest()->paginate(8);
        return view('superadministrator.requested-certificates.confirmation-certificate.index', compact('requestedConfirmationCertificates'));
    }

    public function confirmationCertificateShow($id)
    {
        $requestedConfirmationCertificate = ConfirmationCertificate::findOrFail($id);
        return view('superadministrator.requested-certificates.confirmation-certificate.show', compact('requestedConfirmationCertificate'));
    }
}
