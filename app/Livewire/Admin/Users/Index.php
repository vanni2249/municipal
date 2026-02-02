<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Index extends Component
{
    use WithPagination;

    public function mount()
    {
        sleep(1);
    }
    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }
   
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.index', [
            'users' => User::with('session', 'status')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
