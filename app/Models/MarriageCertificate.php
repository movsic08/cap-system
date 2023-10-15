<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'grooms_name',
        'brides_name',
        'brides_father',
        'brides_mother',
        'grooms_father',
        'grooms_mother',
        'grooms_age',
        'brides_age',
        'marriage_date',
        'officiated_by',
        'sponsors',
    ];
}
