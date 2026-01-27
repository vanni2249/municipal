<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'addressable_id',
        'addressable_type',
        'name',
        'place_id',
        'address',
        'postal_code',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

}
