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
        'message',
    ];

}
