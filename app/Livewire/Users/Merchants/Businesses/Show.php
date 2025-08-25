<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Models\Business;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;
    public $merchant;
    public $business;
    public $type_id;

    public function mount($merchant, $business)
    {
        $this->user = Auth::user();
        $this->merchant = $merchant;
        $this->business = Business::with(['businessCategory'])->where('register_id', $this->merchant)->findOrFail($business);
        $this->type_id = Type::where('key', 'merchant')->first()->id;
    }

    public function items()
    {
        return collect([
            ['label' => 'Tipo de Comercio', 'value' => $this->business->businessType->es_name ?? '...'],
            ['label' => 'Categoría', 'value' => $this->business->businessCategory->es_name ?? '...'],
            ['label' => 'Código', 'value' => $this->business->code ?? '...'],
            ['label' => 'Nombre', 'value' => $this->business->name ?? '...'],
            ['label' => 'Número de Comercio', 'value' => $this->business->number ?? '...'],
            ['label' => 'Lugar', 'value' => $this->business->place->name ?? '...'],
            ['label' => 'Dirección', 'value' => $this->business->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->business->city ?? '...'],
            ['label' => 'Código postal', 'value' => $this->business->postal_code ?? '...'],
            ['label' => 'Teléfono', 'value' => $this->business->phone ?? '...'],
            ['label' => 'Fecha de Creación', 'value' => $this->business->created_at->format('d/m/Y H:i')],
            ['label' => 'Última Actualización', 'value' => $this->business->updated_at->format('d/m/Y H:i')],
        ]);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.show',[
            'items' => $this->items(),
            'business' => $this->business,
            'services' => Service::with(['types', 'serviceCategory'])
                                ->where('type_id', $this->type_id)
                                ->where('is_active', true)
                                ->get(),
        ]);
    }
}
