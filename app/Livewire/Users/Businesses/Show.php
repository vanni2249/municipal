<?php

namespace App\Livewire\Users\Businesses;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $business;
    public $merchant;

    public function mount($business = null, $merchant = null)
    {
        $this->business = $business ? Business::findOrFail($business) : null;
        $this->merchant = $merchant;
    }

    public function items()
    {
        return collect([
            ['label' => 'Código', 'value' => $this->business->code ?? '..'],
            ['label' => 'Tipo de negocio', 'value' => $this->business->businessType->es_name ?? '..'],
            ['label' => 'Categoría del negocio', 'value' => $this->business->businessCategory->es_name ?? '..'],
            ['label' => 'Nombre del negocio', 'value' => $this->business->name ?? '..'],
            ['label' => 'Numero de comerciante', 'value' => $this->business->number ?? '..'],
            ['label' => 'Lugar', 'value' => $this->business->place->name ?? '..'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '..'],
            ['label' => 'Ciudad', 'value' => $this->business->city ?? '..'],
            ['label' => 'Código postal', 'value' => $this->business->postal_code ?? '..'],
            ['label' => 'Teléfono', 'value' => $this->business->phone ?? '..'],
        ]);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.show', [
            'business' => $this->business,
            'items' => $this->items(),
        ]);
    }
}
