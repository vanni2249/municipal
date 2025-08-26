<?php

namespace App\Livewire\Admin\Accountants;

use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $accountant;
    public $address;

    public function mount($accountant)
    {
        $this->accountant = Register::with(['registers'])->findOrFail($accountant);
        $this->address = $this->accountant->addresses()->where('is_primary', true)->first();
    }

    public function items()
    {
        return collect([
            ['label' => 'Tipo', 'value' => $this->accountant->type->es_name ?? '...'],
            ['label' => 'Código', 'value' => $this->accountant->code ?? '...'],
            ['label' => 'Nombre', 'value' => $this->accountant->name ?? '...'],
            ['label' => 'Apellido', 'value' => $this->accountant->lastname ?? '...'],
            ['label' => 'Fecha de nacimiento', 'value' => $this->accountant->date_of_birth?? '...'],
            ['label' => 'Email', 'value' => $this->accountant->email ?? '...'],
            ['label' => 'Teléfono', 'value' => $this->accountant->phone ?? '...'],
            ['label' => 'Dirección', 'value' => $this->address->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->address->city],
            ['label' => 'Código de area', 'value' => $this->address->postal_code ?? '...'],
            ['label' => 'Creado por', 'value' => $this->accountant->user_id ? 'Contador' : 'Administrador'],
            ['label' => 'Fecha de creación', 'value' => $this->accountant->created_at->format('d/m/Y')],
        ]);
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.accountants.show', [
            'items' => $this->items()
        ]);
    }
}
