<?php

namespace App\Http\Controllers;

use App\Models\BaptismalCertificate;
use App\Models\DeathCertificate;
use App\Models\MarriageCertificate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ExportCertificateController extends Controller
{
    public function deathCertificate($id) {
        $certificate = DeathCertificate::findOrFail($id);

        $templateProcessor = new TemplateProcessor('DC.docx');
        $templateProcessor->setValue('name', $certificate->deceased_name);
        $templateProcessor->setValue('date_of_death',Carbon::parse($certificate->date_of_death)->format('jS \d\a\y \of F, Y'));
        $templateProcessor->setValue('interment_date',Carbon::parse($certificate->interment_date)->format('jS \d\a\y \of F, Y'));
        $templateProcessor->setValue('deceased_age', $certificate->deceased_age);
        $templateProcessor->setValue('address', $certificate->deceased_address);
        $templateProcessor->setValue('cause_of_death', $certificate->cause_of_death);
        $templateProcessor->setValue('interment_location', $certificate->interment_location);


        // naming and saving file
        $templateProcessor->saveAs( "death-certificate" . '.docx');
        return response()->download( "death-certificate" . '.docx')->deleteFileAfterSend(true);
    }

    public function baptismalCertificate($id) {
        $certificate = BaptismalCertificate::findOrFail($id);

        $templateProcessor = new TemplateProcessor('BC.docx');
        $templateProcessor->setValue('childs_name', $certificate->childs_name);
        $templateProcessor->setValue('fathers_name', $certificate->fathers_name);
        $templateProcessor->setValue('mothers_name', $certificate->mothers_name);
        $templateProcessor->setValue('place_of_birth', $certificate->place_of_birth);
        $templateProcessor->setValue('sponsors', $certificate->sponsors);
        $templateProcessor->setValue('baptismal_date',Carbon::parse($certificate->baptism_date)->format('jS \d\a\y \of F, Y'));


        // naming and saving file
        $templateProcessor->saveAs( "baptismal-certificate" . '.docx');
        return response()->download( "baptismal-certificate" . '.docx')->deleteFileAfterSend(true);
    }

    public function marriageCertificate($id) {
        $certificate = MarriageCertificate::findOrFail($id);

        $templateProcessor = new TemplateProcessor('MC.docx');
        $templateProcessor->setValue('grooms_name', $certificate->grooms_name);
        $templateProcessor->setValue('brides_name', $certificate->brides_name);
        $templateProcessor->setValue('brides_father', $certificate->brides_father);
        $templateProcessor->setValue('brides_mother', $certificate->brides_mother);
        $templateProcessor->setValue('grooms_father', $certificate->grooms_father);
        $templateProcessor->setValue('grooms_mother', $certificate->grooms_mother);
        $templateProcessor->setValue('grooms_age', $certificate->grooms_age);
        $templateProcessor->setValue('brides_age', $certificate->brides_age);
        $templateProcessor->setValue('officiated_by', $certificate->officiated_by);
        $templateProcessor->setValue('sponsors', $certificate->sponsors);


        $templateProcessor->setValue('marriage_date',Carbon::parse($certificate->marriage_date)->format('jS \d\a\y \of F, Y'));


        // naming and saving file
        $templateProcessor->saveAs( "marriage-certificate" . '.docx');
        return response()->download( "marriage-certificate" . '.docx')->deleteFileAfterSend(true);
    }
}
