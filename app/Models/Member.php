<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'name',
        'gender',
        'date_of_birth',
        'address',
        'phone_number',
    ];
}
