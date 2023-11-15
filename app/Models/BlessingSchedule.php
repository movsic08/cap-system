<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlessingSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'email',
        'blessing_for',
        'desired_date',
        'desired_time',
        'contact_number',
        'address',
        'message',
        'approve',
        'reject',
    ];
}
