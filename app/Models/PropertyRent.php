<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRent extends Model
{
    protected $fillable = ['property_id', 'amount'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
