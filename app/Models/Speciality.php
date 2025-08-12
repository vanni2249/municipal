<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = [
        'is_veteran',
        'is_age_advanced',
        'is_bedridden',
        'is_disability',
        'disability_type',
        'emergency_contact',
        'emergency_contact_phone',
        'register_id',
        'user_id',
    ];

    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
