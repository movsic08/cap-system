<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaptismalSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'email',
        'childs_name',
        'desired_date',
        'desired_time',
        'mothers_name',
        'mothers_contact_number',
        'fathers_name',
        'fathers_contact_number',
        'address',
        'message',
        'approve',
        'reject',
        'childs_birthdate',
        'godfather',
        'godmother',
        'sponsors',
        'parish_priest',
        'childs_birthplace',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
