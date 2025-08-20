<?php

namespace App\Livewire\Users\Merchants;

use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;
    public $merchant;
    public $businesses = [];

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->merchant = Register::findOrFail($merchant);
        $this->businesses = $this->merchant->businesses()->with(['businessCategory', 'place'])->get();
    }

    public function items()
    {
        return collect([
            ['label' => 'Código', 'value' => $this->merchant->code ?? '...'],
            ['label' => 'Nombre', 'value' => $this->merchant->name ?? '...'],
            ['label' => 'Apellido', 'value' => $this->merchant->lastname ?? '...'],
            ['label' => 'Tipo', 'value' => 'Comerciante'],
            ['label' => 'Creado por', 'value' => $this->merchant->createdBy() ?? '...'],
            ['label' => 'Email', 'value' => $this->merchant->email ?? '...'],
            ['label' => 'Teléfono', 'value' => $this->merchant->phone ?? '...'],
            ['label' => 'Fecha de Nacimiento', 'value' => $this->merchant->date_of_birth ?? '...'],
            ['label' => 'Dirección', 'value' => $this->merchant->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->merchant->city ?? '...'],
            ['label' => 'Código Postal', 'value' => $this->merchant->postal_code ?? '...'],
        ]);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.show', [
            'items' => $this->items(),
            'businesses' => $this->businesses,
        ]);
    }
}
