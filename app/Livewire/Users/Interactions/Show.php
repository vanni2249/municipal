<?php

namespace App\Livewire\Users\Interactions;

use App\Models\Interaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;
    public $interaction;
    public $message;
    public $count = 0;

    public function mount($interaction)
    {
        $this->user = Auth::user();
        $this->interaction = Interaction::with(['service', 'messages'])->where('user_id', $this->user->id)->findOrFail($interaction);
        $this->readMessage();
    }

    public function updatedMessage($value)
    {
        $this->count = strlen($value);
    }

    public function readMessage()
    {
        $unreadMessages = $this->interaction->messages()->where('admin_created_id', true)->whereNull('user_read_at')->get();
        foreach ($unreadMessages as $message) {
            $message->update([
                'user_read_id' => $this->user->id,
                'user_read_at' => now(),
            ]);
        }
    }

    public function addMessage()
    {
        $this->validate([
            'message' => 'required|string|max:240',
        ]);
        $this->interaction->messages()->create([
            'message' => $this->message,
            'user_created_id' => $this->user->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
        $this->message = '';
        $this->dispatch('close-modal', 'add-message-modal');
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.interactions.show', [
            'interaction' => $this->interaction,
            'messages' => $this->interaction->messages()->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
