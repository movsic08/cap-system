<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'organi',
        'name',
        'gender',
        'date_of_birth',
        'address',
        'phone_number',
    ];

    public function organizations(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'organization_id');

    }
}
