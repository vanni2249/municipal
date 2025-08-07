<?php

namespace App\Livewire\Forms\User;

use App\Models\Register;
use Livewire\Form;

class RegisterForm extends Form
{
    public $register;
    public $name;
    public $phone;
    public $date_of_birth;
    public $address;
    public $city;
    public $postal_code;
    public $is_veteran = false;
    public $is_age_advanced = false;
    public $is_bedridden = false;
    public $is_disability = false;
    public $disability_type;
    public $emergency_contact;
    public $emergency_contact_phone;
    public $terms = true;
    public $is_disabled = false;
    public $user_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|numeric',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'is_veteran' => 'boolean',
            'is_age_advanced' => 'boolean',
            'is_bedridden' => 'boolean',
            'is_disability' => 'boolean',
            'disability_type' => 'nullable|string|max:100',
            'emergency_contact' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|numeric|max:20',
            'terms' => 'accepted',
            'is_disabled' => 'boolean',
        ];
    }

    public function store()
    {
        Register::create([
            'type_id' => 1, 
            'name' => $this->name,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disability' => $this->is_disability,
            'disability_type' => $this->disability_type,
            'emergency_contact' => $this->emergency_contact,
            'emergency_contact_phone' => $this->emergency_contact_phone,
            'is_disabled' => $this->is_disabled,
            'user_id' => $this->user_id,
        ]); 

        $this->reset([
            'name',
            'phone',
            'date_of_birth',
            'address',
            'city',
            'postal_code',
            'is_veteran',
            'is_age_advanced',
            'is_bedridden',
            'is_disabled',
            'disability_type',
            'emergency_contact',
            'emergency_contact_phone',
            'terms'
        ]);
    }

    public function update()
    {
        $this->register->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disability' => $this->is_disability,
            'disability_type' => $this->disability_type,
            'emergency_contact' => $this->emergency_contact,
            'emergency_contact_phone' => $this->emergency_contact_phone,
            'terms' => $this->terms,
            'is_disabled' => $this->is_disabled,
        ]);
    }
}
