<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address',
        'city',
        'place_id',
        'postal_code',
    ];

    public function register()
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
