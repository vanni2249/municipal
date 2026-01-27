<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenPropertyUse extends Model
{
    protected $fillable = [
        'property_id',
        'use_date',
        'description',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
