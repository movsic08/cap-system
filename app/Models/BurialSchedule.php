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
        'desired_date',
        'desired_time',
        'contact_number',
        'address',
        'message',
        'deceased_age',
        'deceased_status',
        'cause_of_death',
        'date_of_death',
    ];
}
