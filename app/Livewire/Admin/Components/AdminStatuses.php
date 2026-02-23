<?php

namespace App\Livewire\Admin\Components;

use App\Models\StatusType;
use Livewire\Component;

class AdminStatuses extends Component
{
    public $admin;
    public $statusTypeId;

    public function mount($admin)
    {
        $this->admin = $admin;
    }

    public function save()
    {
        // $this->form->update();
        $this->validate([
            'statusTypeId' => "required|exists:status_types,id|not_in:{$this->admin->status->statusType->id}",
        ]);
        if ($this->admin) {
            $this->admin->statuses()->create([
                'status_type_id' => $this->statusTypeId,
            ]);
        }
        $this->dispatch('admin-statuses-updated');
        $this->dispatch('close-modal', 'update-admin-modal');
    }

    public function render()
    {
        return view('livewire.admin.components.admin-statuses', [
            'statusTypes' => StatusType::whereIn('slug', ['active', 'inactive'])->get(),
        ]);
    }
}
