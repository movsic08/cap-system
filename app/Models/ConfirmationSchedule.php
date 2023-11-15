<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmationSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'email',
        'confirmation_name',
        'confirmation_date',
        'date_of_baptism',
        'mother_name',
        'father_name',
        'residence_of_parents',
        'place_of_baptism',
        'birthplace',
        'approve',
        'reject',
        'cancel',
        'desired_date',
        'desired_time',
        'contact_number',
        'message',
    ];
}
