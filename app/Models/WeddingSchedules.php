<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'email',
        'brides_name',
        'grooms_name',
        'desired_date',
        'desired_time',
        'contact_number',
        'address',
        'contact_number',
        'message',
    ];
}
