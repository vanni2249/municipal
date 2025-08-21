<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $business;

    public function mount($merchant, $business)
    {
        $this->business = Business::where('register_id', $merchant)
            ->findOrFail($business);
    }

    public function items()
    {
        return [
            ['label' => 'Tipo de negocio', 'value' => $this->business->businessType->es_name ?? '...'],
            ['label' => 'Categoría de negocio', 'value' => $this->business->businessCategory->es_name ?? '...'],
            ['label' => 'Nombre del negocio', 'value' => $this->business->name],
            ['label' => 'Código', 'value' => $this->business->code ?? '...'],
            ['label' => 'Número', 'value' => $this->business->number ?? '...'],
            ['label' => 'Número de teléfono', 'value' => $this->business->phone ?? '...'],
            ['label' => 'Lugar', 'value' => $this->business->place->name ?? '...'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->business->city ?? '...'],
            ['label' => 'Código postal', 'value' => $this->business->postal_code ?? '...'],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.show', [
            'business' => $this->business,
            'items' => $this->items(),
        ]);
    }
}
