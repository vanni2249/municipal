<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenRegisterSpecialPerson extends Model
{
    protected $table = 'app_citizen_register_special_people';

    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'is_disabled',
        'disability_type',
        'is_veteran',
        'is_deceased',
        'deceased_date',
        'relationship',
        'contact_person',
        'contact_number',
        'address',
        'remarks',
        'is_active',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
    
}
