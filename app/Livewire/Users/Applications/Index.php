<?php

namespace App\Livewire\Users\Applications;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $services;

    public function mount()
    {
        $this->user = Auth::user();
        $this->services = Service::with('types')->where('service_category_id', 1)->whereHas('types', function ($query) {
            $query->where('type_id', $this->user->type_id);
        })->take(4)->get();
    }
    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.applications.index');
    }
}
