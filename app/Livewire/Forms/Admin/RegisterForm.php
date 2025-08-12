<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Register;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    public $type_id;
    public $name;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $place_id;
    public $postal_code;
    public $is_veteran = false;
    public $is_age_advanced = false;
    public $is_bedridden = false;
    public $is_disabled = false;


    public function rules()
    {
        return [
            'type_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:registers,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
        ];
    }

    public function store()
    {
        $this->validate();

        $register = Register::create([
            'type_id' => $this->type_id,
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        if ($this->address || $this->city || $this->place_id || $this->postal_code) {
            $register->addresses()->create([
                'address' => $this->address,
                'city' => $this->city,
                'place_id' => $this->place_id,
                'postal_code' => $this->postal_code,
            ]);
        }

        if ($this->type_id == 1) {
            if ($this->is_veteran || $this->is_age_advanced || $this->is_bedridden || $this->is_disabled) {
                $register->specialites()->create([
                    'is_veteran' => $this->is_veteran,
                    'is_age_advanced' => $this->is_age_advanced,
                    'is_bedridden' => $this->is_bedridden,
                    'is_disabled' => $this->is_disabled,
                ]);
            }
        }

        return redirect()->route('admin.registers.show', ['register', $register])
            ->with('success', 'Registro creado exitosamente.');
    }
}
