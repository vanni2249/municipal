<?php

namespace App\Livewire\Admin\Registers;

use App\Models\Type;
use App\Models\UserCategory;
use Livewire\Component;

class Show extends Component
{
    public $register;

    public $type_id;
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
        $this->type_id = $register->type_id;
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
            ['label' => 'Nombre', 'value' => $this->register->name, 'showable' => true],
            ['label' => 'Tipo', 'value' => $this->register->type->es_name, 'showable' => true],
            ['label' => 'Fecha de nacimiento', 'value' => $this->register->date_of_birth ?? '...', 'showable' => true],
            ['label' => 'Codigo', 'value' => $this->register->code ?? '...', 'showable' => true],
            ['label' => 'Email', 'value' => $this->register->email ?? '...', 'showable' => true],
            ['label' => 'Telefono', 'value' => $this->register->phone ?? '...', 'showable' => true],
            ['label' => 'Direccion', 'value' => $this->register->address ?? '...', 'showable' => true],
            ['label' => 'Ciudad', 'value' => $this->register->city ?? '...', 'showable' => true],
            ['label' => 'Codigo Postal', 'value' => $this->register->postal_code ?? '...', 'showable' => true],
            ['label' => 'Veterano', 'value' => $this->register->is_veteran ? 'Si' : 'No', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Edad avanzada', 'value' => $this->register->is_age_advanced ? 'Si' : 'No', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Encamado', 'value' => $this->register->is_bedridden ? 'Si' : 'No', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Discapacidad', 'value' => $this->register->is_disabled ? 'Si' : 'No', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Tipo de discapacidad', 'value' => $this->register->disability_type ?? '...', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Nombre de contacto', 'value' => $this->register->emergency_contact ?? '...', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Telefono de contacto', 'value' => $this->register->emergency_contact_phone ?? '...', 'showable' => $this->register->user_category_id == 1],
            ['label' => 'Fecha de registro', 'value' => $this->register->created_at->format('d/m/Y'), 'showable' => true],
            ['label' => 'Fecha de actualización', 'value' => $this->register->updated_at->format('d/m/Y H:i:s'), 'showable' => true],
        ];
    }

    public function updateRegister()
    {
        $this->validate([
            'type_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:registers,email,' . $this->register->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
        ]);

        $this->register->update([
            'type_id' => $this->type_id,
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
        return view('livewire.admin.registers.show', [
            'types' => Type::whereIn('id', [1, 2, 6])->get(),
            'items' => $this->items(),
        ]);
    }
}
