<?php

namespace App\Livewire\Users\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $services;

    public function mount()
    {
        $this->user = Auth::user();
        $this->services = Service::with('types')->whereHas('types', function ($query) {
            $query->where('type_id', $this->user->type_id);
        })->get();
    }
    public function render()
    {
        return view('livewire.users.services.index');
    }
}
