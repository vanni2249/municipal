<?php

namespace App\Livewire\Admin\Users\Components;

use App\Models\User;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class UsersList extends Component
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
        return view('livewire.admin.users.components.users-list', [
            'users' => User::with('session', 'status')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
