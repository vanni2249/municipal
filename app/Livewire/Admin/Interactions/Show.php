<?php

namespace App\Livewire\Admin\Interactions;

use App\Models\Interaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $admin;
    public $interaction;
    public $status;
    public $message;
    public $count = 0;

    public function mount($interaction)
    {
        // $this->admin = Auth::guard('admin')->user();
        // $this->interaction = Interaction::with(['service', 'messages'])->findOrFail($interaction);
        // $this->status = 'in_progress';
        // $this->readMessage();
    }

    public function updatedMessage($value)
    {
        $this->count = strlen($value);
    }

    public function readMessage()
    {
        $unreadMessages = $this->interaction->messages()
            ->whereNotNull('user_created_id')
            ->whereNull('admin_read_at')
            ->get();
        // dd($unreadMessages->count());
        foreach ($unreadMessages as $message) {
            $message->update([
                'admin_read_id' => $this->admin->id,
                'admin_read_at' => now(),
            ]);
        }
    }

    public function addMessage()
    {
        $this->validate([
            'message' => 'required|string|max:240',
        ]);

        $this->interaction->update(['status' => $this->status]);

        $this->interaction->messages()->create([
            'message' => $this->message,
            'admin_created_id' => $this->admin->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
        $this->message = '';
        $this->dispatch('close-modal', 'add-message-modal');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.interactions.show', [
            // 'interaction' => $this->interaction,
            // 'messages' => $this->interaction->messages()->with(['interaction'])->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
