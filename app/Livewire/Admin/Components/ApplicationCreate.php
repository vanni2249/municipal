<?php

namespace App\Livewire\Admin\Components;

use App\Models\Service;
use Livewire\Component;

class ApplicationCreate extends Component
{
    public $account;
    public $business;
    public $service_slug;
    public $service;

    public function mount($account, $business, $service_slug)
    {
        $this->account = $account;
        $this->business = $business;
        $this->service_slug = $service_slug;
        $this->service = Service::where('slug', $service_slug)->first();
    }

    public function render()
    {
        return view('livewire.admin.components.application-create');
    }
}
