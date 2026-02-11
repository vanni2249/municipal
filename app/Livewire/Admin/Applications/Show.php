<?php

namespace App\Livewire\Admin\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $application;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->with(['service', 'business','status', 'status.statusType', 'invoice', 'invoice.transactions'])->first();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.applications.show');
    }
}
