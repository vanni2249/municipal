<?php

namespace App\Livewire\Admin\Components;

use App\Models\Service;
use Livewire\Component;

class ServiceCreate extends Component
{
    public $account;
    public $service;
    public $service_slug;

    public function mount($account, $service_slug)
    {
        if ($service_slug) {
            $this->account = $account;
            $this->service_slug = $service_slug;    
        }
    }

    public function render()
    {
        return view('livewire.admin.components.service-create');
    }
}
