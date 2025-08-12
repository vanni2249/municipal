<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'place_id',
        'postal_code',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
