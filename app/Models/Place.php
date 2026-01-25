<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'name',
        'place_type_id',
    ];
    
    public function placeType()
    {
        return $this->belongsTo(PlaceType::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }


    /**
     * Get the addresses associated with the place.
     */
    // public function addresses()
    // {
    //     return $this->hasMany(Address::class);
    // }

    // public function citizens()
    // {
    //     return $this->hasMany(Citizen::class);
    // }

    // public function places()
    // {
    //     return $this->hasMany(Place::class);
    // }
}
