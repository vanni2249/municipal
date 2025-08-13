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
        $this->business = Business::where('merchant_id', $merchant)
            ->findOrFail($business);
    }

    public function items()
    {
        return [
            ['label' => 'Categoria de negocio', 'value' => $this->business->businessCategory->es_name ?? '...'],
            ['label' => 'Nombre del negocio', 'value' => $this->business->name],
            ['label' => 'Número de identificación', 'value' => $this->business->code ?? '...'],
            ['label' => 'Número de comercio', 'value' => $this->business->merchant_number ?? '...'],
            ['label' => 'Número de teléfono', 'value' => $this->business->phone ?? '...'],
            ['label' => 'Correo electrónico', 'value' => $this->business->email ?? '...'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->business->place->name ?? '...'],
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
