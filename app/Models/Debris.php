<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debris extends Model
{
    protected $fillable = [
        'action_id',
        'place_id',
        'address',
        'city',
        'postal_code',
        'debris_type_id',
        'description',
    ];

    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    public function debrisType()
    {
        return $this->belongsTo(DebrisType::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
