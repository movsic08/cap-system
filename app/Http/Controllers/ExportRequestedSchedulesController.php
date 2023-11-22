<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BurialSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ExportRequestedSchedulesController extends Controller
{
    public function deathschedule($id) {
        $schedule = BurialSchedule::findOrFail($id);
        $templateProcessor = new TemplateProcessor('Funeral.docx');
        $templateProcessor->setValue('deceased_name', $schedule->deceased_name);
        $templateProcessor->setValue('deceased_age', $schedule->deceased_age);
        $templateProcessor->setValue('deceased_status', $schedule->deceased_status);
        $templateProcessor->setValue('family_name', $schedule->family_name);
        $templateProcessor->setValue('address', $schedule->address);
        $templateProcessor->setValue('cause_of_death', $schedule->cause_of_death);
        $templateProcessor->setValue('date_of_death', Carbon::parse($schedule->date_of_death)->format('M d, Y'));
        $templateProcessor->setValue('desired_date', Carbon::parse($schedule->desired_date)->format('M d, Y'));
        $templateProcessor->setValue('desired_time', $schedule->desired_time);
        // naming and saving file
        $templateProcessor->saveAs( "funeral-appointment" . '.docx');
        return response()->download( "funeral-appointment" . '.docx')->deleteFileAfterSend(true);
    }
    public function baptismalschedule($id) {
        $schedule = BaptismalSchedule::findOrFail($id);
        $templateProcessor = new TemplateProcessor('Baptismal-Remembrance.docx');
        $templateProcessor->setValue('childs_name', $schedule->childs_name);
        $templateProcessor->setValue('mothers_name', $schedule->mothers_name);
        $templateProcessor->setValue('fathers_name', $schedule->fathers_name);
        $templateProcessor->setValue('childs_birthplace', $schedule->childs_birthplace);
        $templateProcessor->setValue('childs_birthdate_day', Carbon::parse($schedule->childs_birthdate)->format('jS'));
        $templateProcessor->setValue('childs_birthdate_month', Carbon::parse($schedule->childs_birthdate)->format('F'));
        $templateProcessor->setValue('childs_birthdate_year', Carbon::parse($schedule->childs_birthdate)->isoFormat('YYYY'));
        $templateProcessor->setValue('desired_date', Carbon::parse($schedule->desired_date)->format('M d, Y'));
        $templateProcessor->setValue('parish_priest', $schedule->parish_priest);
        $templateProcessor->setValue('family_name', $schedule->family_name);
        $templateProcessor->setValue('address', $schedule->address);
        $templateProcessor->setValue('sponsors', $schedule->sponsors);
        $templateProcessor->setValue('godfather', $schedule->godfather);
        $templateProcessor->setValue('godmother', $schedule->godmother);
        $templateProcessor->saveAs( "baptismal-remembrance-export" . '.docx');
        return response()->download( "baptismal-remembrance-export" . '.docx')->deleteFileAfterSend(true);
    }
//
// marriageschedule
// confirmationschedule
}
