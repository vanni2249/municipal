<?php

namespace App\Livewire\Admin\Components;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class CitizenApplications extends Component
{
    public $account;
    public $service_id;
    public $service_slug;

    public function mount($account)
    {
        $this->account = $account;
    }

    public function createService($serviceSlug)
    {
        $this->service_slug = $serviceSlug;
        $this->dispatch('close-modal', 'services-list-modal');
        $this->dispatch('open-modal', 'create-citizen-application-modal');
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.citizen-applications');
    }

    #[On('application-created')]
    public function render()
    {
        return view('livewire.admin.components.citizen-applications', [
            'applications' => $this->account->applications->sortByDesc('created_at')->values(),
            'services' => $this->account->accountType->services()->get(),
        ]);
    }
}
