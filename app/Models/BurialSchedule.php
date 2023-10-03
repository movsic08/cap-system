<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurialSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'email',
        'deceased_name',
        'family_name',
        'desired_start_date_time',
        'desired_end_date_time',
        'contact_number',
        'address',
        'message',
        'deceased_age',
        'deceased_status',
        'cause_of_death',
        'date_of_death',
        'cemetery',
        'minister',
        'non_ut',
        'certificate_of_death',
        'burial_permit',
        'cemetery_lease_contract',
        'offering_ordinary',
        'offering_with_mass',
        'offering_candles',
        'offering_lights',
        'offering_video_coverage',
        'offering_choir',
        'offering_cemetery_lot',
        'offering_etc',
    ];
}
