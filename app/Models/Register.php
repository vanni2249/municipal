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
        'register_id',
        'company_name',
        'number',
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

    public function businessesCount()
    {
        return $this->businesses()->count() . ' negocio' . ($this->businesses()->count() !== 1 ? 's' : '');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function register()
    {
        return $this->belongsTo(Register::class, 'register_id');
    }

    public function registers()
    {
        return $this->hasMany(Register::class, 'register_id');
    }

    public function createdBy()
    {
        switch ($this->created_by) {
            case 'admin':
                return 'Creado por el administrador';
                break;

            case 'accountant':
                return 'Creado por el contador';
                break;

            default:
                return 'Creado por el usuario';
                break;
        }
    }
}
