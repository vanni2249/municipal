<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'type_id',
        'code',
        'name',
        'lastname',
        'date_of_birth',
        'email',
        'phone',
        'place_id',
        'address',
        'city',
        'postal_code',
        'is_veteran',
        'is_age_advanced',
        'is_bedridden',
        'is_disability',
        'disability_type',
        'is_disabled',
        'emergency_contact',
        'emergency_contact_phone',
        'created_by',
        'user_id',
        'admin_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
    

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }


    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
