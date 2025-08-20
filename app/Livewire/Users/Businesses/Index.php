<?php

namespace App\Livewire\Users\Businesses;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $register_id;
    public $type;
    public function mount($merchant = null)
    {
        $this->user = Auth::user();
        $this->register_id = $merchant;
        $this->type = $this->user->register->type->key;
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.index', [
            'businesses' => Business::when($this->type === 'accountant', function ($query) {
                return $query->whereIn('register_id', $this->user->register->registers->pluck('id'));
            })->when($this->type === 'merchant', function ($query) {
                return $query->where('register_id', $this->user->register->id);
            })->get()
        ]);
    }
}
