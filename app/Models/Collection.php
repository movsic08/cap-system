<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'mass_id',
        'first_collection',
        'second_collection',
        'special_collection',
    ];

    public function masses():BelongsTo
    {
        return $this->belongsTo(Mass::class);
    }
}
