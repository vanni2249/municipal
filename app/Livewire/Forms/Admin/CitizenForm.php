<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CitizenForm extends Form
{
    public $citizen;
    public $name;
    public $lastname;
    public $date_of_birth;
    public $email;
    public $phone;
    public $place_id;
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
    public $is_disabled = false;
    public $created_by = 'admin';
    public $admin_id;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|unique:registers,email,' . ($this->citizen->id ?? 'NULL') . ',id',
            'phone' => 'required|string|max:20',
            'place_id' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'is_veteran' => 'boolean',
            'is_age_advanced' => 'boolean',
            'is_bedridden' => 'boolean',
            'is_disability' => 'boolean',
            'disability_type' => 'nullable|string|max:100',
            'emergency_contact' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|numeric|max:20',
            'is_disabled' => 'boolean',
            'created_by' => 'in:admin,accountant,user',
            'admin_id' => 'nullable|exists:admins,id',
        ];
    }

    public function save()
    {
        $citizen = Register::create([
            'type_id' => 1, // Assuming type_id is fixed for citizens
            'code' => 'CIT-' . time(), // Example code generation
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'place_id' => $this->place_id,
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
            'created_by' => $this->created_by,
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        return redirect()->route('admin.citizens.show', $citizen);
    }

    public function update()
    {
        $this->citizen->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'place_id' => $this->place_id,
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
        ]);

        return redirect()->route('admin.citizens.show', $this->citizen);
    }
}
