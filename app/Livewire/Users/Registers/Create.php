<?php

namespace App\Livewire\Users\Registers;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $phone;
    public $date_of_birth;
    public $address;
    public $city;
    public $postal_code;
    public $is_veteran = false;
    public $is_age_advanced = false;
    public $is_bedridden = false;
    public $is_disabled = false;
    public $disability_type;
    public $emergency_contact;
    public $emergency_contact_phone;
    public $terms = true;


    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|numeric|max:20',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'is_veteran' => 'boolean',
            'is_age_advanced' => 'boolean',
            'is_bedridden' => 'boolean',
            'is_disabled' => 'boolean',
            'disability_type' => 'nullable|string|max:100',
            'emergency_contact' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|numeric|max:20',
            'terms' => 'accepted',
        ]);
    }

    public function render()
    {
        return view('livewire.users.registers.create');
    }
}
