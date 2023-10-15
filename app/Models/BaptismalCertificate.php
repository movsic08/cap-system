<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaptismalCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'childs_name',
        'mothers_name',
        'fathers_name',
        'place_of_birth',
        'childs_birthdate',
        'baptism_date',
        'baptized_by',
        'sponsors',
    ];
}
