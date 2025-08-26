<?php

namespace App\Livewire\Users\Businesses;

use App\Models\Business;
use App\Models\Service;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $business;
    public $address;
    public $merchant;
    public $type_id;

    public function mount($business = null, $merchant = null)
    {
        $this->business = $business ? Business::with(['businessType', 'businessCategory'])->findOrFail($business) : null;
        $this->address = $this->business ? $this->business->addresses()->with(['place'])->where('is_primary', true)->first() : null;
        $this->merchant = $merchant;
        $this->type_id = Type::where('key', 'merchant')->first()->id;
    }

    public function items()
    {
        return collect([
            ['label' => 'Código', 'value' => $this->business->code ?? '..'],
            ['label' => 'Tipo de negocio', 'value' => $this->business->businessType->es_name ?? '..'],
            ['label' => 'Categoría del negocio', 'value' => $this->business->businessCategory->es_name ?? '..'],
            ['label' => 'Nombre del negocio', 'value' => $this->business->name ?? '..'],
            ['label' => 'Numero de comerciante', 'value' => $this->business->number ?? '..'],
            ['label' => 'Lugar', 'value' => $this->address->place->name ?? '..'],
            ['label' => 'Dirección', 'value' => $this->address->address ?? '..'],
            ['label' => 'Ciudad', 'value' => $this->address->city ?? '..'],
            ['label' => 'Código postal', 'value' => $this->address->postal_code ?? '..'],
            ['label' => 'Teléfono', 'value' => $this->business->phone ?? '..'],
        ]);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.show', [
            'business' => $this->business,
            'address' => $this->address,
            'items' => $this->items(),
            'services' => Service::with(['types', 'serviceCategory'])
                                ->where('type_id', $this->type_id)
                                ->where('is_active', true)
                                ->get(),
        ]);
    }
}
