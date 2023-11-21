<?php

namespace App\Http\Controllers;

use App\Models\BurialSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ExportRequestedSchedulesController extends Controller
{
    // deathschedule
    public function deathschedule($id) {
        $schedule = BurialSchedule::findOrFail($id);

        $templateProcessor = new TemplateProcessor('Funeral.docx');

        // $carbonDate = Carbon::parse($schedule->created_at);

        // Format the date
        // $date_issued = $carbonDate->format("M. j, Y");


        $templateProcessor->setValue('deceased_name', $schedule->deceased_name);
        $templateProcessor->setValue('deceased_age', $schedule->deceased_age);
        $templateProcessor->setValue('deceased_status', $schedule->deceased_status);
        $templateProcessor->setValue('family_name', $schedule->family_name);
        $templateProcessor->setValue('address', $schedule->address);
        $templateProcessor->setValue('cause_of_death', $schedule->cause_of_death);
        $templateProcessor->setValue('date_of_death', Carbon::parse($schedule->date_of_death)->format('M d, Y'));
        $templateProcessor->setValue('desired_date', Carbon::parse($schedule->desired_date)->format('M d, Y'));
        $templateProcessor->setValue('desired_time', $schedule->desired_time);


        // $templateProcessor->setValue('confirmation_date',Carbon::parse($schedule->confirmation_date)->format('jS \d\a\y \of F, Y'));

        // naming and saving file
        $templateProcessor->saveAs( "funeral-appointment" . '.docx');
        return response()->download( "funeral-appointment" . '.docx')->deleteFileAfterSend(true);
    }
// baptismalschedule
// marriageschedule
// confirmationschedule
}
