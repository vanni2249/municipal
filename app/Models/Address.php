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
        'city',
        'postal_code',
        'is_primary',
        'is_postal',
    ];

    public function register()
    {
        return $this->morphTo();
    }

    public function business()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->morphTo();
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

}
