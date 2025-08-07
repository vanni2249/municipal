<?php

namespace App\Livewire\Users\Registers;

use App\Livewire\Forms\User\RegisterForm;
use Livewire\Component;

class Show extends Component
{
    public RegisterForm $form;

    public function mount($register)
    {
        $this->form->register = $register;
        $this->form->name = $this->form->register->name;
        $this->form->phone = $this->form->register->phone;
        $this->form->date_of_birth = $this->form->register->date_of_birth;
        $this->form->address = $this->form->register->address;
        $this->form->city = $this->form->register->city;
        $this->form->postal_code = $this->form->register->postal_code;
        $this->form->is_veteran = $this->form->register->is_veteran? true : false;
        $this->form->is_age_advanced = $this->form->register->is_senior? true : false;
        $this->form->is_bedridden = $this->form->register->is_bedridden? true : false;
        $this->form->is_disability = $this->form->register->is_disability? true : false;
        $this->form->disability_type = $this->form->register->disability_type;
        $this->form->emergency_contact = $this->form->register->emergency_contact;
        $this->form->emergency_contact_phone = $this->form->register->emergency_contact_phone;
        $this->form->terms = true; // Assuming terms are always accepted in this context
        $this->form->is_disabled = $this->form->register->is_disabled;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();

        $this->dispatch('close-modal', 'edit-register-modal');
    }

    public function items()
    {
        return [
            [
                'key' => 'Tipo',
                'value' => $this->form->register->type->es_name,
            ],
            [
                'key' => 'Code',
                'value' => $this->form->register->code?? '...',
            ],
            [
                'key' => 'Nombre',
                'value' => $this->form->register->name?? '...',
            ],
            [
                'key' => 'phone',
                'value' => $this->form->register->phone??'...',
            ],
            [
                'key' => 'Direccion',
                'value' => $this->form->register->address??'...',
            ],
            [
                'key' => 'Ciudad',
                'value' => $this->form->register->city??'...',
            ],
            [
                'key' => 'Codigo Postal',
                'value' => $this->form->register->postal_code??'...',
            ],
            [
                'key' => 'Fecha de nacimiento',
                'value' => $this->form->register->date_of_birth?? '...',
            ],
            [
                'key' => 'Veterano',
                'value' => $this->form->register->is_veteran ? 'Si' : 'No',
            ],
            [
                'key' => 'Edad avanzada',
                'value' => $this->form->register->is_senior ? 'Si' : 'No',
            ],
            ['key' => 'Encamado',
            'value' => $this->form->register->is_bedridden ? 'Si' : 'No',],
            [
                'key' => 'Discapacidad',
                'value' => $this->form->register->is_disability ? 'Si' : 'No',
            ],
            [
                'key' => 'Fecha de registro',
                'value' => $this->form->register->created_at->format('d/m/Y H:i'),
            ],
            [
                'key' => 'Ultima actualizacion',
                'value' => $this->form->register->updated_at->format('d/m/Y H:i'),
            ],
        ];
    }
    public function render()
    {
        return view('livewire.users.registers.show', [
            'items' => $this->items(),
        ]);
    }
}
