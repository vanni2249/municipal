<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'type_id',
        'code',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'is_veteran',
        'is_age_advanced',
        'is_bedridden',
        'is_disabled',
        'is_disability',
        'disability_type',
        'emergency_contact',
        'emergency_contact_phone',
        'date_of_birth',
        'user_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
