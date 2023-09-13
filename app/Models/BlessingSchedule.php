<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlessingSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'blessing_for',
        'desired_start_date_time',
        'desired_end_date_time',
        'contact_number',
        'address',
        'message',
        'approve',
        'reject',
    ];
}
