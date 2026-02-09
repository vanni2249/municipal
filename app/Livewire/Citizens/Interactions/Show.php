<?php

namespace App\Livewire\Citizens\Interactions;

use App\Models\Interaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $interaction;
    public $message;

    public function mount($interaction)
    {
        $this->interaction = Interaction::where('ulid', $interaction)->first();

        $this->interaction->messages()->where('created_admin_id', true)->where('read_account_id', null)->update([
            'read_account_id' => $this->interaction->account->id,
            'read_account_at' => now(),
        ]);
    }

    public function responseSupportInteraction()
    {
        $this->validate([
            'message' => 'required|string|max:100',
        ]);

        $this->interaction->messages()->create([
            'message' => $this->message,
            'created_account_id' => $this->interaction->account->id,
            'user_id' => Auth::id(),
        ]);

        $this->message = '';

        $this->dispatch('close-modal', 'response-support-interaction-modal');

    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.interaction-show');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.interactions.show', [
            'interaction' => $this->interaction,
            'messages' => $this->interaction->messages()->orderBy('id', 'desc')->get(),
        ]);
    }
}
