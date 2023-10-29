<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmationCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'confirmation_name',
        'fathers_name',
        'mothers_name',
        'place_of_birth',
        'confirmation_date',
        'sponsors',
        'approve',
        'reject',
    ];
}
