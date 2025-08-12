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
        return [
            ['label' => 'Nombre', 'value' => $this->merchant->name,],
            ['label' => 'Email', 'value' => $this->merchant->email,],
            ['label' => 'Telefono', 'value' => $this->merchant->phone,],
            ['label' => 'Direccion', 'value' => $this->merchant->address,],
            ['label' => 'Lugar', 'value' => $this->merchant->place ? $this->merchant->place->name : 'N/A',],
            ['label' => 'Fecha de creacion', 'value' => $this->merchant->created_at->format('d/m/Y'),],
        ];
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.show', [
            'items' => $this->items()
        ]);
    }
}
