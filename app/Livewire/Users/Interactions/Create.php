<?php

namespace App\Livewire\Users\Interactions;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $user;
    public $type;
    public $service_id;
    public $name;
    public $phone;
    public $message;
    public $count = 0;

    public function rules(){
        return [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'phone' => 'required_if:type,call|string|max:15',
            'message' => 'required|string|max:240',
        ];
    }

    public function mount($type)
    {
        $this->user = Auth::user();
        $this->type = $type;
        $this->name = $this->user->name;
        $this->phone = $this->user->register->phone ?? '';
    }

    public function updatedMessage($value)
    {
        $this->count = strlen($value);
    }

    public function save()
    {
        $this->validate();
        // Create the interaction
        $interaction = $this->user->interactions()->create([
            'user_id' => $this->user->id,
            'type' => $this->type,
            'service_id' => $this->service_id,
            'name' => ($this->name === $this->user->name) ? null : $this->name,
            'phone' => ($this->phone === $this->user->register->phone) ? null : $this->phone,
            'status' => 'pending',
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $interaction->messages()->create([
            'message' => $this->message,
            'user_created_id' => $this->user->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        return redirect()->route('users.interactions.show', $interaction->id)->with('success', 'Tu solicitud ha sido enviada correctamente. Nos pondremos en contacto contigo pronto.');

    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.interactions.create', [
            'services' => Service::all()
        ]);
    }
}
