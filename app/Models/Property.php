<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'uuid',
        'number',
        'property_type_id',
        'name',
        'address',
        'postal_code',
        'place_id',
    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function propertyRent()
    {
        return $this->hasOne(PropertyRent::class);
    }
}
