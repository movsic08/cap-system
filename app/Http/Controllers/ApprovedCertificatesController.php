<?php

namespace App\Http\Controllers;

use App\Models\BaptismalCertificate;
use App\Models\ConfirmationCertificate;
use App\Models\DeathCertificate;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;

class ApprovedCertificatesController extends Controller
{
    public function index()
    {
        $baptismalCertificateCount = BaptismalCertificate::where('approve', 1)->where('reject', 0)->count();
        $marriageCertificateCount = MarriageCertificate::where('approve', 1)->where('reject', 0)->count();
        $deathCertificateCount = DeathCertificate::where('approve', 1)->where('reject', 0)->count();
        $confirmationCertificateCount = ConfirmationCertificate::where('approve', 1)->where('reject', 0)->count();
        return view('superadministrator.approved-certificates.index', compact('baptismalCertificateCount','marriageCertificateCount','deathCertificateCount','confirmationCertificateCount'));
    }

    public function baptism()
    {
        $approvedBaptismalCertificates = BaptismalCertificate::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-certificates.baptismal.index', compact('approvedBaptismalCertificates'));
    }

    public function wedding()
    {
        $approvedMarriageCertificates = MarriageCertificate::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-certificates.marriage.index', compact('approvedMarriageCertificates'));
    }

    public function burial()
    {
        $approvedDeathCertificates = DeathCertificate::where('approve', 1)->where('reject', 0)->latest()->paginate(8);

        return view('superadministrator.approved-certificates.death.index', compact('approvedDeathCertificates'));
    }

    public function confirmation()
    {
        $approvedConfirmationCertificates = ConfirmationCertificate::where('approve', 1)->where('reject', 0)->latest()->paginate(8);
        return view('superadministrator.approved-certificates.confirmation.index', compact('approvedConfirmationCertificates'));
    }
}
