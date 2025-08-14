<?php

namespace App\Livewire\Users\Businesses;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $business;

    public function mount(Business $business)
    {
        $this->business = $business;
    }

    public function items()
    {
        return collect([
            ['label' => 'Código', 'value' => $this->business->code ?? '..'],
            ['label' => 'Tipo de negocio', 'value' => $this->business->businessType->es_name ?? '..'],
            ['label' => 'Categoría del negocio', 'value' => $this->business->businessCategory->es_name ?? '..'],
            ['label' => 'Nombre del negocio', 'value' => $this->business->name ?? '..'],
            ['label' => 'Numero de comerciante', 'value' => $this->business->merchant_number ?? '..'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '..'],
            ['label' => 'Lugar', 'value' => $this->business->place->name ?? '..'],
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
