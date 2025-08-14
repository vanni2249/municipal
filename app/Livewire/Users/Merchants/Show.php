<?php

namespace App\Livewire\Users\Merchants;

use App\Models\Merchant;
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
        $this->merchant = Merchant::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->businesses = $this->merchant->businesses()->get();
    }

    public function items()
    {
        return collect([
            ['label' => 'Nombre', 'value' => $this->merchant->name ?? '...'],
            ['label' => 'Email', 'value' => $this->merchant->email ?? '...'],
            ['label' => 'Telefono', 'value' => $this->merchant->phone ?? '...'],
            ['label' => 'Fecha de Nacimiento', 'value' => $this->merchant->date_of_birth ?? '...'],
            ['label' => 'Direccion', 'value' => $this->merchant->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->merchant->city ?? '...'],
            ['label' => 'Codigo Postal', 'value' => $this->merchant->postal_code ?? '...'],
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
