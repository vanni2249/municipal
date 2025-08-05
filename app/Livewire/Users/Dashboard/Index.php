<?php

namespace App\Livewire\Users\Dashboard;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $user_name;
    public $user_type;
    public $services;

    public function mount()
    {
        $this->user = Auth::user();
        $this->user_name = $this->user->name;
        $this->user_type = $this->user->type->es_name;
        $this->services = Service::with('types')->whereHas('types', function ($query) {
            $query->where('type_id', $this->user->type_id);
        })->take(4)->get();
    }

    public function render()
    {
        return view('livewire.users.dashboard.index');
    }
}
