<?php

namespace App\Livewire\Admin\Visitors;

use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $visitor;
    public $address;

    public function mount($visitor)
    {
        $this->visitor = Register::findOrFail($visitor);
        $this->address = $this->visitor->addresses()->where('is_primary', true)->first();
    }

    public function items()
    {
        return [
            ['label' => 'Tipo', 'value' => $this->visitor->type->es_name??'...'],
            ['label' => 'Nombre', 'value' => $this->visitor->name??'...'],
            ['label' => 'Apellido', 'value' => $this->visitor->lastname??'...'],
            ['label' => 'Fecha de nacimiento', 'value' => $this->visitor->date_of_birth??'...'],
            ['label' => 'Email', 'value' => $this->visitor->email??'...'],
            ['label' => 'Teléfono', 'value' => $this->visitor->phone??'...'],
            ['label' => 'Dirección', 'value' => $this->address->address??'...'],
            ['label' => 'Cuidad', 'value' => $this->address->city??'...'],
            ['label' => 'Código Postal', 'value' => $this->address->postal_code??'...'],
            ['label' => 'Fecha de creación', 'value' => $this->visitor->created_at,],
            ['label' => 'Creado por', 'value' => $this->visitor->created_by??'...'],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.visitors.show', [
            'items' => $this->items()
        ]);
    }
}
