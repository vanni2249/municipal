<?php

namespace App\Livewire\Admin\Registers;

use Livewire\Component;

class Show extends Component
{
    public $register;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $date_of_birth;
    public $is_veteran;
    public $is_age_advanced;
    public $is_bedridden;
    public $is_disabled;

    public function mount($register)
    {
        $this->register = $register;
        $this->name = $register->name;
        $this->email = $register->email;
        $this->phone = $register->phone;
        $this->address = $register->address;
        $this->city = $register->city;
        $this->postal_code = $register->postal_code;
        $this->date_of_birth = $register->date_of_birth;
        $this->is_veteran = $register->is_veteran ? true : false;
        $this->is_age_advanced = $register->is_age_advanced ? true : false;
        $this->is_bedridden = $register->is_bedridden ? true : false;
        $this->is_disabled = $register->is_disabled ? true : false;
    }
    
    public function items()
    {
        return [
            ['label' => 'Nombre', 'value' => $this->register->user ? $this->register->user->name : $this->register->name],
            ['label' => 'Fecha de nacimiento', 'value' => $this->register->user ? $this->register->user->date_of_birth ?? '...'  : $this->register->date_of_birth ?? '...'],
            ['label' => 'Codigo', 'value' => $this->register->code ?? '...'],
            ['label' => 'Email', 'value' => $this->register->user ? $this->register->user->email : $this->register->email ?? '...'],
            ['label' => 'Telefono', 'value' => $this->register->user ? $this->register->user->phone : $this->register->phone ?? '...'],
            ['label' => 'Direccion', 'value' => $this->register->user ? $this->register->user->address : $this->register->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->register->user ? $this->register->user->city : $this->register->city ?? '...'],
            ['label' => 'Codigo Postal', 'value' => $this->register->user ? $this->register->user->postal_code : $this->register->postal_code ?? '...'],
            ['label' => 'Veterano', 'value' => $this->register->is_veteran ? 'Si' : 'No'],
            ['label' => 'Edad avanzada', 'value' => $this->register->is_age_advanced ? 'Si' : 'No'],
            ['label' => 'Encamado', 'value' => $this->register->is_bedridden ? 'Si' : 'No'],
            ['label' => 'Discapacidad', 'value' => $this->register->is_disabled ? 'Si' : 'No'],
            ['label' => 'Tipo de discapacidad', 'value' => $this->register->disability_type ?? '...'],
            ['label' => 'Nombre de contacto', 'value' => $this->register->emergency_contact ?? '...'],
            ['label' => 'Telefono de contacto', 'value' => $this->register->emergency_contact_phone ?? '...'],
            ['label' => 'Fecha de registro', 'value' => $this->register->created_at->format('d/m/Y')],
            ['label' => 'Fecha de actualización', 'value' => $this->register->updated_at->format('d/m/Y H:i:s')],
        ];
    }

    public function updateRegister()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:registers,email,' . $this->register->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
        ]);

        $this->register->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'date_of_birth' => $this->date_of_birth,
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disabled' => $this->is_disabled,
        ]);

        $this->dispatch('close-modal', 'edit-register-modal');
    }

    public function render()
    {
        return view('livewire.admin.registers.show',[
            'items' => $this->items(),
        ]);
    }
}
