<?php

namespace App\Livewire\Admin\Merchants;

use App\Models\Merchant;
use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $merchant;

    public function mount($merchant)
    {
        $this->merchant = Register::findOrFail($merchant);
    }

    public function items()
    {
        return collect([
            ['label' => 'Tipo', 'value' => $this->merchant->type->es_name ?? '...'],
            ['label' => 'Código', 'value' => $this->merchant->code ?? '...'],
            ['label' => 'Nombre', 'value' => $this->merchant->name ?? '...'],
            ['label' => 'Apellido', 'value' => $this->merchant->lastname ?? '...'],
            ['label' => 'Fecha de nacimiento', 'value' => $this->merchant->date_of_birth?? '...'],
            ['label' => 'Email', 'value' => $this->merchant->email ?? '...'],
            ['label' => 'Teléfono', 'value' => $this->merchant->phone ?? '...'],
            ['label' => 'Lugar', 'value' => $this->merchant->place->name ?? '...'],
            ['label' => 'Dirección', 'value' => $this->merchant->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->merchant->city ?? '...'],
            ['label' => 'Código de area', 'value' => $this->merchant->postal_code ?? '...'],
            ['label' => 'Creado por', 'value' => $this->merchant->user_id ? 'Contador' : 'Administrador'],
            ['label' => 'Fecha de creación', 'value' => $this->merchant->created_at->format('d/m/Y')],
        ]);
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.show', [
            'items' => $this->items()
        ]);
    }
}
