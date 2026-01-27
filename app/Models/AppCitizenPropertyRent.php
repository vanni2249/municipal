<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenPropertyRent extends Model
{
    protected $table = 'app_citizen_property_rents';

    protected $fillable = [
        'property_id',
        'rent_date',
        'description',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
