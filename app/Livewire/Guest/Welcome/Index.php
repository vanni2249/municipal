<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\Account;
use App\Models\AccountType;
use App\Models\Department;
use App\Models\Service;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $city = [];
    public $services;

    public function mount()
    {
        $this->services = Service::get();
        // Get one random city from the list of cities
        $this->city = $this->cities()[array_rand($this->cities())];

    }

    public function cities()
    {
        return [
            'Villalba',
            'Juana Diaz',
            'Ponce',
            'Santa Isabel',
            'Salinas',
            'Coamo',
        ];
    }

    #[Layout('layouts.landing')]
    public function render()
    {
        return view('livewire.guest.welcome.index', [
            'accountTypes' => AccountType::whereIn('slug', ['citizen', 'merchant'])->get(),
            'departments' => Department::all()
        ]);
    }
}
