<?php

namespace App\Livewire\Admin\Admins\Components;

use App\Models\Admin;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class AdminsList extends Component
{
    use WithPagination;

    public function mount()
    {
        sleep(1);
    }
    public function placeholder()
    {
        return view('placeholders.table-skeleton');
    }

    public function render()
    {
        return view('livewire.admin.admins.components.admins-list', [
            'admins' => Admin::with('session', 'status')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
