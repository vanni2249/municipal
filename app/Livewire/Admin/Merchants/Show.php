<?php

namespace App\Livewire\Admin\Merchants;

use App\Models\Merchant;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $merchant;

    public function mount($merchant)
    {
        $this->merchant = Merchant::findOrFail($merchant);
    }

    public function items()
    {
        return collect([
            ['label' => 'Nombre', 'value' => $this->merchant->name ?? '...'],
            ['label' => 'Email', 'value' => $this->merchant->email ?? '...'],
            ['label' => 'Telefono', 'value' => $this->merchant->phone ?? '...'],
            ['label' => 'Creado por', 'value' => $this->merchant->user_id ? 'Contador' : 'Administrador'],
            ['label' => 'Fecha de creacion', 'value' => $this->merchant->created_at->format('d/m/Y')],
            ['label' => 'Direccion', 'value' => $this->merchant->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->merchant->city ?? '...'],
            ['label' => 'Codigo de area', 'value' => $this->merchant->postal_code ?? '...'],
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
