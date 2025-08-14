<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;
    public $merchant;
    public $business;

    public function mount($business)
    {
        $this->user = Auth::user();
        $this->business = Business::with(['businessCategory'])->where('merchant_id', $this->merchant)->findOrFail($business);
    }

    public function items()
    {
        return collect([
            ['label' => 'Categoría', 'value' => $this->business->businessCategory->es_name ?? '...'],
            ['label' => 'Nombre', 'value' => $this->business->name ?? '...'],
            ['label' => 'Número de Comercio', 'value' => $this->business->merchant_number ?? '...'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '...'],
            ['label' => 'Teléfono', 'value' => $this->business->phone ?? '...'],
            ['label' => 'Correo Electrónico', 'value' => $this->business->email ?? '...'],
            ['label' => 'Fecha de Creación', 'value' => $this->business->created_at->format('d/m/Y H:i')],
            ['label' => 'Última Actualización', 'value' => $this->business->updated_at->format('d/m/Y H:i')],
        ]);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.show',[
            'items' => $this->items(),
        ]);
    }
}
