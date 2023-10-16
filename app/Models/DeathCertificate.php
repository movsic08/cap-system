<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'deceased_name',
        'deceased_age',
        'deceased_address',
        'cause_of_death',
        'interment_date',
        'interment_location',
    ];
}
