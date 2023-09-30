<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'brides_name',
        'grooms_name',
        'desired_start_date_time',
        'desired_end_date_time',
        'contact_number',
        'address',
        'banns1',
        'banns2',
        'banns3',
        'dispense',
        'date_of_interrogation',
        'interrogation_by',
        'pre_nuptial_counseling',
        'nuptial_counseling_at',
        'nuptial_counseling_by',
        'confession_on',
        'confession_at',
        'confession_by',
        'rite_to_be_conducted_in',
        'grooms_baptismal_certificate',
        'brides_baptismal_certificate',
        'grooms_confirmation_certificate',
        'brides_confirmation_certificate',
        'offering_mariage_fee',
        'offering_sponsors_fee',
        'offering_banns',
        'offering_dispensation',
        'offering_baptism',
        'offering_confirmation',
        'offering_choir',
        'offering_lights',
        'offering_video_coverage',
        'offering_etc',
        'message',
    ];
}
