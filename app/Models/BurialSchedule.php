<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurialSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'deceased_name',
        'family_name',
        'desired_start_date_time',
        'desired_end_date_time',
        'contact_number',
        'address',
        'message',
    ];
}
