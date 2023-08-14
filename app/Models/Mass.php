<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mass extends Model
{
    use HasFactory;

    protected $fillable = [
        'mass',
        'date',
        'details'
    ];

    public function collections():HasMany
    {
        return $this->hasMany(Collection::class, 'mass_id');
    }
}
