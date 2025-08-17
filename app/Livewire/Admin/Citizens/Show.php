<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $citizen;

    public function mount($citizen)
    {
        $this->citizen = Register::findOrFail($citizen);
    }

    public function items()
    {
        return [
            ['label' => 'Nombre', 'value' => $this->citizen->name,],
            ['label' => 'Apellido', 'value' => $this->citizen->lastname,],
            ['label' => 'Código', 'value' => $this->citizen->code??'...',],
            ['label' => 'Teléfono', 'value' => $this->citizen->phone??'...',],
            ['label' => 'Fecha de nacimiento', 'value' => $this->citizen->date_of_birth??'...',],
            ['label' => 'Email', 'value' => $this->citizen->email??'...',],
            ['label' => 'Teléfono', 'value' => $this->citizen->phone??'...',],
            ['label' => 'Ciudad', 'value' => $this->citizen->city??'...',],
            ['label' => 'Código Postal', 'value' => $this->citizen->postal_code??'..',],
            ['label' => 'Veterano', 'value' => $this->citizen->is_veteran ? 'Sí' : 'No',],
            ['label' => 'Edad avanzada', 'value' => $this->citizen->is_age_advanced ? 'Sí' : 'No',],
            ['label' => 'Postrado en cama', 'value' => $this->citizen->is_bedridden ? 'Sí' : 'No',],
            ['label' => 'Discapacidad', 'value' => $this->citizen->is_disability ? 'Sí' : 'No',],
            ['label' => 'Tipo de discapacidad', 'value' => $this->citizen->disability_type ?? '...',],
            ['label' => 'Contacto de emergencia', 'value' => $this->citizen->emergency_contact??'...',],
            ['label' => 'Teléfono de contacto de emergencia', 'value' => $this->citizen->emergency_contact_phone??'...',],
            ['label' => 'Discapacitado', 'value' => $this->citizen->is_disabled ? 'Sí' : 'No',],
            ['label' => 'Creado por', 'value' => $this->citizen->created_by,],
            ['label' => 'Administrador', 'value' => $this->citizen->admin_id ? $this->citizen->admin->name . ' ' . $this->citizen->admin->lastname : '...',],
            ['label' => 'Usuario', 'value' => $this->citizen->user_id ? $this->citizen->user->code??'...' : '...',],
            ['label' => 'Dirección', 'value' => $this->citizen->address??'...',],
            ['label' => 'Lugar', 'value' => $this->citizen->place ? $this->citizen->place->name : '...',],
            ['label' => 'Fecha de creación', 'value' => $this->citizen->created_at->format('d/m/Y'),],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.show', [
            'items' => $this->items()
        ]);
    }
}
