<?php

namespace App\Livewire\Admin\Users;

use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public $blocked_reason;

    public function mount($user)
    {
        $this->user = $user->load('category');
    }

    public function approveUser()
    {
        $this->user->update(['approved_at' => now()]);
        $this->dispatch('close-modal', 'approve-user-modal');
    }

    public function disapproveUser()
    {
        $this->user->update(['approved_at' => null]);
        $this->dispatch('close-modal', 'approve-user-modal');
    }

    public function blockUser()
    {
        $this->validate([
            'blocked_reason' => 'required|string|max:255',
        ]);
        $this->user->update(['blocked_at' => now(), 'blocked_reason' => $this->blocked_reason, 'blocked_by' => auth()->guard('admin')->user()->id]);
        $this->dispatch('close-modal', 'block-user-modal');
    }

    public function unblockUser()
    {
        $this->user->update(['blocked_at' => null, 'blocked_reason' => null, 'blocked_by' => null]);
        $this->dispatch('close-modal', 'block-user-modal');
    }

    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
        ]);
    }
}
