<?php

namespace App\Livewire\Users\Dashboard;

use App\Models\Service;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;
    // public $services;
    public $type_id;

    public function mount()
    {
        $this->user = Auth::user();
        $this->type_id = Type::where('key', session('type_navigation', 'citizen'))->first()->id;
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.dashboard.index',[
            'services' => Service::with(['serviceCategory', 'types'])->where('type_id', $this->type_id)->take(4)->get(),
        ]);
    }
}
