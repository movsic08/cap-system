<?php

namespace App\Http\Controllers;

use App\Models\DeathCertificate;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ExportCertificateController extends Controller
{
    public function deathCertificate($id) {
        $certificate = DeathCertificate::findOrFail($id);
        $templateProcessor = new TemplateProcessor('DC.docx');
        $templateProcessor->setValue('name', $certificate->deceased_name);
        $templateProcessor->setValue('deceased_age', $certificate->deceased_age);
        $templateProcessor->setValue('address', $certificate->deceased_address);
        $templateProcessor->setValue('cause_of_death', $certificate->cause_of_death);
        $templateProcessor->setValue('interment_location', $certificate->interment_location);


        // naming and saving file
        $templateProcessor->saveAs( "death-certificate" . '.docx');
        return response()->download( "death-certificate" . '.docx')->deleteFileAfterSend(true);
    }
}
