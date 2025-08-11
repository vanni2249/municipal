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
        $this->business = Business::with(['businessCategory'])->where('register_id', $this->merchant)->findOrFail($business);
    }

    public function items()
    {
        return [
            ['key' => 'Categoría', 'value' => $this->business->businessCategory->es_name??'...'],
            ['key' => 'Nombre', 'value' => $this->business->name??'...'],
            ['key' => 'Número de Comercio', 'value' => $this->business->merchant_number??'...'],
            ['key' => 'Dirección', 'value' => $this->business->address??'...'],
            ['key' => 'Teléfono', 'value' => $this->business->phone??'...'],
            ['key' => 'Correo Electrónico', 'value' => $this->business->email??'...'],
            ['key' => 'Fecha de Creación', 'value' => $this->business->created_at->format('d/m/Y H:i')],
            ['key' => 'Última Actualización', 'value' => $this->business->updated_at->format('d/m/Y H:i')],
        ];
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.show',[
            'items' => $this->items(),
        ]);
    }
}
