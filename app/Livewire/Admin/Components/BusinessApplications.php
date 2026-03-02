<?php

namespace App\Livewire\Admin\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class BusinessApplications extends Component
{
    public $account;
    public $business;
    public $service_slug;

    public function mount($account, $business)
    {
        $this->account = $account;
        $this->business = $business;
    }

    public function createService($serviceSlug)
    {
        $this->service_slug = $serviceSlug;
        $this->dispatch('close-modal', 'services-list-modal');
        $this->dispatch('open-modal', 'create-business-application-modal');
    }

    #[On('application-created')]
    public function render()
    {
        return view('livewire.admin.components.business-applications', [
            'applications' => $this->business->applications->sortByDesc('created_at')->values(),
            'services' => $this->account->accountType->services()->get(),
        ]);
    }
}
