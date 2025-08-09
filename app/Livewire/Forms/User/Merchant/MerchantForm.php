<?php

namespace App\Livewire\Forms\User\Merchant;

use App\Models\Register;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantForm extends Form
{
    public $merchant;
    public $merchant_name;
    public $merchant_email;
    public $merchant_phone;
    public $merchant_date_of_birth;
    public $merchant_address;
    public $merchant_city;
    public $merchant_postal_code;
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
            'merchant_name' => 'required|string|max:255',
            'merchant_email' => 'nullable|email|max:255',
            'merchant_phone' => 'nullable|numeric',
            'merchant_date_of_birth' => 'required|date',
            'merchant_address' => 'nullable|string|max:255',
            'merchant_city' => 'nullable|string|max:100',
            'merchant_postal_code' => 'nullable|string|max:20',
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
            'type_id' => 2, 
            'name' => $this->merchant_name,
            'email' => $this->merchant_email,
            'phone' => $this->merchant_phone,
            'date_of_birth' => $this->merchant_date_of_birth,
            'address' => $this->merchant_address,
            'city' => $this->merchant_city,
            'postal_code' => $this->merchant_postal_code,
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
            'merchant_name',
            'merchant_phone',
            'merchant_date_of_birth',
            'merchant_address',
            'merchant_city',
            'merchant_postal_code',
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
        $this->merchant->update([
            'name' => $this->merchant_name,
            'email' => $this->merchant_email,
            'phone' => $this->merchant_phone,
            'date_of_birth' => $this->merchant_date_of_birth,
            'address' => $this->merchant_address,
            'city' => $this->merchant_city,
            'postal_code' => $this->merchant_postal_code,
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
