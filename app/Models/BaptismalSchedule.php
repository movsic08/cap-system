<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaptismalSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'childs_name',
        'desired_start_date_time',
        'desired_end_date_time',
        'mothers_name',
        'mothers_contact_number',
        'fathers_name',
        'fathers_contact_number',
        'address',
        'message',
        'approve',
        'reject',
    ];
}
