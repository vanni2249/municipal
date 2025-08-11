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
        $this->merchant = Register::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->businesses = $this->merchant->businesses()->get();
    }

    public function items()
    {
        return [
            ['key' => 'Nombre', 'value' => $this->merchant->name ?? '...'],
            ['key' => 'Email', 'value' => $this->merchant->email ?? '...'],
            ['key' => 'Telefono', 'value' => $this->merchant->phone ?? '...'],
            ['key' => 'Fecha de Nacimiento', 'value' => $this->merchant->date_of_birth ?? '...'],
            ['key' => 'Direccion', 'value' => $this->merchant->address ?? '...'],
            ['key' => 'Ciudad', 'value' => $this->merchant->city ?? '...'],
            ['key' => 'Codigo Postal', 'value' => $this->merchant->postal_code ?? '...'],
        ];
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
